<?php

namespace App\Models;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationalite extends Model
{
    use HasFactory;
    public function etudiants()
    {
     return $this->hasMany(Etudiant::class);   
        
    }
}
