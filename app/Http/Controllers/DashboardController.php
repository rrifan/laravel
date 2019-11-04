<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
    	return view('dashboard');
    }
    public function tabel(){
    	return view('tabel');
    }
    public function base(){
    	return view('base');
    }
    public function chart(){
    	return view('chart');
    }
}
