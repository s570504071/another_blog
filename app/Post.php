<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title', 'content', 'author_id'];

    public $timestamps = true;

    public function author()
    {
        return $this->belongsTo('User', 'author_id');
    }
}