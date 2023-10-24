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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('jenis_barang')->references('nama_jenis')->on('jenis_barangs')->onDelete('cascade')->onUpdate('cascade')->constrainted();
            $table->foreignId('kondisi_br')->references('kondisi')->on('kondisi_barangs')->onDelete('cascade')->onUpdate('cascade')->constrainted();;
            $table->decimal('harga', 10, 2);
            $table->string('keterangan');
            $table->string('kecacatan');
            $table->decimal('jumlah_barang', 4, 0);
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
