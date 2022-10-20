<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {

        return view('web.web_index');
    }

    public function blog()
    {


        $posts = \App\Models\Post::query()->where('is_published', '1')->latest()->paginate(10);
//        dd($posts);
        return view('web.Blog', compact('posts'));
    }

    public function page($slug)
    {


        $post = \App\Models\Post::where('slug', $slug)->firstOrFail();
//        dd($post);
        return view('web.post_page', compact('post'));
    }

    public function privacypolicy()
    {

        return view('web.privacypolicy');
    }
}
