<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    /** Find all posts or filter based on search querystring */
    public function index()
    {
        return view('posts', [
            'posts' => Post::latest()->filter(request(['search', 'category']))->get(),
            'categories' => Category::all(),
            'currentCategory' => Category::firstWhere('slug', request('category'))
        ]);
    }

    /** Return the single post view */
    public function show(Post $post)
    {
        return view('post', [
            'post' => $post
        ]);
    }
}
