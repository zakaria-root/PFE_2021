<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProduitAlimantaire extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'nomProduit',
        'prixProduit',
        'dateExpiration',
        'cafe_restaurants_id',
        'fourniseurs_id',
    ];

    protected $dates = ['deleted_at'];

    public function CafeRestaurant()
    {
        return $this->belongsTo('app/Models/CafeRestaurant');
    } 
    
    public function Fourniseur()
    {
        return $this->belongsTo('app/Models/Fourniseur');
    }

    
}
