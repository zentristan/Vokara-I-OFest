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
        'image',
        'harga',
        'rating'
    ];
}
