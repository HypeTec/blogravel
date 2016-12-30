<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Validator;

class CommentController extends CrudController
{

    public function __construct()
    {
        $this->paginatorLimit = 10;
        parent::__construct(Comment::class);
    }

    public function validateRulesOnCreate(Request $request)
    {
		$rules = [
			'name' => 'required', 
			'email' => 'required', 
			'comment' => 'required', 
			'status' => 'required', 
			'parent_id' => 'required', 
			'post_id' => 'required', 
		];
		return Validator::make($request->all(), $rules);
    }

    public function validateRulesOnUpdate(Request $request)
    {
		$rules = [
			'name' => 'required', 
			'email' => 'required', 
			'comment' => 'required', 
			'status' => 'required', 
			'parent_id' => 'required', 
			'post_id' => 'required', 
		];
		return Validator::make($request->all(), $rules);
    }

}
