<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('Page.Login');
    }

    public function loginAction()
    {
        
    }

    public function logout()
    {
        Session::flush();

    }
}
