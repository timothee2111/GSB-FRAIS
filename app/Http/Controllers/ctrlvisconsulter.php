<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctrlvisconsulter extends Controller{
	public function index(){
		return view("v-consulter");
	}
}
