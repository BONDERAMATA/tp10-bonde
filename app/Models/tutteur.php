<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etudiant;

class tutteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom',
        'prenom',
        'profession',
        'contact',
    ];
    
    public function etudiants()
    {
     return $this->hasMany(Etudiant::class);   
        
    }
}
