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
        $category = \App\Models\Category::all();
//        dd($posts);

        return view('web.Blog', compact('posts','category'));
    }

    public function page($slug)
    {


        $post = \App\Models\Post::where('slug', $slug)->firstOrFail();
        $randoms = \App\Models\Post::inRandomOrder()->limit(6)->get();
//        dd($post);
        return view('web.post_page', compact('post','randoms'));
    }

    public function privacypolicy()
    {

        return view('web.privacypolicy');
    }


    public function terms()
    {

        return view('web.terms');
    }



    public function event()
    {

        $post = \App\Models\Post::find(1);
        $randoms = \App\Models\Post::inRandomOrder()->limit(6)->get();
//        dd($post);
        return view('web.event', compact('post','randoms'));
    }





}
