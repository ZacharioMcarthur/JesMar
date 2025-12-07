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
        Schema::create('groupe_message', function (Blueprint $table) {
            $table->id();
            $table->string('nom_groupe');
            $table->text('description')->nullable();
            $table->timestamp('date_creation');
            $table->unsignedBigInteger('id_createur');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupe_message');
    }
};
