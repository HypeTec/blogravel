<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'abstract', 'text', 'user_id'
    ];

    public function getFillables()
    {
        return $this->fillable;
    }


}
