<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctrlvisrenseignement extends Controller{
	public function index(){
		return view("v-renseignement");
	}
}
