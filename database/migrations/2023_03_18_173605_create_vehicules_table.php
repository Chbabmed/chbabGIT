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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('immatriculation')->unique();
            $table->string('typeVahicule');
            $table->string('marque');
            $table->string('modele');
            $table->string('etat');
            $table->string('image')->nullable();
            $table->integer('puissance_fiscale');
            $table->float('consommation_moyenne');
            $table->string('carburant');
            $table->date('date_acquisition');
            $table->date('date_1ere_immatriculation');
            $table->string('propriete');
            $table->integer('kilometrage');
            $table->integer('cadence_videnge');
            $table->integer('cadence_courroie');
            $table->integer('cadence_dernier_courroie');
            $table->integer('date_dernier_controle_technique');
            $table->integer('km_debut_annee');
            $table->integer('km_derniere_videnge')->nullable();
            $table->text('remarque')->nullable();
            $table->timestamps();
            $table->string('statut')->default('en attente');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
