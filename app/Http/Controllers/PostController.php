<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Validator;

class PostController extends CrudController
{

    public function __construct()
    {
        $this->paginatorLimit = 10;
        parent::__construct(Post::class);
    }

    public function validateRulesOnCreate(Request $request)
    {
		$rules = [
			'title' => 'required', 
			'slug' => 'required', 
			'abstract' => 'required', 
			'text' => 'required', 
			'user_id' => 'required', 
		];
		return Validator::make($request->all(), $rules);
    }

    public function validateRulesOnUpdate(Request $request)
    {
		$rules = [
			'title' => 'required', 
			'slug' => 'required', 
			'abstract' => 'required', 
			'text' => 'required', 
			'user_id' => 'required', 
		];
		return Validator::make($request->all(), $rules);
    }

}
