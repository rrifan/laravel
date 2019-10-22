<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	function welcom(){return view('welcom');}
    function login(){return view('login');}
    function register(){return view('register');}
}
