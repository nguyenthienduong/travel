<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function home()
    {
        return view('layouts/home');
    }
}
