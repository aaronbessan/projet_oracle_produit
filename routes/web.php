<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProduitController;

use App\Http\Controllers\CategorieController;

use App\Http\Controllers\FournisseurController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/liste', [ProduitController::class, 'index'])->name('produits.index');
Route::resource('produits', ProduitController::class);
Route::resource('categories', CategorieController::class);
Route::resource('fournisseurs', FournisseurController::class);
