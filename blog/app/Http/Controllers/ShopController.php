<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function ShowHome()
    {
    	echo "sdfg";
        die();
        //return view('home');
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