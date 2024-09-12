<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;

class WebsiteController extends Controller
{
    public function index()
    {
        $pakets = Paket::where('jenis_paket_id', 1)->get();
        return view('pages.index', compact('pakets'));
    }
    public function kontak()
    {
        return view('pages.kontak');
    }

    public function tentang()
    {
        return view('pages.tentang');
    }

    public function galeri()
    {
        return view('pages.galeri');
    }

}
