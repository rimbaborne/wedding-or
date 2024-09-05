<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'keterangan',
        'nominal',
        'diskon',
        'gambar',
        'jenis_paket_id',
        'slug',
    ];


    public function jenis_paket()
    {
        return $this->belongsTo(JenisPaket::class, 'jenis_paket_id', 'id');
    }

}
