<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiverController extends Controller
{
	public function index(){
		return view('river.index');
	}

}
