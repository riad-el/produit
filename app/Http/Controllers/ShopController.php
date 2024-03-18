<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Produit;
class ShopController extends Controller
{
    public function listeProduits(){
        $produits=Produit::all();
       
        return view("liste_produits",compact('produits'));
       
    }
    public function listeCategories(){
        $categories=Categorie::all();
        return view("liste_categories",compact('categories'));
       
    }
    public function addCategorieForm(){
        return view("add_categorie");
    }
    public function addCategorieSubmit(Request $req){
       $code=$req->input("code");
       $nom=$req->input("nom");
       $description=$req->input("description");
       $categorie=Categorie::create(compact("code","nom","description"));
       //["code"=>$code,"nom"=>$nom,"description"=>$description]
       return redirect()->route("listeCategories");
    }
    public function addProduitForm(){
        $categories=Categorie::all();
        return view("add_produit",compact("categories"));
    }
    public function addProduitSubmit(Request $req){
        $validate=$req->validate([
            'code'=>"required|max:7",
            'nom'=>"required",
            "unite"=>"required|max:2",
            "categorie_id"=>"required"
        ]);
       $code=$req->input("code");
       $nom=$req->input("nom");
       $unite=$req->input("unite");
       $categorie_id=$req->input("categorie");
       $description=$req->input("description");//code=>$code
       $produit=Produit::create(compact("code","nom","description","categorie_id","unite"));
       return redirect()->route("listeProduits");
    }
   
}
