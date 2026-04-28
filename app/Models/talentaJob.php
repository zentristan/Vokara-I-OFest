<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class talentaJob extends Model
{
    protected $fillable = [
        'nama',
        'jurusan',
        'sekolah',
        'deskripsi',
        'namajasa',
        'deadline',
        'image',
        'harga',
        'rating',
        'id_kategori',
    ];

    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }
}
