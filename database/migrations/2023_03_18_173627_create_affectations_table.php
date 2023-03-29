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
        Schema::create('affectations', function (Blueprint $table) {
            $table->id();
            $table->string('immatriculation');
            $table->unsignedBigInteger('id-conducteur');
         
            $table->timestamps();
            $table->string('statut')->default('en attente');

            $table->foreign('immatriculation')->references('immatriculation')->on('vehicules');
            $table->foreign('id-conducteur')->references('id')->on('conducteurs');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affectations');
    }
};
