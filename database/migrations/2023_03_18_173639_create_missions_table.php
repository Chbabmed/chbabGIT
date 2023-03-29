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
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            
            $table->date('date_aquition');
            $table->date('date_depart');
            $table->date('date_retour');
            $table->string('type_mission');
            $table->string('destination');
            $table->integer('distance_parcourue');
            
            $table->timestamps();
            $table->string('statut')->default('en attente');
            $table->unsignedBigInteger('affectation_id');
            $table->foreign('affectation_id')->references('id')->on('affectations');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missions');
    }
};
