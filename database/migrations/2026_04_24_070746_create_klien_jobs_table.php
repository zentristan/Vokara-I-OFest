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
            // $table->integer('id_kategori');
            $table->unsignedBigInteger('id_kategori')->default(1);
            $table->text('deskripsi');
            $table->bigInteger('harga');
            $table->integer('jumlah')->default(0);
            $table->integer('deadline');
            $table->string('status')->default('open');
            $table->unsignedBigInteger('id_client')->default(1);

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
