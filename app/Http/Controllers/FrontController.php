<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function about()
    {
        return view('frontend.about');
    }
    public function services()
    {
        return view('frontend.services');
    }
    public function projects()
    {
        return view('frontend.projects');
    }
    public function contact()
    {
        return view('frontend.contact');
    }

}
