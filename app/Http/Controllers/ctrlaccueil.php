<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctrlaccueil extends Controller{
	
	public function index(){
		return view("welcome");
	}
}
