<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $winds = DB::table('details_commands_par_site')
        ->join('plats', 'details_commands_par_site.plats_id', '=', 'plats.id')
        ->select('plats.id','image','plats.categorie', 'details_commands_par_site.created_at', 'plats.nomPlat','plats.prix', 'quantite')
        ->get();
    
        // dd($uy);
        if (Auth::user()->role === "admin") {
            return view('home', ['winds' => $winds]);
        }else
        {
            return redirect()->route('cafeRestaurants.index');
        }
    }
}
