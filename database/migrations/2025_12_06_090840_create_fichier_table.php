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
        Schema::create('fichier', function (Blueprint $table) {
            $table->id();
            $table->string('nom_fichier');
            $table->string('chemin_fichier');
            $table->string('type_fichier');
            $table->integer('taille_fichier');
            $table->timestamp('date_upload');
            $table->unsignedBigInteger('id_projet')->nullable();
            $table->unsignedBigInteger('id_evenement')->nullable();
            $table->unsignedBigInteger('id_eleve')->nullable();
            $table->foreign('id_projet')->references('id')->on('projet');
            $table->foreign('id_evenement')->references('id')->on('evenement');
            $table->foreign('id_eleve')->references('id')->on('eleve');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichier');
    }
};
