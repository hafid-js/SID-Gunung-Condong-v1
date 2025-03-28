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
        Schema::create('config', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('app_key', 100)->default('')->unique('app_key');
            $table->string('nama_desa', 100);
            $table->string('kode_desa', 10)->nullable()->unique('kode_desa');
            $table->integer('kode_pos')->nullable();
            $table->string('nama_kecamatan', 100);
            $table->string('kode_kecamatan', 6)->nullable();
            $table->string('nama_kepala_camat', 100);
            $table->string('nip_kepala_camat', 100);
            $table->string('nama_kabupaten', 100);
            $table->string('kode_kabupaten', 4)->nullable();
            $table->string('nama_propinsi', 100);
            $table->string('kode_propinsi', 2)->nullable();
            $table->string('logo', 100)->nullale();
            $table->string('lat', 20)->nullable();
            $table->string('lng', 20)->nullable();
            $table->tinyInteger('zoom')->nullable();
            $table->string('map_title', 20)->nullable();
            $table->longText('path')->nullable();
            $table->string('alamat_kantor', 200)->nullable();
            $table->string('email_desa', 50)->nullable();
            $table->string('telepon', 50)->nullable();
            $table->string('nomor_operator', 20)->nullable();
            $table->string('website', 100)->nullable();
            $table->string('kantor_desa', 100)->nullable();
            $table->string('warna', 25)->nullable();
            $table->string('border', 25)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->integer('created_by')->nullable();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable()->useCurrent();
            $table->integer('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config');
    }
};
