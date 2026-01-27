<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ParentUser extends Model
{
    protected $table = 'parent';
    
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
        'telephone',
        'adresse',
        'profession',
        'date_creation',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'date_creation' => 'datetime',
    ];

    /**
     * Relation avec les élèves
     */
    public function eleves(): HasMany
    {
        return $this->hasMany(Eleve::class, 'id_parent');
    }
}

