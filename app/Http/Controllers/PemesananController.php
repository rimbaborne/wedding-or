<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        return view('pages.pemesanan.index');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'no_hp'        => 'required',
            'email'        => 'required',
            'alamat'       => 'required',
            'jenis_paket'  => 'required',
            'paket'        => 'required',
            'tanggal'      => 'required',
            'jumlah_orang' => 'required',
            'keterangan'   => 'required',
        ]);

        $pemesanan               = new \App\Models\Pemesanan;
        $pemesanan->nama_lengkap = $request->nama_lengkap;
        $pemesanan->no_hp        = $request->no_hp;
        $pemesanan->email        = $request->email;
        $pemesanan->alamat       = $request->alamat;
        $pemesanan->jenis_paket  = $request->jenis_paket;
        $pemesanan->paket        = $request->paket;
        $pemesanan->tanggal      = $request->tanggal;
        $pemesanan->jumlah_orang = $request->jumlah_orang;
        $pemesanan->keterangan   = $request->keterangan;
        $pemesanan->status       = 0;
        $pemesanan->save();

        return redirect()->back()->with('success', 'Pemesanan berhasil disimpan');
    }

    public function invoice($uuid)
    {
        $pemesanan = \App\Models\Pemesanan::where('uuid', $uuid)->first();
        return view('pages.pemesanan.invoice', compact('pemesanan'));
    }
}
