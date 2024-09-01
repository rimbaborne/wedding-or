<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemRekomendasiPaket extends Model
{
    use HasFactory;
    protected $fillable = [
        'rekomendasi_paket_id',
        'paket_id'
    ];
}
