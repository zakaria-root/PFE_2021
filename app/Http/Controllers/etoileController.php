<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use Illuminate\Http\Request;

class etoileController extends Controller
{
    public function addEtoile(Request $request)
    {
        
       
        $pa = Plat::findOrFail($request->id);
        $pa->etoiles = (integer)$pa->etoiles + (integer)$request->input('etoile');
        $pa->save();
        return back();
    }

}
