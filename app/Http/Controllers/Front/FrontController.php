<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function services(){
        return view('FrontPage.layouts.services');
    }
    public function cases(){
        return view('FrontPage.layouts.cases');
    }
    public function blog(){
        return view('FrontPage.layouts.blog');
    }

    public function contact(){
        return view('FrontPage.layouts.contact');
    }
    public function blog_single(){
        return view('FrontPage.layouts.blog-single');
    }
    public function about(){
        return view('FrontPage.layouts.about');
    }
    public function home(){
        return view('FrontPage.welcome');
    }

}

