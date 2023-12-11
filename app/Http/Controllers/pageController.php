<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index()  {
        return view('frontend.index');
    }

    public function about()  {
        return view('frontend.about');
    }

    public function membership()  {
        return view('frontend.membership');
    }

    public function contact()  {
        return view('frontend.contact');
    }

    public function event()  {
        return view('frontend.event');
    }

    public function gallery()  {
        return view('frontend.gallery');
    }

    

}
