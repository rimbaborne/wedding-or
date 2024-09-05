<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paket;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pakets = Paket::all();
        return view('admin.paket.index', compact('pakets'));
    }

    public function create()
    {
        return view('admin.paket.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'nominal' => 'required',
            'diskon' => 'required',
            'gambar' => 'required',
            'jenis' => 'required',
        ]);

        Paket::create($request->all());
        return redirect()->route('paket.index')->with('success', 'Paket berhasil dibuat');
    }

    public function edit(Paket $paket)
    {
        return view('admin.paket.edit', compact('paket'));
    }

    public function update(Request $request, Paket $paket)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'nominal' => 'required',
            'diskon' => 'required',
            'gambar' => 'required',
            'jenis' => 'required',
        ]);

        $paket->update($request->all());
        return redirect()->route('paket.index')->with('success', 'Paket berhasil diupdate');
    }

    public function destroy(Paket $paket)
    {
        $paket->delete();
        return redirect()->route('paket.index')->with('success', 'Paket berhasil dihapus');
    }
}
