<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use Illuminate\Http\Request;

class etoileController extends Controller
{
    public function addEtoile(Request $request)
    {
        
        // dd($request->etoile);
        $pa = Plat::findOrFail($request->id);
        $pa->nb_revue = $pa->nb_revue + 1;
        if ($pa->etoiles == 0) {
            $pa->etoiles = $request->input('etoile');
        }else{
            $pa->etoiles = $pa->etoiles + $request->input('etoile');
            $pa->etoiles = $pa->etoiles/$pa->nb_revue;
        }
        
        
        // $pa->etoiles = 0;
        $pa->save();
        
        return back();
        // return back();
    }

}
