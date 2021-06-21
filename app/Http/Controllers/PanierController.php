<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Plat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class PanierController extends Controller
{
  
    public $list_panier=null;

    public function addToCart(Request $request,$id)
    {   
        $plat=Plat::find($id);
        $oldCart=Session::has('cart') ? Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->add($plat,$plat->id);

        $request->session()->put('cart',$cart);
        return redirect()->route('plate.show',$id);
    }

    public function affichePanier()
    {
        if(!Session::has('cart')){
            return view('panier.affiche_panier_user');
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        return view('panier.affiche_panier_user',['plats'=>$cart->items,'totalPrix'=>$cart->totalPrice]);
    }

    public function supprimerItem(Request $request, $id)
    {
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        $cart->supprimer($id);

        $request->session()->put('cart',$cart);
        return redirect()->route('panier.affichePanier');

    }


    public function viderPanier()
    {
        Session::forget('cart');
        return redirect()->route('panier.affichePanier');
        
    }
    
}
