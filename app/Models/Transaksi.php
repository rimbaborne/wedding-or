<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'uuid',
        'nama_pemesan',
        'no_telepon_pemesan',
        'alamat_pemesan',
        'keterangan',
        'rekomendasi_paket',
        'rekomendasi_paket_id',
    ];

    protected $casts = [
        'rekomendasi_paket' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rekomendasi_paket()
    {
        return $this->belongsTo(RekomendasiPaket::class);
    }
}
