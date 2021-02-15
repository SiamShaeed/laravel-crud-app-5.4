<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function Index(){
    	return view('home');
    }

    public function welcome(){
    	return view('welcome');
    }

}
