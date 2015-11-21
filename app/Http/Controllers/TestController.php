<?php

namespace MyBlog\Http\Controllers;

use Illuminate\Http\Request;

use MyBlog\Http\Requests;
use MyBlog\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index($nome)
    {
        return view('test.index', ['nome'=>$nome]);
    }

    public function notas()
    {
        $notas = [
            0 => 'Anotação 1',
            1 => 'Anotação 2',
            2 => 'Anotação 3',
            3 => 'Anotação 4',
            4 => 'Anotação 5',
            5 => 'Anotação 6',
        ];
        return view('test.notas', compact('notas'));
    }

    public function ultimas()
    {
        $posts = [
            "Post 1" => ""
        ];
    }
}
