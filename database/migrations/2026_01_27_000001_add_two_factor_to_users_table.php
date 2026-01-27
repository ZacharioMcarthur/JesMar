<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTwoFactorToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('google2fa_secret')->nullable()->after('password');
            $table->boolean('two_factor_enabled')->default(false)->after('google2fa_secret');
            $table->text('two_factor_recovery_codes')->nullable()->after('two_factor_enabled');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['google2fa_secret', 'two_factor_enabled', 'two_factor_recovery_codes']);
        });
    }
}