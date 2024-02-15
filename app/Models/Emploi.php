<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Offre
{
    use HasFactory;
    protected $fillable = [ 
        'offre_id',
        'contrat',
    ];
    public function offre(){
        $this->belongsTo(Offre::class);
    }
}
