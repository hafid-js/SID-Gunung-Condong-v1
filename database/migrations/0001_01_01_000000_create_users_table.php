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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('config_id')->nullable();
            $table->string('username', 100)->nullable();
            $table->string('password', 100);
            $table->integer('id_group')->default(1);
            $table->integer('pamong_id')->nullable();
            $table->string('email', 100)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('active')->unsigned()->nullable()->default(false);
            $table->string('nama', 50)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('foto', 100)->nullable()->default('kuser.png');
            $table->rememberToken();
            $table->timestamps();

            $table->unique(['config_id', 'username'], 'username_config');
            $table->unique(['config_id', 'pamong_id'], 'pamong_id_config');
            $table->unique(['config_id', 'email'], 'email_config');

        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
