<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctrlcomsuivre extends Controller{
	public function index(){
		return view("c-suivre");
	}
}
