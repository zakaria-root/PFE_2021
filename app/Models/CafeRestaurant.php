<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CafeRestaurant extends Model
{

    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'id',
        'nomCafeRestaurant',
        'ville',
    ];

    protected $dates = ['deleted_at'];

    public function CommandsParSite()
    {
        return $this->hasMany('App\Models\CommandsParSite');
    }
    

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function Plat()
    {
        return $this->hasMany('App\Models\Plat');
    }

    public function CommandsOrdinaire()
    {
        return $this->hasMany('App\Models\CommandsOrdinaire');
    }

    public function ProduitAlimantaire()
    {
        return $this->hasMany('App\Models\ProduitAlimantaire');
    }

    public function Materiel()
    {
        return $this->hasMany('App\Models\Materiel');
    }
}
