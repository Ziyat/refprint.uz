<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function about()
    {
        return view('front.about');
    }
    public function gallery()
    {
        return view('front.gallery');
    }
    public function contact()
    {
        return view('front.contact');
    }
}
