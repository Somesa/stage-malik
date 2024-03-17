<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	function accueil() {
		$recettes = Recette::all();
		return view('accueil', compact('recettes'));
	}

	function afficherRecette($id) {
		$recette = Recette::find($id);
		return view('recettes.single', compact('recette'));
	}
}
