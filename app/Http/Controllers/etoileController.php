<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class etoileController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function addEtoile(Request $request)
    {
        
        // dd($request->etoile);
        $pa = Plat::findOrFail($request->id);
        if ($pa->per_etoiles == Auth::user()->id) {
            $pa->nb_revue = $pa->nb_revue + 1;
        if ($pa->etoiles == 0) {
            $pa->etoiles = $request->input('etoile');
        }else{
            $pa->etoiles = $pa->etoiles + $request->input('etoile');
            $pa->etoiles = $pa->etoiles/$pa->nb_revue;
        }

        $pa->save();
        }
        
        // $pa->etoiles = 0;
        
        return back();
        // return back();
    }

}
