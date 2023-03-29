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
        Schema::create('reparations', function (Blueprint $table) {
            $table->id();
            $table->string('immatriculation');
            $table->date('date_reparation');
            $table->string('affectation');
            $table->string('designation');
            $table->integer('quantity');
            $table->float('unit_price');
            $table->float('total_HT');
            $table->float('total_TTC');
            $table->timestamps();
            $table->string('statut')->default('en attente');

            // foreign key constraint
            $table->foreign('immatriculation')->references('immatriculation')->on('vehicules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reparations');
    }
};
