<?php

namespace App\Http\Controllers;
use App\Models\CommandsParSite;
use App\Models\CreateDetailsCommandsParSiteTable;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommandsParSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $oldCart=Session::get('cart');

        foreach ($oldCart->items as $i) {
            $a=$i['item']['cafe_restaurants_id'];
        }

        $command =new CommandsParSite();
        $command->etat=0;
        $command->cafe_restaurants_id=$a;
        $command->serveurs_id=1;
        $command->users_id=1;
        $command-> save();

        foreach ($oldCart->items as $i) {
            $details_command=DB::table('details_commands_par_site')->insert([
                'commands_par_sites_id' => $command->id,
                'plats_id' => $i['item']['id'],
                'quantite' =>$i['qty'],
            ]);
        }

        $uy = DB::table('details_commands_par_site')
        ->join('plats', 'details_commands_par_site.plats_id', '=', 'plats.id')
        ->select('commands_par_sites_id', 'plats.nomPlat', 'quantite')
        ->get();
    
    
    dd($uy);
        

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
