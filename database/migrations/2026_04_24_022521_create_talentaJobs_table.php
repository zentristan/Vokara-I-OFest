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
        Schema::create('talenta_Jobs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jurusan');
            $table->string('sekolah');
            $table->text('deskripsi');
            $table->string('namajasa');
            $table->integer('deadline');
            $table->string('image');
            $table->string('harga');
            $table->integer('rating');
            $table->integer('id_kategori');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('talentaJobs');
    }
};
