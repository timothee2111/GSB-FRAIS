<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comptable; 

class ctrlcomespace extends Controller
{
    public function index(Request $request)
    {
        // Récupérer les données du formulaire
        $username = $request->input('login');
        $password = $request->input('password');

        // Rechercher l'utilisateur dans la base de données
        $user = Comptable::where('login', $username)->first();

        // Vérifier si l'utilisateur existe et si le mot de passe est correct
        if ($user && $password === $user->mdp) {
            // Si les informations sont correctes, rediriger vers la vue de l'espace
            return view("c-espace");
        } else {
            // Sinon, rediriger vers la page de connexion avec un message d'erreur
            return redirect('/comptable/connexion')->with('error', 'Nom d\'utilisateur ou mot de passe incorrect.');
        }
    }
}
