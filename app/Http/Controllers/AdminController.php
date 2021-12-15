<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
     public function patients()
    {
      $data=User::all();
      return view('admin.patients',compact("data"));
    }

    public function test()
    {
      return view('admin.bodytest');
    }
}
