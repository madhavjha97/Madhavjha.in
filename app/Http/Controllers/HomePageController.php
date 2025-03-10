<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Jobs\SendContactEmail;
use App\Models\Admin\BasicSetting;
use App\Models\Admin\ProLang;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home(){
        $prolang = ProLang::all();
        $basicsetting = BasicSetting::first();
        return view('Home.home', compact('basicsetting', 'prolang'));
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

    public function project(){
        return view('Home.project');
    }

    public function studentzone(){
        return view('Home.studentzone');
    }


    public function savecontact(Request $request) {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required|string',
        ]);

        Contact::create($data);

        // ✅ Pass only an array instead of the entire request object
        dispatch(new SendContactEmail($data));

        return redirect()->route('home')->with('success', 'Mail sent successfully.');
    }


}
