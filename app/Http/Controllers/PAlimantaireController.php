<?php

namespace App\Http\Controllers;

use App\Http\Requests\paRequest;
use App\Models\CafeRestaurant;
use App\Models\Fourniseur;
use App\Models\ProduitAlimantaire;
use Illuminate\Http\Request;

class PAlimantaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $cafes = CafeRestaurant::all();
        $frs = Fourniseur::all();
        $pas = ProduitAlimantaire::all();
        $etat = "PAlimantaires";
        return view('PAlimantaires.index', ['pas' => $pas ,'cafes' => $cafes, 'frs' => $frs , 'etat' => $etat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(paRequest $request)
    {

        ProduitAlimantaire::create([
            'nomProduit' => $request['nomProduit'],
            'prixProduit' => $request['prixProduit'],
            'dateExpiration' => $request['dateExpiration'],
            'cafe_restaurants_id' => $request['cafe'],
            'fourniseurs_id' => $request['fourniseur']
        ]);
        session()->flash('ajouter',' le produit a ete bien ajouter !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProduitAlimantaire  $produitAlimantaire
     * @return \Illuminate\Http\Response
     */
    public function show(ProduitAlimantaire $produitAlimantaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProduitAlimantaire  $produitAlimantaire
     * @return \Illuminate\Http\Response
     */
    public function edit(ProduitAlimantaire $produitAlimantaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProduitAlimantaire  $produitAlimantaire
     * @return \Illuminate\Http\Response
     */
    public function update(paRequest $request)
    {
        $pa = ProduitAlimantaire::findOrFail($request->value);
        $pa->nomProduit = $request->input('nomProduit');
        $pa->prixProduit = $request->input('prixProduit');
        $pa->dateExpiration = $request->input('dateExpiration');
        $pa->cafe_restaurants_id = $request->input('cafe');
        $pa->fourniseurs_id = $request->input('fourniseur');
        session()->flash('modifier',' le produit a ete bien modifier !!');
        $pa->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProduitAlimantaire  $produitAlimantaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $pa = ProduitAlimantaire::findOrFail($request->value);
        session()->flash('supprimer',' le produit a ete bien supprimer !!');
        $pa->delete();
        return back();
    }
}
