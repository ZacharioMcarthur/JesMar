<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Filiere extends Model
{
    protected $table = 'filiere';
    
    protected $fillable = [
        'nom_filiere',
        'description',
    ];

    /**
     * Relation avec les classes
     */
    public function classes(): HasMany
    {
        return $this->hasMany(Classe::class, 'id_filiere');
    }

    /**
     * Relation avec les matières
     */
    public function matieres(): HasMany
    {
        return $this->hasMany(Matiere::class, 'id_filiere');
    }
}
