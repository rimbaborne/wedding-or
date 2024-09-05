<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pemesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'uuid',
        'nama_pemesan',
        'no_telepon_pemesan',
        'alamat_pemesan',
        'keterangan',
        'status_pemesanan',
        'status_pembayaran',
        'payment_gateways',
    ];

    protected $casts = [
        'status_pemesanan' => 'enum:DIPROSES,SUDAH DI KONFIRMASI,SELESAI',
        'status_pembayaran' => 'enum:MENUNGGU PEMBAYARAN,KONFIRMASI PEMBAYARAN,LUNAS',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
