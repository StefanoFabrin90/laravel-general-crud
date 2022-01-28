<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //homepage
    public function index()
    {
        return view('home');
    }
}
