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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->uuid('uuid')->unique()->nullable();
            $table->string('nama_pemesan');
            $table->string('no_telepon_pemesan');
            $table->text('alamat_pemesan');
            $table->text('keterangan')->nullable();
            $table->boolean('rekomendasi_paket')->default(false);
            $table->foreignId('rekomendasi_paket_id')->nullable()->constrained('rekomendasi_pakets')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
