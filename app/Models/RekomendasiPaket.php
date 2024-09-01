<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekomendasiPaket extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'diskon',
        'harga',
        'keterangan',
        'aktif',
    ];
}
