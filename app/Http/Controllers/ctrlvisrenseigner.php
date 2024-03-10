<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctrlvisrenseigner extends Controller{
	public function index(){
		$request->validate([
            'id' => 'required',
            'libelle' => 'required',
            'montant' => 'required|numeric',
        ]);

        DB::table('fiche_frais')->insert([
            'id' => $request->id,
            'libelle' => $request->libelle,
            'montant' => $request->montant,
        ]);
		return view("v-espace");
	}
}
