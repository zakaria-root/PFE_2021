<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Plat;
use Illuminate\Http\Request;
use App\Models\CafeRestaurant;
use App\Models\CommmandLocale;
use App\Models\CommandsOrdinaire;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class COrdinaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bt = "cordinaire";
        $cafes = CafeRestaurant::all();
        
        $ourPlats = Plat::all();
        
        $listCommande=Session::get('Commande');
        $Commande=new CommmandLocale($listCommande);
        if ($Commande->items != null) {
            $Commande = $Commande->items;
        }elseif ( $Commande->items == null) {
            $Commande = [];
        }
        
        
        return view('serveurs.cordinaire.index',['plats'=> $Commande,'cafes' => $cafes,'ourPlats' => $ourPlats, 'etat' => $request->etat, 'bt'=> $bt, 'enable'=> $request->enable]);
        // return view('serveurs.cordinaire.index', ['cafes' => $cafes]);
    }

    public function addPlatToCommandOrdinaire(Request $request){

        $enable = "true";
        $nom = $request->nomPlat;
        $quantite = $request->quantite;
        $cafe = $request->cafe;
        $id = DB::table('plats')
        ->select('id')
        ->where('nomPlat',$nom)
        ->get();

        
        $fuck = $id->toArray();
        
        $fuckto = (string)$fuck[0]->id;
        $plat = Plat::find($fuckto);
        // dd($plat);
        // dd($plat[0]->id);
        
        $listCommande =Session::has('Commande') ? Session::get('Commande'):null;
        $Commande=new CommmandLocale($listCommande);
        $Commande->add($plat,$plat->id,$cafe,$quantite);

        $request->session()->put('Commande',$Commande);

        // dd($Commande);
        return redirect()->route('cordinaire.index',['enable' => $enable] );
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
    public function storeDb(Request $request)
    {
        $etat = "home";
        $listCommande =Session::get('Commande');


        $command =new CommandsOrdinaire();
        $command->cafe_restaurants_id=$listCommande->idCafe;
        $command-> save();
        $carbon = Carbon::now();
        foreach ($listCommande->items as $i) {
            $details_command=DB::table('details_commands_ordinaires')->insert([
                'commands_ordinaires_id' => $command->id,
                'plats_id' => $i['item']['id'],
                'quantite' =>$i['qty'],
                'created_at' => $carbon,
                
            ]);
        }

            // dd($details_command);
        $uy = DB::table('details_commands_par_site')
        ->join('plats', 'details_commands_par_site.plats_id', '=', 'plats.id')
        ->select('commands_par_sites_id', 'plats.nomPlat', 'quantite')
        ->get();
        Session::forget('Commande');
        return redirect()->route('serveurs.index',['etat' => $etat]);
        
    
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
        $nom = $request->nomPlat;
        $quantite = $request->quantite;
        $cafe = $request->cafe;
        $id = DB::table('plats')
        ->select('id')
        ->where('nomPlat',$nom)
        ->get();

        
        $fuck = $id->toArray();
        
        $fuckto = (string)$fuck[0]->id;
        $plat = Plat::find($fuckto);
        // dd($plat);
        // dd($plat[0]->id);
        
        $listCommande =Session::has('Commande') ? Session::get('Commande'):null;
        $Commande=new CommmandLocale($listCommande);
        $Commande->updatePlat($plat,$plat->id,$cafe,$quantite);

        $request->session()->put('Commande',$Commande);

        // dd($Commande);
        return redirect()->route('cordinaire.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $listCommande=Session::get('Commande');
        $Commande=new CommmandLocale($listCommande);
        
        $Commande->supprimer($request->value);

        $request->session()->put('Commande',$Commande);
        return redirect()->route('cordinaire.index');
    }
}
