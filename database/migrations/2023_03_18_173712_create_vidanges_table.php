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
        Schema::create('vidanges', function (Blueprint $table) {
            $table->id();
            $table->string('immatriculation');
            $table->foreign('immatriculation')->references('immatriculation')->on('vehicules');
            $table->date('date_vidange');
            $table->integer('kilometrage');
            $table->string('type_huile');
            $table->float('quantite_huile');
            $table->float('prix_litre');
            $table->float('total_HT');
            $table->float('total_TTC');
            $table->timestamps();
            $table->string('statut')->default('en attente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vidanges');
    }
};
