<?php

namespace App\Http\Controllers;
use App\Models\CommandsParSite;
use App\Models\CreateDetailsCommandsParSiteTable;
use App\Models\Plat;
use Carbon\Carbon;
use Illuminate\Support\Collection;
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
        $carbon = Carbon::now();
        foreach ($oldCart->items as $i) {
            $details_command=DB::table('details_commands_par_site')->insert([
                'commands_par_sites_id' => $command->id,
                'plats_id' => $i['item']['id'],
                'quantite' =>$i['qty'],
                'created_at' => $carbon,
            ]);
        }


        $uy = DB::table('details_commands_par_site')
        ->join('plats', 'details_commands_par_site.plats_id', '=', 'plats.id')
        ->select('commands_par_sites_id', 'plats.nomPlat', 'quantite')
        ->get();
    
    
    
    DB::table('plats')
    ->update(['per_etoiles' => 1]).
    
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
