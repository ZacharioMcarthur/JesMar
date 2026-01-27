<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $table = 'evenement';
    
    protected $fillable = [
        'titre',
        'description',
        'date_evenement',
        'lieu',
        'type_evenement',
    ];

    protected $casts = [
        'date_evenement' => 'datetime',
    ];
}
