<?php

namespace MyBlog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'autor'
    ];

    public function comments()
    {
        return $this->hasMany('MyBlog\Comment');
    }

    public function tags()
    {
        return $this->belongsToMany('MyBlog\Tag', 'posts_tags');
    }

}
