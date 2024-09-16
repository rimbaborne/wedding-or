<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\JenisPaket;

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

    public function list()
    {
        $query = Paket::query();

        $min = request()->query('min');
        $max = request()->query('max');

        if (isset($min) || isset($max)) {
            if ($min != 0) {
                $query->where('nominal', '>=', $min);
            }
            if ($max != 0) {
                $query->where('nominal', '<=', $max);
            }
        }

        $pakets = $query->paginate(10);

        $jenispakets = JenisPaket::all();
        $jenispaketFilters = [];
        foreach ($jenispakets as $jenispaket) {
            if (request()->query($jenispaket->slug) == 'on') {
                $jenispaketFilters[] = $jenispaket->slug;
            }
        }
        if (count($jenispaketFilters) > 0) {
            $pakets = Paket::whereIn('jenis_paket_id', function ($query) use ($jenispaketFilters) {
                $query->select('id')->from('jenis_pakets')->whereIn('slug', $jenispaketFilters);
            })->paginate(10);
        } else {
            if(!request()->query() || count(request()->query()) == 0) {
                $pakets = Paket::paginate(10);
            } else {
                $pakets = null;
            }
        }


        return view('pages.paket.list', compact('pakets', 'jenispakets'));
    }
}
