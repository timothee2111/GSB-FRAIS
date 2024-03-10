<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visiteur; 
use App\Models\FraisForfait;

class ctrlvisespace extends Controller
{
    public function index(Request $request)
    {
        $username = $request->session()->get('login');
        $user = Visiteur::where('login', $username)->first();

        if (!$user) {
            return redirect('/visiteur/connexion')->with('error', 'Nom d\'utilisateur introuvable.');
        }

        $fraisForfaitaires = FraisForfait::all();
        
        return view("v-espace", compact('fraisForfaitaires'));
        
    }
}
