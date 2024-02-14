<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruteur extends User
{
    protected $fillable = [ 
        'name',
        'email',
        'password',
        'type',
        
    ];
}
