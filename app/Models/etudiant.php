<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tutteur;
use App\Models\Ville;
use App\Models\Nationalite;
use App\Models\sanguin;

class etudiant extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'nom',
        'prenom',
        'classe',
        'image',
        'ville',
        'nationalite',
        'sanguin',
    ];
   
    public function ville()
    {
     return $this->belongsTo(Ville::class);   
        
    } 
    public function nationalite()
    {
     return $this->belongsTo(Nationalite::class);   
        
    } 
    public function sanguin()
    {
     return $this->belongsTo(sanguin::class);   
        
    } 
    public function tutteur()
    {
     return $this->belongsTo(tutteur::class);   
        
    } 
}
