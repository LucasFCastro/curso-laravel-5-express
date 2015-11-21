<?php

namespace MyBlog\Http\Controllers;

use Illuminate\Http\Request;

use MyBlog\Http\Requests;
use MyBlog\Http\Controllers\Controller;

class ArtigosController extends Controller
{
    public function ultimas()
    {
        $artigos = [
            '0'=>"Post 1",
            '1'=>"Post 2",
            '2'=>"Post 3",
            '3'=>"Post 4",
            '4'=>"Post 5"
        ];
        return view('news.ultimas', compact('artigos'));
    }
}
