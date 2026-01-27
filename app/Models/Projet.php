<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Projet extends Model
{
    protected $table = 'projet';
    
    protected $fillable = [
        'titre',
        'description',
        'date_creation',
        'id_classe',
        'id_prof_principal',
    ];

    protected $casts = [
        'date_creation' => 'date',
    ];

    /**
     * Relation avec la classe
     */
    public function classe(): BelongsTo
    {
        return $this->belongsTo(Classe::class, 'id_classe');
    }

    /**
     * Relation avec le professeur principal
     */
    public function profPrincipal(): BelongsTo
    {
        return $this->belongsTo(ProfPrincipal::class, 'id_prof_principal');
    }
}
