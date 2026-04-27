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
        Schema::create('klien_jobs', function (Blueprint $table) {
            $table->id();

            $table->text('judul_proyek');
            $table->integer('id_kategori');
            $table->text('deskripsi');
            $table->bigInteger('harga');
            $table->integer('jumlah');
            $table->date('deadline');
            $table->text('status');
            $table->integer('id_client');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klien_jobs');
    }
};
