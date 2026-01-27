<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Matiere extends Model
{
    protected $table = 'matiere';
    
    protected $fillable = [
        'nom_matiere',
        'coefficient',
        'id_filiere',
    ];

    /**
     * Relation avec la filière
     */
    public function filiere(): BelongsTo
    {
        return $this->belongsTo(Filiere::class, 'id_filiere');
    }
}

