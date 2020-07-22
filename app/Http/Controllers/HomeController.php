<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EducationLevel;
use App\EducationalResource;
use App\EducationClass;
use App\Subject;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $levels =  EducationLevel::all(); 
        $resources = EducationalResource::all(); 
        $classes = EducationClass::all()->all();
        $subjects = Subject::all();

        return view('home', compact('levels', 'resources', 'classes', 'subjects'));
    }
}
