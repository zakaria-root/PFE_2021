<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart
{
    public $items=null;
    public $totalQty=0;
    public $totalPrice=0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items=$oldCart->items;
            $this->totalQty=$oldCart->totalQty;
            $this->totalPrice=$oldCart->totalPrice;
        }
    }

    public function add($item,$id){
        $storedItem=['qty'=>0,'price'=>$item->prix,'item'=>$item];
        if($this->items){
            if(array_key_exists($id,$this->items)){
                $storedItem=$this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price']=$item->prix * $storedItem['qty'];
        $this->items[$id]=$storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->prix;

    }
    
    public function supprimer($id)
    {   
        $this->totalPrice -=$this->items[$id]['price'];
        $this->totalQty-=$this->items[$id]['qty'];
        unset($this->items[$id]);
        
    }
}
