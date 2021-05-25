<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plat extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'id',
        'nomPlat',
        'prix',
        'description',
        'cafe_restaurants_id',
        'image'
    ];
    protected $dates = ['deleted_at'];

    public function CafeRestaurant()
    {
        return $this->belongsTo('app/Models/CafeRestaurant');
    }

    public function CommandsParSite()
    {
        return $this->belongsToMany('app/Models/CommandsParSite');
    }

    public function CommandsOrdinaire()
    {
        return $this->BelongsToMany('app/Models/CommandsOrdinaire');
    
}
}