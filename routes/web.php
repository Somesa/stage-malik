<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Models\Recette;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Frontend
Route::get('/', [PagesController::class, 'accueil']);
Route::get('/recette/{id}', [PagesController::class, 'afficherRecette'])->name('recette.single');

// Partie admin
Route::get('/admin', [AdminController::class, 'accueil']);
Route::get('/admin/nouvelle-recette', [AdminController::class, 'ajouterRecette'])->name('admin.recette.ajouter');
Route::post('/admin/nouvelle-recette', [AdminController::class, 'sauvegarderRecette'])->name('admin.recette.sauvegarder');
