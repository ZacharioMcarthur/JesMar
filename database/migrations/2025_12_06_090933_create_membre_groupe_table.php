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
        Schema::create('membre_groupe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_groupe');
            $table->unsignedBigInteger('id_membre');
            $table->foreign('id_groupe')->references('id')->on('groupe_message');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membre_groupe');
    }
};
