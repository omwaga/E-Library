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
		$levels =  EducationLevel::all();

		return view('auth.admin-login', compact('levels'));
	}

    //Return the home page
	public function home()
	{
		$levels =  EducationLevel::all()->random(3); 
		$classes = EducationClass::all()->random(6);

		return view('welcome', compact('levels', 'classes'));
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

	// retutn the about page
	public function about()
	{
		$levels =  EducationLevel::all(); 

		return view('about-us', compact('levels'));
	}

	//return the contact page
	public function contact()
	{
		$levels =  EducationLevel::all();

		return view('contact-us', compact('levels'));
	}

	//return the blogs page
	public function blog()
	{
		$levels =  EducationLevel::all();

		return view('blog-articles', compact('levels'));
	}

	//return the single blog page
	public function singleblog()
	{
		$levels =  EducationLevel::all();

		return view('blog-article', compact('levels'));
	}
}
