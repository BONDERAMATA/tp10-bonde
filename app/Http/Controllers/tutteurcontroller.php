<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tutteur;
use App\Models\etudiant;
class tutteurcontroller extends Controller
{
    public function liste_tutteur()
    {
      $tutteurs = Tutteur::paginate(4);
     return view('tutteur.liste', compact('tutteurs'));   
    }
    
    public function ajoute_tutteur()
    
    
    {
      return view('tutteur.ajoute');  
    }
    
    public function ajoute_tutteur_traitement(Request $request)
    {
      $request->validate([
        'Nom' => 'required',
        'Prenom' => 'required',
        'profession' => 'required',
        'contact' => 'required',
      ]);
      $tutteur = new tutteur();
      $tutteur->Nom = $request->Nom;
      $tutteur->Prenom = $request->Prenom;
      $tutteur->profession = $request->profession;
      $tutteur->contact = $request->contact;
      $tutteur->save();
      
      return redirect('/ajoute')->with('status', 'Le tutteur a bien ete ajouter avec succes.');
    }
   
    public function update_tutteur($id){
      $tutteurs = Tutteur::find($id);
      
      return view('tutteur.update', compact('tutteurs'));
    }
    public function update_tutteur_traitement(Request $request){
      
      $request->validate([
        'Nom' => 'required',
        'Prenom' => 'required',
        'profession' => 'required',
        'contact' => 'required',
      ]);
      $tutteur = Etudiant::find($request->id);
      $tutteur ->Nom = $request->Nom;
      $tutteur ->Prenom = $request->Prenom;
      $tutteur ->profession = $request->profession;
      $tutteur ->contact = $request->contact;
      $tutteur ->update();
      return redirect('/tutteur')->with('status', 'Le tutteur a bien ete modifier avec succes.');
    }
    
    public function delete_tutteur($id){ 
      $tutteur = Tutteur::find($id);
      $tutteur->delete();
      return redirect('/tutteur')->with('status', 'Le tutteur a bien ete suprimer avec succes.');
    }  
  
    
}
