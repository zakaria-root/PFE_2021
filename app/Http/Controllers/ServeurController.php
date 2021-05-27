<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totales = DB::table('details_commands_par_site')
        ->join('plats','details_commands_par_site.plats_id', '=', 'plats.id')
        ->select(DB::raw("SUM(plats.prix) as prix"))->groupBy('commands_par_sites_id')
        ->get();

        
        // $totale = 0;
        // foreach ($prices as $price) {
        //     $totale = $totale + $price->prix;    
        // }

        $orders = DB::table('commands_par_sites')
        ->join('users', 'commands_par_sites.users_id', '=', 'users.id')
        ->join('cafe_restaurants', 'commands_par_sites.cafe_restaurants_id', '=', 'cafe_restaurants.id')
        ->select('users.name','nomCafeRestaurant','commands_par_sites.created_at', 'users.address')
        ->get();
        return view('serveurs.index', ['orders' => $orders, 'totales' => $totales] );
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
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
