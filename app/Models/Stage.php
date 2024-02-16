<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'offre_id',
        'dateDebut',
        'duree',
    ];
    public function offre(){
        return $this->belongsTo(Offre::class);
    }
}
