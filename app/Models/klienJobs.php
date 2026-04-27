<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class klienJobs extends Model
{
    protected $fillable = [
        'judul_proyek',
        'id_kategori',
        'deskripsi',
        'harga',
        'jumlah',
        'deadline',
        'status',
        'id_client'
    ];
}
