<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function ShowHome()
    {
    	return view('home');
    }

    public function ShowCatalog()
    {
    	return view('catalog');
    }

    public function ShowLocation()
    {
    	return view('location');
    }
}