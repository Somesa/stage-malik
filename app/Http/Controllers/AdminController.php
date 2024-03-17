<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Recette;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function accueil() {
        return view('admin.accueil');
    }
	
	public function ajouterRecette() {
		$ingredients = Ingredient::all();
		return view('admin.ajouter-recette', compact('ingredients'));
	}
	
	public function sauvegarderRecette(Request $request) {
		$recette = Recette::create($request->all());
		$recette->ingredients()->sync($request->get('ingredients'));
		return view('admin.accueil');
	}
}
