<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    /** Find all posts or filter based on search querystring */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get()
        ]);
    }

    /** Return the single post view */
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
