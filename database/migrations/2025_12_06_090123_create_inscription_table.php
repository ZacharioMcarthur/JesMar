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
        Schema::create('inscription', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_eleve');
            $table->unsignedBigInteger('id_classe');
            $table->unsignedBigInteger('id_annee_scolaire');
            $table->date('date_inscription');
            $table->string('statut');
            $table->foreign('id_eleve')->references('id')->on('eleve');
            $table->foreign('id_classe')->references('id')->on('classe');
            $table->foreign('id_annee_scolaire')->references('id')->on('annee_scolaire');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscription');
    }
};
