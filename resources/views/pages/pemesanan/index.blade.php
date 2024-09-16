
@extends('layouts.master')

@section('styles')



@endsection

@section('content')

@auth
    @if ($pemesanan)
    <div class="row mt-5">
        <div class=" col-md-12">

                <div class="card cart">
                    <div class="card-header">
                        <h3 class="card-title">List Pemesanan</h3>
                    </div>
                    <div class="card-body">
                        @if ($pemesanan->item_pemesanan)
                            <div class="table-responsive">
                                <table class="table table-bordered table-vcenter text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Paket</th>
                                            <th>Harga</th>
                                            <th>Keterangan</th>
                                            <th width="100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach ($pemesanan->item_pemesanan as $item)
                                            <tr>
                                                <td class="text-wrap">
                                                    <img src="http://127.0.0.1:8001/build/assets/images/pngs/1.png" alt="" class="h-8 br-5"> <span class="ms-2">{{ $item->paket->nama }}</span>
                                                </td>
                                                <td>{!! $item->paket->keterangan !!}</td>
                                                <td class="fw-semibold">Rp {{ number_format($item->paket->nominal, 0, ',', '.') }}</td>
                                                <td>
                                                    <a href="{{ route('pemesanan.item.destroy', $item->id) }}" class="btn btn-secondary-light border-0 me-3">Hapus <i class="icon icon-trash align-middle"></i></a>
                                                </td>
                                            </tr>
                                            @php
                                                $total = $total + $item->paket->nominal;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-3">
                                <ul class="list-group">
                                    <li class="list-group-item fw-bold">
                                        Total
                                        <span class="badgetext  fw-bold mb-0">Rp {{ number_format($total, 0, ',', '.') }}</span>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <div class="mt-4 mb-4">
                                <h4>Belum ada pemesanan paket</h4>
                            </div>
                        @endif
                        <div class="mt-3">
                            <a href="{{ url('paket') }}" class="btn btn-primary m-2"><i class="fa fa-arrow-left me-2"></i>Tambahkan Paket Lainnya</a>
                        </div>
                    </div>
                </div>
        </div>
        <div class=" col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Pemesan</h3>
                </div>
                <div class="card-body">
                    <form class="mt-4" id="formPemesanan" action="{{ route('pemesanan.proses', ['uuid' => $pemesanan->uuid]) }}" method="POST"
                        onsubmit="return confirm('Konfirmasi Pemesanan ?')">
                    @csrf
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Nama<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Nomor Telepon (WhatsApp) <span class="text-red">*</span></label>
                                    <input type="tel" class="form-control" placeholder="Nomor WA" name="notelp" required pattern="[0-9]{9,13}" title="Nomor Telepon harus 9-13 digit">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Alamat Lengkap<span class="text-red">*</span></label>
                                    <textarea class="form-control" placeholder="ALamat Lengkap" rows="3" name="alamat" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Keterangan</label>
                                    <textarea class="form-control" placeholder="ALamat Lengkap" rows="3" name="keterangan"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Kota <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" placeholder="City" value="Balikpapan" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-success m-2">Selesaikan Pemesanan<i class="fa fa-arrow-right ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @else
        <div class="card cart mt-5">
            <div class="card-header">
                <h3 class="card-title">List Pemesanan</h3>
            </div>
            <div class="card-body">
                <div class="mt-4 text-center">
                    <h4>Belum ada pemesanan</h4>
                </div>
            </div>
        </div>
    @endif
@else
<div class="row mt-5">
    <div class=" col-md-12">
        <div class="card cart">
            <div class="card-body pt-7 pb-7">
                <h4 class="text-center">Anda harus login / daftar akun terlebih dahulu</h4>
                <div class="text-center mt-5">
                    <div class="profile-1 mt-2">
                        <a href="{{url('auth/login')}}" class="btn btn-primary ">Login</a>
                        <a href="{{url('auth/register')}}" class="btn btn-outline-primary ">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endauth


@endsection

@section('scripts')

@endsection
