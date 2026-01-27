<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AnneeScolaire extends Model
{
    protected $table = 'annee_scolaire';
    
    protected $fillable = [
        'annee_debut',
        'annee_fin',
        'statut',
    ];

    /**
     * Relation avec les classes
     */
    public function classes(): HasMany
    {
        return $this->hasMany(Classe::class, 'id_annee_scolaire');
    }

    /**
     * Relation avec les inscriptions
     */
    public function inscriptions(): HasMany
    {
        return $this->hasMany(Inscription::class, 'id_annee_scolaire');
    }
}
