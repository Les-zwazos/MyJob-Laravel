<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends User
{
    use HasFactory; 
    protected $fillable = [ 
        'name',
        'email',
        'password',
        'type',
        'cv',
        'domaine',
    ];
}
