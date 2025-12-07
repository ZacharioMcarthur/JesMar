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
        Schema::create('classe', function (Blueprint $table) {
            $table->id();
            $table->string('nom_classe');
            $table->unsignedBigInteger('id_filiere');
            $table->unsignedBigInteger('id_annee_scolaire');
            $table->foreign('id_filiere')->references('id')->on('filiere');
            $table->foreign('id_annee_scolaire')->references('id')->on('annee_scolaire');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classe');
    }
};
