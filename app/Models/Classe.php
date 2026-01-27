<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classe extends Model
{
    protected $table = 'classe';
    
    protected $fillable = [
        'nom_classe',
        'id_filiere',
        'id_annee_scolaire',
    ];

    /**
     * Relation avec la filière
     */
    public function filiere(): BelongsTo
    {
        return $this->belongsTo(Filiere::class, 'id_filiere');
    }

    /**
     * Relation avec l'année scolaire
     */
    public function anneeScolaire(): BelongsTo
    {
        return $this->belongsTo(AnneeScolaire::class, 'id_annee_scolaire');
    }

    /**
     * Relation avec les élèves
     */
    public function eleves(): HasMany
    {
        return $this->hasMany(Eleve::class, 'id_classe');
    }
}
