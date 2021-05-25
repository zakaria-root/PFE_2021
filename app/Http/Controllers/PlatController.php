<?php

namespace App\Http\Controllers;

use Illuminate\Http\UploadedFile;
use App\Http\Requests\plRequest;
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


        
        // if ($request->hasFile('image')) {
        //         dd($request->image);
        //     }
        // $path = null;
        if ($request->hasFile('image')) {
            $path = $request->image->store('image');
        }
        Plat::create([
            'nomPlat' =>  $request['nomPlat'],
            'prix' => $request['prix'],
            'description' => $request['description'],
            'cafe_restaurants_id' => $request['cafe'],
            'image' => $path
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
        // if ($request->hasFile('image')) {
        //         dd($request->image);
        //     }
        // $path = null;
        $mt = Plat::findOrFail($request->value);
        if ($request->hasFile('image')) {
            $mt->image = $request->image->store('image');
        }
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
