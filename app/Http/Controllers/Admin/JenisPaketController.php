<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisPaket;
use Illuminate\Http\Request;

class JenisPaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenisPakets = JenisPaket::all();
        return view('admin.jenis-paket.index', compact('jenisPakets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jenis-paket.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'slug' => 'required|max:255',
        ]);

        JenisPaket::create($request->all());

        return redirect()->route('admin.jenis-paket.index')
            ->with('success', 'Jenis Paket created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisPaket $jenisPaket)
    {
        return view('admin.jenis-paket.show', compact('jenisPaket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisPaket $jenisPaket, $id)
    {
        $data = $jenisPaket->find($id);
        return view('admin.jenis-paket.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisPaket $jenisPaket, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'slug' => 'required|max:255',
        ]);

        $data = $jenisPaket->find($id);

        $data->update($request->all());
        return redirect()->route('admin.jenis-paket.index')
            ->with('success', 'Jenis Paket updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisPaket $jenisPaket, $id)
    {
        $data = $jenisPaket->find($id);
        $data->delete();

        return redirect()->route('admin.jenis-paket.index')
            ->with('success', 'Jenis Paket deleted successfully');
    }
}

