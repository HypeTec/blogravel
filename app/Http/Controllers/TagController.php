<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Validator;

class TagController extends CrudController
{

    public function __construct()
    {
        $this->paginatorLimit = 10;
        parent::__construct(Tag::class);
    }

    public function validateRulesOnCreate(Request $request)
    {
		$rules = [
			'title' => 'required', 
			'slug' => 'required', 
		];
		return Validator::make($request->all(), $rules);
    }

    public function validateRulesOnUpdate(Request $request)
    {
		$rules = [
			'title' => 'required', 
			'slug' => 'required', 
		];
		return Validator::make($request->all(), $rules);
    }

}
