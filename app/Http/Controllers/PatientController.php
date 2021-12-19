<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    function dashboard()
    {
        return view("patient.dashboard");
    }
}
