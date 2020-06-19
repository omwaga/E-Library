<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Admin;
Use DB;

class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin',['except' => ['logout', 'getLogout']]);
    }
    
    public function login(Request $request){
        //validate form data
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]
    );
 
    if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)) {
            return redirect()->intended(route('admin')); 
     
    }
             return redirect()->back()->withInput($request->only('email','remember'))->with('error','wrong email address');

    }
        /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function logout(Request $request)
    // {
    //     Auth::guard('employer')->logout();
    //     $request->session()->flush();
    //     $request->session()->regenerate();
    //     return redirect()->guest(route( 'admin.login' ));
    // }

}
