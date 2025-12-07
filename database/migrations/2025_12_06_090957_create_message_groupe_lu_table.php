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
        Schema::create('message_groupe_lu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_message_groupe');
            $table->unsignedBigInteger('id_membre');
            $table->timestamp('date_lecture')->nullable();
            $table->foreign('id_message_groupe')->references('id')->on('message_groupe');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message_groupe_lu');
    }
};
