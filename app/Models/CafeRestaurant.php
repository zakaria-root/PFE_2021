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
        'nomCafeRestaurant',
        'ville',

    ];

    protected $dates = ['deleted_at'];

    public function CommandsParSite()
    {
        return $this->hasMany('App\Models\CommandsParSite');
    }
    
}
