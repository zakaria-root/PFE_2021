<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandsParSite extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function Utilisateur()
    {
        return $this->belongsTo('app/Models/Utilisateur');
    }

    public function Serveur()
    {
        return $this->belongsTo('app/Models/Serveur');
    }
    
    public function CafeRestaurant()
    {
        return $this->belongsTo('app/Models/CafeRestaurant');
    }

}
