<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(){return view('home');}
    function pertama(){return view('pertama');}
    function kedua(){return view('kedua');}
    function ketiga(){return view('ketiga');}
}
