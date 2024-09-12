<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;

class PaketController extends Controller
{
    public function index()
    {
        $min = request()->query('min');
        $max = request()->query('max');

        if (isset($min) || isset($max)) {
            $query = Paket::query();
            if ($min != 0) {
                $query->where('nominal', '>=', $min);
            }
            if ($max != 0) {
                $query->where('nominal', '<=', $max);
            }

            $pakets = $query->paginate(10);
        } else {
            $pakets = null;
        }

        return view('pages.paket.index', compact('pakets'));
    }
}
