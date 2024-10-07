<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use Illuminate\Support\Str;
use App\Models\ItemPemesanan;
use Illuminate\Support\Facades\File;

class PemesananController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $pemesanan = Pemesanan::where('user_id', auth()->user()->id)->where('status_pemesanan', 'PENDING')->first();
        } else {
            $pemesanan = null;
        }
        return view('pages.pemesanan.index', compact('pemesanan'));
    }


    public function paket(Request $request, $id)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('warning', 'Harap login terlebih dahulu');
        }

        $cekdatapemesanan = Pemesanan::where('user_id', auth()->user()->id)->where('status_pemesanan', 'PENDING')->first();

        if ($cekdatapemesanan) {
            $itempemesanan = new ItemPemesanan();
            $itempemesanan->pemesanan_id = $cekdatapemesanan->id;
            $itempemesanan->paket_id = $id;
            $itempemesanan->save();
        } else {

            $pemesanan          = new Pemesanan;
            $pemesanan->uuid    = Str::uuid();
            $pemesanan->user_id = auth()->user()->id;
            $pemesanan->save();

            $itempemesanan = new ItemPemesanan();
            $itempemesanan->pemesanan_id = $pemesanan->id;
            $itempemesanan->paket_id = $id;
            $itempemesanan->save();
        }

        return redirect()->route('pemesanan.index');
    }


    public function proses(Request $request, $uuid)
    {
        $data = Pemesanan::where('uuid', $uuid)->first();

        $data->nama_pemesan       = $request->nama;
        $data->no_telepon_pemesan = $request->notelp;
        $data->keterangan         = $request->keterangan;
        $data->alamat_pemesan     = $request->alamat;
        $data->status_pemesanan   = 'DIPROSES';
        $data->status_pembayaran  = 'MENUNGGU PEMBAYARAN';

        $data->save();
        return redirect()->route('pemesanan.invoice', $uuid);
    }

    public function invoice($uuid)
    {
        $pemesanan = Pemesanan::where('uuid', $uuid)->first();
        return view('pages.pemesanan.invoice', compact('pemesanan'));
    }


    public function invoice_upload(Request $request, $uuid)
    {
        $pemesanan = Pemesanan::where('uuid', $uuid)->first();

        if ($request->hasFile('bukti')) {
            $file = $request->file('bukti');

            $folder = 'storage/bukti_transfer';
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            $filename = $pemesanan->uuid . '.' . $file->getClientOriginalExtension();

            $file->move($folder, $filename);

            $bukti = $pemesanan->payment_gateways;

            $bukti['bukti_transfer'] = $folder . '/' . $filename;

            $pemesanan->update([
                'payment_gateways' => $bukti,
                'status_pembayaran' => 'MENUNGGU KONFIRMASI',
            ]);
        }

        return redirect()->back();
    }

    public function item_destroy($id){
        $itempemesanan = ItemPemesanan::find($id);
        $itempemesanan->delete();
        return redirect()->back();
    }

    public function payment($uuid)
    {
        $pemesanan = Pemesanan::where('uuid', $uuid)->first();
        $invoice =  $pemesanan->id . $pemesanan->created_at->format('dmy');
        $total = 0;
        foreach($pemesanan->item_pemesanan as $item)
        {
            $total = $total + $item->paket->nominal;
        }


        $va           = '0000008125144744'; //get on iPaymu dashboard
        $apiKey       = 'SANDBOXDF3E6F1F-5E4A-44EF-9EDB-98D7BD737DAA'; //get on iPaymu dashboard

        $url          = 'https://sandbox.ipaymu.com/api/v2/payment'; // for development mode
        // $url          = 'https://my.ipaymu.com/api/v2/payment'; // for production mode

        $method       = 'POST'; //method

        $keterangan = 'Pemesanan Paket Wedding'.$invoice;

        //Request Body//
        $body['product']    = array($keterangan);
        $body['qty']        = array('1');
        $body['price']      = array($total);
        $body['returnUrl']  = 'https://wedding.test/thank-you-page';
        $body['cancelUrl']  = 'https://wedding.test/cancel-page';
        $body['notifyUrl']  = 'https://wedding.test/callback-url';
        $body['referenceId'] = '1234'; //your reference id
        //End Request Body//

        //Generate Signature
        // *Don't change this
        $jsonBody     = json_encode($body, JSON_UNESCAPED_SLASHES);
        $requestBody  = strtolower(hash('sha256', $jsonBody));
        $stringToSign = strtoupper($method) . ':' . $va . ':' . $requestBody . ':' . $apiKey;
        $signature    = hash_hmac('sha256', $stringToSign, $apiKey);
        $timestamp    = Date('YmdHis');
        //End Generate Signature


        $ch = curl_init($url);

        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json',
            'va: ' . $va,
            'signature: ' . $signature,
            'timestamp: ' . $timestamp
        );

        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($ch, CURLOPT_POST, count($body));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonBody);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $err = curl_error($ch);
        $ret = curl_exec($ch);
        curl_close($ch);

        if($err) {
            return response()->json($err);
        } else {

            //Response
            $ret = json_decode($ret);
            if($ret->Status == 200) {
                $sessionId  = $ret->Data->SessionID;
                $url        =  $ret->Data->Url;
                header('Location:' . $url);
            } else {
                return response()->json($ret);
            }
            //End Response
        }
    }

    public function riwayat()
    {
        $pemesanan = Pemesanan::where('user_id', auth()->user()->id)
            ->where('status_pemesanan', '!=', 'PENDING')
            ->get();

        return view('pages.pemesanan.riwayat', compact('pemesanan'));
    }
}
