<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCommentRequest;
use App\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function ajaxHistory(Request $request)
    {
        if($request->get('month') and $request->get('year'))
        {
            return response()->json(Post::postsPerMonth($request->get('month'), $request->get('year')));
        }

        if($request->get('year'))
        {
            return response()->json(Post::postsPerMonth(null, $request->get('year')));
        }
    }

    public function ajaxGetPosts(Request $request)
    {
        $result = Post::select('id', 'title', 'slug')->where(function($q) use ($request)
        {
            $q->whereRaw('extract(year from created_at) = ?', $request->get('year'));
            $q->whereRaw('extract(month from created_at) = ?', $request->get('month'));
        })->get()->map(function($item){
            $item->url = route('blog.post', $item->slug);
            return $item;
        });

        return response()->json($result);
    }

    public function index(Request $request)
    {
        $list = Post::where(function($q) use ($request)
        {
            if($search = $request->get('q'))
            {
                $q->orWhere('title', 'ilike', "%{$search}%");
                $q->orWhere('slug', 'ilike', "%{$search}%");
                $q->orWhere('abstract', 'ilike', "%{$search}%");
                $q->orWhere('text', 'ilike', "%{$search}%");
                $q->orWhereHas('tags', function($q) use ($search)
                {
                    $q->where('slug', 'ilike', "%{$search}%");
                });
            }
        })->orderBy('created_at', 'desc')->paginate(10);

        $this->htmlTitle = 'Blog';
        $this->title = 'Blog';
        $this->subtitle = '';

        return view('blog.list', compact('list'));
    }

    public function show($slug)
    {
        try
        {
            $item = Post::findOrFailBySlug($slug);
            $this->htmlTitle = $item->title;
            $this->title = $item->title;
            $this->subtitle = 'por ' . '<a href="#">' . $item->user->name . '</a>';
            $comments = $item->comments()
                ->whereNull('parent_id')
                ->where('status', true)
                ->orderBy('created_at', 'desc')
                ->get();
            return view('blog.post', compact('item', 'comments'));
        }
        catch (ModelNotFoundException $ex)
        {
            $this->htmlTitle = '404 - Página não encontrada';
            $this->title = '404';
            $this->subtitle = 'Página não encontrada';
            return view('errors.404');
        }
    }

    public function addComment(AddCommentRequest $request, $slug)
    {
        try
        {
            $item = Post::findOrFailBySlug($slug);
            $comment = $item->comments()->create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'comment' => $request->get('comment')
            ]);

            if($parent_id = $request->get('parent_id'))
            {
                $comment->parent_id = $parent_id;
            }
            $comment->save();

            return redirect()->back()->with('success', 'comentário feito com sucesso');
        }
        catch (\Exception $ex)
        {
            return redirect()->back()->withErrors($ex->getMessage());
        }
    }
}
