<?php

namespace App\Http\Controllers;
use Validator;
use Auth;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
      function index()
    {
        return view('login');
    }
    
    function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

    // print $user_data;
     if(Auth::attempt($user_data))
     {
      return redirect('main/successlogin');
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }
    }

    function successlogin()
    {
     return view('MainPage');
    }

    function logout()
    {
     Auth::logout();
     return redirect('main');
    }
}
