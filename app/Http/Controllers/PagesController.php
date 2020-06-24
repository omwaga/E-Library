<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EducationLevel;
use App\EducationClass;
use App\EducationalResource;

class PagesController extends Controller
{
    //admin login
	public function login()
	{
		return view('auth.admin-login');
	}

    //Return the home page
	public function home()
	{
		$levels =  EducationLevel::all(); 

		return view('welcome', compact('levels'));
	}

	// Return the classes
	public function classes($level)
	{
		$level_name = ucwords(str_replace('-', ' ', $level));
		$education_level = EducationLevel::where('name', $level_name)->first();
		$classes = EducationClass::where('education_level_id', $education_level->id)->get();

		$levels =  EducationLevel::all(); 

		return view('classes', compact('levels', 'education_level', 'classes'));
	}

	//Return the educational resources for each class
	public function resource($class)
	{
		$class_name = ucwords(str_replace('-', ' ', $class));
		$education_class = EducationClass::where('name', $class_name)->first();
		$resources = EducationalResource::where('education_class_id', $education_class->id)->get();

		$levels =  EducationLevel::all(); 

		return view('resources', compact('education_class', 'resources', 'levels'));
	}
}
