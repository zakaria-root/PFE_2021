<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandsOrdinaire extends Model
{
    use HasFactory;

    public function CafeRestaurant()
    {
        return $this->belongsTo('app/Models/CafeRestaurant');
    }

    public function Plat()
    {
        return $this->BelongsToMany('app/Models/Plat');
    }
}
