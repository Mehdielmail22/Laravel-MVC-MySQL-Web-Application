<?php

namespace App\Http\Controllers;
use App\Models\Produit;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        $produits=Produit::all();
        return view('produit.index',['produits'=>$produits]);
    }
    public function show()
    {
        
    }
    public function create()
    {
        return view('produit.create');
    }
    public function add()

    {
  
        Produit::create([
            'nom'=>request('nom'),
            'prix'=>request('prix')
        ]);
        
        return redirect('produit/index');
     }
    public function ajout()
    {
        
    }
    public function delete($id)
    {
        Produit::destroy($id);
        return redirect('produit/index');
    }
    public function edit($id)
    {
     
        return view('produit.edit',['id'=>$id]);
    }
    public function update($id)
    {
        $produit=Produit::find($id);
        $produit->update(['nom'=>request('nom'),'prix'=>request('prix')]);
        return redirect('produit/index');
        
    }
    public function chercher()
    {
        $nom=request('nom');
        $produits=Produit::where('nom','=',$nom)->get();
        return view('produit.index',['produits'=>$produits,'nom'=> $nom]);

    }
    public function visite($id)
    {
        $produit=Produit::find($id);
        return view('produit.visite',['produit'=>$produit]);
    }
}
