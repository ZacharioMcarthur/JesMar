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
        Schema::create('projet', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->date('date_creation');
            $table->unsignedBigInteger('id_classe');
            $table->unsignedBigInteger('id_prof_principal');
            $table->foreign('id_classe')->references('id')->on('classe');
            $table->foreign('id_prof_principal')->references('id')->on('prof_principal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projet');
    }
};
