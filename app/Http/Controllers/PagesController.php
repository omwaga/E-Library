<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EducationLevel;

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
}
