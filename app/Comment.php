<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    protected $table = 'comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'comment', 'status', 'parent_id', 'post_id'
    ];

    public function getFillables()
    {
        return $this->fillable;
    }


}
