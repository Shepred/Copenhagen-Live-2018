<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Form;

class HomeController extends Controller
{
    function index() {
    	return view('index');
    }
}
