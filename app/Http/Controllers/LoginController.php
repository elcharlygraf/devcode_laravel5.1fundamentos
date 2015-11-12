<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Redirect;
use Auth;

class LoginController extends Controller
{
  public function login()
   {
    return view('login');
  }
  public function postlogin(LoginRequest $request)
   {
    if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
        return "Hola";
    }
    else{
        return Redirect::back()->withInput();  
    }
   }
  public function getLogout()
    {
        Auth::logout();
        return Redirect::to('/login');
    }
}
