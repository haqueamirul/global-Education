<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
    	return view('backend.all_application');
    }

    public function create()
    {
    	return view('backend.add_application');
    }
}
