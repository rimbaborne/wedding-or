<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\JenisPaket;
use Illuminate\Support\Str;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $jenis = null)
    {
        $jenispaket = JenisPaket::where('slug', $jenis)->first();
        if (!$jenispaket) { abort(404); }
        $pakets = Paket::with('jenis_paket')->where('jenis_paket_id', $jenispaket->id)->get();
        return view('admin.paket.index', compact('pakets', 'jenis'));
    }

    public function create(string $jenis = null)
    {
        return view('admin.paket.create', compact('jenis'));
    }

    public function store(Request $request,string $jenis = null)
    {
        $jenispaket = JenisPaket::where('slug', $jenis)->first();
        if (!$jenispaket) { abort(404); }

        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'nominal' => 'required',
        ]);

        $request->merge([
            'nominal' => (int)str_replace(',', '', $request->nominal)
        ]);

        $file = $request->file('gambar');
        if ($file) {
            $nama_file = time() . "_paket_" . $jenis;
            $tujuan_upload = 'storage/gambar';
            if (!file_exists($tujuan_upload)) {
                mkdir($tujuan_upload, 0777, true);
            }

            $allowedfileExtension=['pdf','jpg','png','jpeg','PDF','JPG','PNG','JPEG'];
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
            if(!$check){
                return redirect()->back()->with('error', 'File tidak sesuai');
            }

            $gambar_ = $nama_file.'.'.$extension;

            $file->move($tujuan_upload, $gambar_);
        } else {
            $gambar_ = null;
        }


        $data = Paket::create([
            'nama'           => $request->nama,
            'slug'           => Str::slug($request->nama),
            'nominal'        => $request->nominal,
            'keterangan'     => $request->keterangan,
            'diskon'         => $request->diskon,
            'gambar'         => $gambar_,
            'jenis_paket_id' => $jenispaket->id,
        ]);

        return redirect()->route('admin.paket.index', ['jenis' => $jenis])->with('success', 'Paket berhasil dibuat');
    }

    public function edit(Paket $paket, $jenis, $id)
    {
        $data = $paket->find($id);
        return view('admin.paket.edit', compact('data', 'jenis', 'id'));
    }

    public function update(Request $request, Paket $paket, $jenis, $id)
    {
        $jenispaket = JenisPaket::where('slug', $jenis)->first();
        if (!$jenispaket) { abort(404); }

        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'nominal' => 'required',
        ]);

        $request->merge([
            'nominal' => (int)str_replace(',', '', $request->nominal)
        ]);

        $file = $request->file('gambar');
        if ($file) {
            $nama_file = time() . "_paket_" . $jenis;
            $tujuan_upload = 'storage/gambar';
            if (!file_exists($tujuan_upload)) {
                mkdir($tujuan_upload, 0777, true);
            }

            $allowedfileExtension=['pdf','jpg','png','jpeg'];
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
            if(!$check){
                return redirect()->back()->with('error', 'File tidak sesuai');
            }

            $gambar_ = $nama_file.'.'.$extension;

            $file->move($tujuan_upload, $gambar_);
        } else {
            $gambar_ = null;
        }

        $data = $paket->find($id);
        $data->update([
            'nama'           => $request->nama,
            'slug'           => Str::slug($request->nama),
            'nominal'        => $request->nominal,
            'keterangan'     => $request->keterangan,
            'diskon'         => $request->diskon,
            'gambar'         => $gambar_,
            'jenis_paket_id' => $jenispaket->id,
        ]);

        return redirect()->route('admin.paket.index', ['jenis' => $jenis])->with('success', 'Paket berhasil diupdate');
    }

    public function destroy(Paket $paket, $jenis, $id)
    {
        $data = $paket->find($id);
        $data->delete();
        return redirect()->route('admin.paket.index', ['jenis' => $jenis])->with('success', 'Paket berhasil dihapus');
    }
}
