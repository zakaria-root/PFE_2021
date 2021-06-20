<?php

namespace App\Http\Controllers;

use App\Models\CafeRestaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CafeRestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crs = CafeRestaurant::all();
        $crs1 = DB::table('cafe_restaurants')->get();
        if (Auth::user()->role === "admin") {
            
            return view('cafeRestaurants.index',["crs" => $crs]);
        }else{
            
        }
        return view('cafe_restaurants_user.index',["crs" => $crs1]);
    }

    public function cafe_index(){
        $crs1 = DB::table('cafe_restaurants')->get();
        return view('cafe_restaurants_user.index_user',["crs" => $crs1]);
    }

    public function fitchVille(Request $request)
    {
        $ville=$request->input('ville');
        $crs = DB::table('cafe_restaurants')->where('ville', $ville)->get();
        return view('cafe_restaurants_user.index', ['crs' => $crs]);
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
        CafeRestaurant::create([
            'nomCafeRestaurant' => $request['nomCafeRestaurant'],
            'ville' => $request['ville'],
        ]);
        session()->flash('ajouter',' la cafe_restaurant a ete bien ajouter !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CafeRestaurant  $cafeRestaurant
     * @return \Illuminate\Http\Response
     */
    public function show(CafeRestaurant $cafeRestaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CafeRestaurant  $cafeRestaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(CafeRestaurant $cafeRestaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CafeRestaurant  $cafeRestaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cr = CafeRestaurant::findOrFail($request->value);
        $cr->nomCafeRestaurant = $request->input('nomCafeRestaurant');
        $cr->ville = $request->input('ville');
        session()->flash('modifier',' la cafe_restaurant a ete bien modifier !!');
        $cr->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CafeRestaurant  $cafeRestaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cr = CafeRestaurant::findOrFail($request->value);
        session()->flash('supprimer',' la cafe_restaurant  a ete bien supprimer !!');
        $cr->delete();
        return back();
    }
}
