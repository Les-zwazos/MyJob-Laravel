<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory; 
    protected $fillable = [ 
        'dateExpiration',
        'contenu',
        'type',
    ];

    public function stage()
    {
        return $this->hasOne(Stage::class);
    }
    public function emploi()
    {
        return $this->hasOne(Emploi::class);
    }
}
