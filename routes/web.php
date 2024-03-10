<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ctrlaccueil;
use App\Http\Controllers\ctrlvisconnexion;
use App\Http\Controllers\ctrlvisespace;
use App\Http\Controllers\ctrlvisrenseignement;
use App\Http\Controllers\ctrlvisrenseigner;
use App\Http\Controllers\ctrlvisconsulter;
use App\Http\Controllers\ctrlvisdeconnexion;
use App\Http\Controllers\ctrlvisdeconnecter;
use App\Http\Controllers\ctrlcomconnexion;
use App\Http\Controllers\ctrlcomespace;
use App\Http\Controllers\ctrlcomvalidement;
use App\Http\Controllers\ctrlcomsuivre;
use App\Http\Controllers\ctrlcomdeconnexion;
use App\Http\Controllers\ctrlcomdeconnecter;
use App\Http\Controllers\ctrlcomvalider;

Route::get('/', [ctrlaccueil::class, 'index']);
Route::get('/visiteur/connexion', [ctrlvisconnexion::class, 'index']);
Route::get('/visiteur/espace', [ctrlvisespace::class, 'index']);
Route::get('/visiteur/fiche/renseignement', [ctrlvisrenseignement::class, 'index']);
Route::post('/visiteur/fiche/saisir', [ctrlvisrenseigner::class, 'index'])->name('saisir-fiche');
Route::get('/visiteur/fiche/consulter', [ctrlvisconsulter::class, 'index']);
Route::get('/visiteur/deconnexion', [ctrlvisdeconnexion::class, 'index']);
Route::get('/visiteur/deconnecter', [ctrlvisdeconnecter::class, 'index']);						
Route::get('/comptable/connexion', 'App\Http\Controllers\ctrlcomconnexion@index');  
Route::get('/comptable/espace', [ctrlcomespace::class, 'index']);					
Route::get('/comptable/fiche/validement', [ctrlcomvalidement::class, 'index']);
Route::get('/comptable/fiche/valider', [ctrlcomvalider::class, 'index']);
Route::get('/comptable/fiche/suivre', [ctrlcomsuivre::class, 'index']);
Route::get('/comptable/deconnexion', [ctrlcomdeconnexion::class, 'index']);
Route::get('/comptable/deconnecter', [ctrlcomdeconnecter::class, 'index']);
