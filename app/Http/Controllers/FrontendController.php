<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.about');
    }

    public function services(){
        return view('frontend.services');
    }

    public function gallery(){
        return view('frontend.gallery');
    }

    public function blog(){
        return view('frontend.blog');
    }

}
