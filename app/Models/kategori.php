<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $fillable = [
        'namaKategori',
    ];

    public function talenta()
    {
        return $this->hasMany(talentaJob::class, 'id_kategori');
    }
}
