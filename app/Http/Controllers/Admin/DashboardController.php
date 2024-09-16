<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $datapemesanan = \App\Models\Pemesanan::count();
        $datapaket = \App\Models\Paket::count();
        $datajenis = \App\Models\JenisPaket::count();

        $data = [
            'datapemesanan' => $datapemesanan,
            'datapaket' => $datapaket,
            'datajenis' => $datajenis
        ];

        return view('admin.dashboard', compact('data'));
    }
}
