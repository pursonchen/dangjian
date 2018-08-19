<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('static_pages/home');
    }    

    public function course()
    {
        return view('static_pages/course');
    }    

    public function me()
    {
        return view('static_pages/me');
    }    

    public function exam()
    {
        return view('static_pages/exam');
    }
}
