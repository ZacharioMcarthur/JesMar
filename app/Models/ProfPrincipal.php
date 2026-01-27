<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProfPrincipal extends Model
{
    protected $table = 'prof_principal';
    
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
        'telephone',
        'specialite',
        'id_classe',
    ];

    protected $hidden = [
        'password',
    ];

    /**
     * Relation avec la classe
     */
    public function classe(): BelongsTo
    {
        return $this->belongsTo(Classe::class, 'id_classe');
    }

    /**
     * Relation avec les projets
     */
    public function projets(): HasMany
    {
        return $this->hasMany(Projet::class, 'id_prof_principal');
    }
}

