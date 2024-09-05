<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPemesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'pemesanan_id',
        'paket_id'
    ];

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
