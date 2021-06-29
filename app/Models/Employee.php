<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'id',
        'nomEmploye',
        'prenomEmploye',
        'adressEmploye',
        'fonction',
        'salaire',
        'commission',
        'cafe_restaurants_id',
        'image'
        
    ];

    protected $dates = ['deleted_at'];

        
    public function Serveur()
    {
        return $this->belongsTo('app/Models/Serveur');
    }
    
    public function cafe_restaurants()
    {
        return $this->belongsTo(CafeRestaurant::class);
    }
}
