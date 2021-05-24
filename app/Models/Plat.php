<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;

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