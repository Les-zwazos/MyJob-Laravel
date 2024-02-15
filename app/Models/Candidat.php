<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends User
{
    protected $fillable = [
        'user_id',
        'cv',
        'domaine',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
