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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->date('tgl_pengaduan');
            $table->char('nik', 16);
            $table->string('judul_laporan');
            $table->string('isi_laporan');
            $table->string('tgl_laporan');
            $table->string('lokasi_laporan');
            $table->enum('kategori_laporan', ['agama', 'hukum', 'lingkungan', 'sosial']);
            $table->string('foto');
            $table->enum('status', ['0', 'proses', 'selesai']);
            $table->timestamps();
            $table->foreign('nik')->references('nik')->on('masyarakats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
