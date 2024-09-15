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


    public function addCart(Request $request)
    {
        $paket = Paket::where('id', $request->id)->first();
        if (!$paket) {
            return redirect()->back()->with('error', 'Paket tidak ditemukan');
        }

        $cart = session()->get('cart');
        $cart[$paket->id] = [
            'nama' => $paket->nama,
            'nominal' => $paket->nominal,
            'qty' => 1
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Paket berhasil ditambahkan ke keranjang');
    }

    public function viewCart()
    {
        $carts = session()->get('cart');
        return view('pages.paket.cart', compact('carts'));
    }

    public function deleteCart(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
        }

        return redirect()->back()->with('success', 'Paket berhasil dihapus dari keranjang');
    }

    public function checkout()
    {
        return view('pages.paket.checkout');
    }}
