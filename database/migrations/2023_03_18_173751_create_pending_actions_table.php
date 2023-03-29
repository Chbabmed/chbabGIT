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
        Schema::create('pending_actions', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->json('data');
            $table->unsignedBigInteger('sub_admin_id');
            $table->enum('statut', ['en attente', 'valide', 'rejecter'])->default('en attente');
            $table->timestamps();

            $table->foreign('sub_admin_id')->references('id')->on('users');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pending_actions');
    }
};
