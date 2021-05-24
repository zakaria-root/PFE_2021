<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'nomEmploye',
        'prenomEmploye',
        'adressEmploye',
        'fonction',
        'salaire',
        'commission',
        'cafe_restaut'
    ];

    protected $dates = ['deleted_at'];

        
    public function Serveur()
    {
        return $this->belongsTo('app/Models/Serveur');
    }

    public function CafeRestaurant()
    {
        return $this->belongsTo('app/Models/CafeRestaurant');
    }
}
