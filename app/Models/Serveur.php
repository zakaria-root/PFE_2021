<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serveur extends Model
{
    use HasFactory;

    public function CommandsParSite()
    {
        return $this->hasMany('App\Models\CommandsParSite');
    }
    
    public function Employee()
    {
        return $this->belongsTo('app/Models/Employee');
    }
}
