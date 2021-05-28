<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CommandsParSite extends Model
{
    use HasFactory;


    public static function addEtat($id){
        DB::table('commands_par_sites')
              ->where('id', $id)
              ->update(['etat' => 1]);
        
    }

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

    public function Plat()
    {
        return $this->BelongsToMany('app/Models/Plat');
    }

}
