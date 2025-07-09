<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminHRController extends Controller
{
     public function index()
    {
        return view('Dashhboard.adminhr');
    }
}
