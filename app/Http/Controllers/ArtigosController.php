<?php

namespace MyBlog\Http\Controllers;

use Illuminate\Http\Request;

use MyBlog\Http\Requests;
use MyBlog\Http\Controllers\Controller;
use MyBlog\Post;

class ArtigosController extends Controller
{
    public function ultimas()
    {
        $artigos = Post::all();
        return view('news.ultimas', compact('artigos'));
    }
}
