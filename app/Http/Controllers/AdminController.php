<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EducationalResource;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    //return the dashboard
    public function index()
    {
        $latest_uploads = EducationalResource::orderBy('created_at', 'DESC')->get();

    	return view('admin.index', compact('latest_uploads'));
    }

    //Manage the Education Levels
    public function learners()
    {
    	return view('admin.learners');
    }
}
