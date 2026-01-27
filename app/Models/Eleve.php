<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Eleve extends Model
{
    protected $table = 'eleve';
    
    protected $fillable = [
        'nom',
        'prenom',
        'date_naissance',
        'lieu_naissance',
        'sexe',
        'adresse',
        'telephone',
        'email',
        'photo',
        'id_classe',
        'id_parent',
        'date_inscription',
    ];

    protected $casts = [
        'date_naissance' => 'date',
        'date_inscription' => 'date',
    ];

    /**
     * Relation avec la classe
     */
    public function classe(): BelongsTo
    {
        return $this->belongsTo(Classe::class, 'id_classe');
    }

    /**
     * Relation avec le parent
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(ParentUser::class, 'id_parent');
    }
}
