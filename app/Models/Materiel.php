<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Materiel extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $fillable = [
        'nomProduit',
        'marque',
        'prixProduit',

    ];
    protected $dates = ['deleted_at'];

    public function CafeRestaurant()
    {
        return $this->belongsTo('app/Models/CafeRestaurant');
    }

    public function Fourniseur()
    {
        return $this->belongsTo('app/Models/CafeRestaurant');
    }
}
