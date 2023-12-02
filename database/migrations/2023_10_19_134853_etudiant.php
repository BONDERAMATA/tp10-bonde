<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('classe');
            $table->string('image');
            $table->timestamps();
            $table->unsignedBigInteger('ville_id'); 
            $table->foreign('ville_id')->references('id')->on('villes'); 
            
            $table->unsignedBigInteger('nationalite_id'); 
            $table->foreign('nationalite_id')->references('id')->on('nationalites'); 
            
            $table->unsignedBigInteger('sanguin_id'); 
            $table->foreign('sanguin_id')->references('id')->on('sanguins');
    
            $table->unsignedBigInteger('tutteur_id'); 
            $table->foreign('tutteur_id')->references('id')->on('tutteurs'); 
           
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
