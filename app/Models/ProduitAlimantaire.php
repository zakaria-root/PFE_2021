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
        'nomProduit',
        'prixProduit',
        'dateExpiration',
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