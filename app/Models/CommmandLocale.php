<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommmandLocale 
{

    public $items=null;
    public $idCafe=0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items=$oldCart->items;
            $this->idCafe = $oldCart->idCafe; 
        }
    }

    public function add($item,$id,$idCafe,$qt){
        $storedItem=['qty'=>0,'price'=>$item->prix,'item'=>$item];
        if($this->items){
            if(array_key_exists($id,$this->items)){
                $storedItem=$this->items[$id];
            }
        }
        $storedItem['qty'] += $qt;
        $storedItem['price']=$item->prix * $storedItem['qty'];
        $this->items[$id]=$storedItem;
        $this->idCafe=$idCafe;

    }
    public function updatePlat($item,$id,$idCafe,$qt){
        $storedItem=['qty'=>0,'price'=>$item->prix,'item'=>$item];
        if($this->items){
            if(array_key_exists($id,$this->items)){
                $storedItem=$this->items[$id];
            }
        }
        $storedItem['qty'] = $qt;
        $storedItem['price']=$item->prix * $storedItem['qty'];
        $this->items[$id]=$storedItem;
        $this->idCafe=$idCafe;

    }
    
    public function supprimer($id)
    {   
        
        unset($this->items[$id]);
        
    }

}
