<?php

namespace MyBlog\Http\Controllers;


use Illuminate\Http\Request;
use MyBlog\Post;

class ArtigosAdminController extends Controller
{
    /**
     * @var Post
     */
    private $post;

    public function __construct(Post $post)
    {

        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->paginate(5);
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

}
