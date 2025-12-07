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
        Schema::create('eleve', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->string('sexe');
            $table->text('adresse');
            $table->string('telephone');
            $table->string('email');
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('id_classe');
            $table->unsignedBigInteger('id_parent');
            $table->date('date_inscription');
            $table->foreign('id_classe')->references('id')->on('classe');
            $table->foreign('id_parent')->references('id')->on('parent');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eleve');
    }
};
