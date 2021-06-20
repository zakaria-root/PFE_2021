<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use Illuminate\Http\Request;

class PlatChoisieController extends Controller
{
    public function show($id)
    {
        
        $plat = Plat::findOrFail($id);
        return view('plat_choisie',[
            'plat'=> $plat
        ]);
    }

}
