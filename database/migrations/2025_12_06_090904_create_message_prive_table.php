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
        Schema::create('message_prive', function (Blueprint $table) {
            $table->id();
            $table->text('contenu');
            $table->timestamp('date_envoi');
            $table->unsignedBigInteger('id_expediteur');
            $table->unsignedBigInteger('id_destinataire');
            $table->boolean('lu')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message_prive');
    }
};
