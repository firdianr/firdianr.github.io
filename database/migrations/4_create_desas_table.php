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
        Schema::create('desas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('map')->nullable();
            $table->string('negara');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->text('latar_belakang')->nullable();
            $table->integer('luas_wilayah')->nullable();
            $table->string('batas_utara')->nullable();
            $table->string('batas_selatan')->nullable();
            $table->string('batas_timur')->nullable();
            $table->string('batas_barat')->nullable();
            $table->integer('jumlah_penduduk')->nullable();
            $table->integer('jumlah_penduduk_laki_laki')->nullable();
            $table->integer('jumlah_penduduk_perempuan')->nullable();
            $table->integer('jumlah_rw')->nullable();
            $table->integer('jumlah_rt')->nullable();
            $table->integer('jumlah_kk')->nullable();
            $table->integer('wni_laki_laki')->nullable();
            $table->integer('wni_perempuan')->nullable();
            $table->integer('wna_laki_laki')->nullable();
            $table->integer('wna_perempuan')->nullable();
            $table->integer('islam')->nullable();
            $table->integer('katholik')->nullable();
            $table->integer('protestan')->nullable();
            $table->integer('hindu')->nullable();
            $table->integer('budha')->nullable();
            $table->integer('lain_lain')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desas');
    }
};
