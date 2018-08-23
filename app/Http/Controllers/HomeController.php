<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Form;

class HomeController extends Controller
{
    function index() {
    	return view('index');
    }
    function create() {
    	return view('competitions');
    }
    function storeSignups() {

    }
}
