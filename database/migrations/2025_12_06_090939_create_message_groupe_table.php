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
        Schema::create('message_groupe', function (Blueprint $table) {
            $table->id();
            $table->text('contenu');
            $table->timestamp('date_envoi');
            $table->unsignedBigInteger('id_groupe');
            $table->unsignedBigInteger('id_expediteur');
            $table->foreign('id_groupe')->references('id')->on('groupe_message');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message_groupe');
    }
};
