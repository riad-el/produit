<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;



Route::get("/",function(){
    return view("home");
});

Route::get("/produits",[ShopController::class,"listeProduits"])->name("listeProduits");
Route::get("/categories",[ShopController::class,"listeCategories"])->name("listeCategories");
Route::get("/add/produit",[ShopController::class,"addProduitForm"])->name("addProduitForm");
Route::post("/add/produit",[ShopController::class,"addProduitSubmit"])->name("addProduit");
Route::get("/add/categorie",[ShopController::class,"addCategorieForm"])->name("addCategorieForm");
Route::post("/add/categorie",[ShopController::class,"addCategorieSubmit"])->name("addCategorie");