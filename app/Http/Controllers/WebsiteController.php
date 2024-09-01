<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
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
