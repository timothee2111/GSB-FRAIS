<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Comptable extends Model
{
	protected $table = 'Comptable';
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
}
