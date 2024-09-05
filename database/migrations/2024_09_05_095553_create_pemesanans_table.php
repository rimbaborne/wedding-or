<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->uuid('uuid')->unique()->nullable();
            $table->string('nama_pemesan');
            $table->string('no_telepon_pemesan');
            $table->text('alamat_pemesan');
            $table->text('keterangan')->nullable();
            $table->json('payment_gateways')->nullable();
            $table->string('status_pemesanan')->default('DIPROSES'); // DIPROSES, SUDAH DI KONFIRMASI, SELESAI
            $table->string('status_pembayaran')->default('MENUNGGU PEMBAYARAN'); // MENUNGGU PEMBAYARAN, KONFIRMASI PEMBAYARAN, LUNAS
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
