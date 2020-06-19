<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    //return the dashboard
    public function index()
    {
    	return view('admin.index');
    }

    //Manage the Education Levels
    public function learners()
    {
    	return view('admin.learners');
    }
}
