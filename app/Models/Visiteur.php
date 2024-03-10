<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
	protected $table = 'Visiteur';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dateEmbauche' => 'datetime'
	];

	protected $fillable = [
		'nom',
		'prenom',
		'login',
		'mdp',
		'adresse',
		'cp',
		'ville',
		'dateEmbauche'
	];

	public function fiche_frais()
	{
		return $this->hasMany(FicheFrai::class, 'idVisiteur');
	}
}
