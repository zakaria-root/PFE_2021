<?php

namespace App\Http\Controllers;

use App\Models\CafeRestaurant;
use App\Models\Plat;
use Illuminate\Http\Request;

class FirstPageController extends Controller
{
    public function index()
    {
        $cafes = CafeRestaurant::all();
        $plats = Plat::all();
        
            return view('myWelcom',[
                'plats' => $plats
            ]);
        
    }
}
