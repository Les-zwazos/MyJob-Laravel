<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Offre extends Model
{
    use HasFactory; 
    protected $fillable = [ 
        'recruteur_id',
        'dateExpiration',
        'contenu',
        'type',
    ];
    public function recruteur(){
        return $this->BelongsTo(Recruteur::class);
    }
    public function stage()
    {
        return $this->hasOne(Stage::class);
    }
    public function emploi()
    {
        return $this->hasOne(Emploi::class);
    }
}
