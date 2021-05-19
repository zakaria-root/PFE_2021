<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'nomEmploye',
        'prenomEmploye',
        'adressEmploye',
        'fonction',
        'salaire',
        'commission',
    ];

    protected $dates = ['deleted_at'];
}
