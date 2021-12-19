<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //functions
    function home(){
        return view('home');
    }

    //redirects
    function redirects(){
        if(Auth::user()==null)
            return view('home');
        $user_type= Auth::user()->user_type;
        if($user_type=="1")
            return view('admin.adminhome');
            return view('patient.dashboard');
        
    }
}
