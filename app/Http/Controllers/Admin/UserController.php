<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(){
        $users = User::all();
        return view('admin.user.alluser', compact('users'));
    }

    public function delete($id){
        $user = User::findorFail($id);
        $user->delete();
        return redirect()->route('users.list')->with('success', 'User deleted successfully.');

    }
}
