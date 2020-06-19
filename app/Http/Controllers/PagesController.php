<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //admin login
    public function login()
    {
        return view('auth.admin-login');
    }
}
