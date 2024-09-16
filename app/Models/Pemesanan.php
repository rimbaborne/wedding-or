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


    public function item_pemesanan()
        {
            return $this->hasMany(ItemPemesanan::class, 'pemesanan_id', 'id');
        }

}
