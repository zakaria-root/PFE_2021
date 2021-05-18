<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Utilisateur extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'login',
        'email',
        'motDePass',
    ];

    protected $dates = ['deleted_at'];
}
