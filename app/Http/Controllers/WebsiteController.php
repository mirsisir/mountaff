<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){

        return view('web.web_index');
    }

    public function blog(){

        return view('web.blog');
    }
    public function privacypolicy(){

        return view('web.privacypolicy');
    }
}
