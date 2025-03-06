<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home(){
        return view('Home.home');
    }
    public function about(){
        return view('Home.about');
    }
    public function contact(){
        return view('Home.contact');
    }

    public function tutorials(){
        return view('Home.tutorials');
    }
}
