
@extends('layouts.master')

@section('styles')



@endsection

@section('content')


<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-start">
                        <h3 class="card-title mb-0">#INV-{{ $pemesanan->id }}-{{ $pemesanan->created_at->format('dmy')  }}</h3>
                    </div>
                    <div class="float-end">
                        <h3 class="card-title">Tanggal : {{ $pemesanan->created_at->format('d-m-Y') }}</h3>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h3>Invoice</h3>
                    </div>
                    <div class="col-lg-6 ">
                        <p class="h4">Dari:</p>
                        <address>
                            Wedding OR<br>
                            Balikpapan<br>
                            Admin@wedding.com<br>
                        </address>
                    </div>
                    <div class="col-lg-6 text-end">
                        <p class="h4">Kepada:</p>
                        <address>
                            {{ $pemesanan->nama_pemesan }}<br>
                            {{ $pemesanan->no_telepon_pemesan }}<br>
                            {{ $pemesanan->user->email }}<br>
                            {{ $pemesanan->alamat_pemesan }}<br>
                            {{ $pemesanan->keterangan }}
                        </address>
                    </div>
                </div>
                <div class="row my-6 text-end">
                    <div class="col-12">
                        Status Pemesanan : {{ $pemesanan->status_pemesanan }}
                    </div>
                    <div class="col-12">
                        Status Pembayaran : {{ $pemesanan->status_pembayaran }}
                    </div>
                </div>
                <div class="table-responsive push">
                    <table class="table table-bordered table-hover mb-0 text-nowrap">
                        <tbody>
                        <tr class="">
                            <th class="text-center"></th>
                            <th></th>
                            <th>Paket</th>
                            <th class="text-end">Sub Total</th>
                        </tr>
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($pemesanan->item_pemesanan as $index => $item)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td class="text-wrap">
                                    <img src="{{ asset('storage/gambar/' . $item->paket->gambar) }}" alt="" class="h-8 br-5">
                                </td>
                                <td>
                                    <p class="font-w600 mb-1">{{ $item->paket->nama }}</p>
                                    <div class="text-muted"><div class="text-muted">{!! $item->paket->keterangan !!}</div></div>
                                </td>
                                <td class="text-end">Rp {{ number_format($item->paket->nominal, 0, ',', '.') }}</td>
                            </tr>
                            @php
                                $total = $total + $item->paket->nominal;
                            @endphp
                        @endforeach
                        <tr class="fw-semibold">
                            <td colspan="3" class="fw-semibold text-uppercase text-end">Total</td>
                            <td class="fw-semibold text-end h4 ">Rp {{ number_format($total, 0, ',', '.') }}</td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
            <div class="card-footer text-end">
                @if ($pemesanan->status_pemesanan == 'DIPROSES')
                    <a href="{{ route('pemesanan.payment', ['uuid' => $pemesanan->uuid]) }}" class="btn btn-primary mb-1"><i class="si si-wallet me-2"></i> Bayar Sekarang</a>
                @endif
                <button type="button" class="btn btn-outline-success mb-1" onclick="javascript:window.print();"><i class="si si-printer"></i> Print Invoice</button>
            </div>
        </div>
    </div><!-- COL-END -->
</div>


@endsection

@section('scripts')

@endsection
