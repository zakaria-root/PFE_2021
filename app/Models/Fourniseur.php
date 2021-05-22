<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fourniseur extends Model
{
    use HasFactory;

    public function ProduitAlimantaire()
    {
        return $this->hasMany('App\Models\ProduitAlimantaire');
    }

    public function Materiel()
    {
        return $this->hasMany('App\Models\Materiel');
    }
}
