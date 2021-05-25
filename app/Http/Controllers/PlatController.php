<?php

namespace App\Http\Controllers;

use App\Models\CafeRestaurant;
use App\Models\Plat;
use Illuminate\Http\Request;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cafes = CafeRestaurant::all();
        $plats = plat::all();
        return view('plats.index', ["cafes" => $cafes, "plats" => $plats ]);
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
    public function store(Request $request)
    {
        Plat::create([
            'nomPlat' =>  $request['nomPlat'],
            'prix' => $request['prix'],
            'description' => $request['description'],
            'cafe_restaurants_id' => $request['cafe'],
        ]);
        session()->flash('ajouter',' le plat a ete bien ajouter !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $mt = Plat::findOrFail($request->value);
        
        $mt->nomPlat = $request->input('nomPlat');
        $mt->prix = $request->input('prix');
        $mt->description = $request->input('description');
        $mt->cafe_restaurants_id = $request->input('cafe');
        session()->flash('modifier',' le plat a ete bien modifier !!');
        $mt->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        
        $pa = Plat::findOrFail($request->value);
        session()->flash('supprimer',' le plat a ete bien supprimer !!');
        $pa->delete();
        return back();
    }
}
