<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inscription extends Model
{
    protected $table = 'inscription';
    
    protected $fillable = [
        'id_eleve',
        'id_classe',
        'id_annee_scolaire',
        'date_inscription',
        'statut',
    ];

    protected $casts = [
        'date_inscription' => 'date',
    ];

    /**
     * Relation avec l'élève
     */
    public function eleve(): BelongsTo
    {
        return $this->belongsTo(Eleve::class, 'id_eleve');
    }

    /**
     * Relation avec la classe
     */
    public function classe(): BelongsTo
    {
        return $this->belongsTo(Classe::class, 'id_classe');
    }

    /**
     * Relation avec l'année scolaire
     */
    public function anneeScolaire(): BelongsTo
    {
        return $this->belongsTo(AnneeScolaire::class, 'id_annee_scolaire');
    }
}

