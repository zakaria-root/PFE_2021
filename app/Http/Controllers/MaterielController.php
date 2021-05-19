<?php

namespace App\Http\Controllers;

use App\Http\Requests\mtRequest;
use App\Models\Materiel;
use DeepCopy\Matcher\Matcher;
use Hamcrest\Matchers;
use Illuminate\Http\Request;

class MaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mts = Materiel::all();
        return view('materiels.index' , ['mts' => $mts ]);
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
    public function store(mtRequest $request)
    {
        Materiel::create([
            'nomProduit' => $request['nomProduit'],
            'marque' => $request['marque'],
            'prixProduit' => $request['prixProduit'],
            
        ]);
        session()->flash('ajouter',' le materiel a ete bien ajouter !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Http\Response
     */
    public function show(Materiel $materiel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Http\Response
     */
    public function edit(Materiel $materiel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Http\Response
     */
    public function update(mtRequest $request)
    {
        $mt = Materiel::findOrFail($request->value);
        $mt->nomProduit = $request->input('nomProduit');
        $mt->marque = $request->input('marque');
        $mt->prixProduit = $request->input('prixProduit');
        session()->flash('modifier',' le materiel a ete bien modifier !!');
        $mt->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materiel  $materiel
     * @return \Illuminate\Http\Response
     */
    public function destroy(mtRequest $request)
    {
        $mt = Materiel::findOrFail($request->value);
        session()->flash('supprimer',' le materiel a ete bien supprimer !!');
        $mt->delete();
        return back();
    }
}
