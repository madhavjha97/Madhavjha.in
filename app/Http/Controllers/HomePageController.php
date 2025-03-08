<?php

namespace App\Http\Controllers;

use App\Models\Admin\BasicSetting;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home(){
        $basicsetting = BasicSetting::first();
        return view('Home.home', compact('basicsetting'));
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
