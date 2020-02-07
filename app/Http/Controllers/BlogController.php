<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::take('10')->orderBy('created_at', 'desc')->get();

        return view('blogs.index', [
            'blogs' => $blogs
        ]);
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        // dd($blog);
        return view('blogs.show', [
            'blog' => $blog
        ]);
    }
}
