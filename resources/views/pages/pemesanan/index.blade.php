
@extends('layouts.master')

@section('styles')



@endsection

@section('content')

<div class="row mt-5">
    <div class=" col-md-12">
        <div class="card cart">
            <div class="card-header">
                <h3 class="card-title">List Pemesanan</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th>Paket</th>
                                <th>Harga</th>
                                <th width="100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-wrap">
                                    <img src="http://127.0.0.1:8001/build/assets/images/pngs/1.png" alt="" class="h-8 br-5"> <span class="ms-2">Digital Camera</span>
                                </td>
                                <td class="fw-semibold">$568</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-secondary-light border-0 me-3" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Remove" data-bs-original-title="Remove">Hapus <i class="icon icon-trash align-middle"></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <ul class="list-group">
                        {{-- <li class="list-group-item">
                            Sub Total
                            <span class="badgetext font-weight-bold mb-0">$4,360</span>
                        </li>
                        <li class="list-group-item text-muted">
                            Discount
                            <span class="badgetext font-weight-bold mb-0">5%</span>
                        </li>
                        <li class="list-group-item text-muted">
                            Shipping
                            <span class="badgetext font-weight-bold mb-0">Free</span>
                        </li>
                        <li class="list-group-item text-muted">
                            Tax
                            <span class="badgetext font-weight-bold mb-0">+$10.00</span>
                        </li> --}}
                        <li class="list-group-item fw-bold">
                            Total
                            <span class="badgetext  fw-bold mb-0">$3,976</span>
                        </li>
                    </ul>

                </div>
                <div class="mt-3">
                    <a href="http://127.0.0.1:8001/shop" class="btn btn-primary m-2"><i class="fa fa-arrow-left me-2"></i>Tambahkan Paket Lainnya</a>
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
                <form class="mt-4" id="formPemesanan" action="{{ route('pemesanan.store') }}" method="POST"
                    onsubmit="return confirm('Konfirmasi Pemesanan ?')">
                @csrf
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Nama<span class="text-red">*</span></label>
                                <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Nomor Telepon (WhatsApp) <span class="text-red">*</span></label>
                                <input type="tel" class="form-control" placeholder="Nomor WA" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Alamat Lengkap<span class="text-red">*</span></label>
                                <textarea class="form-control" placeholder="ALamat Lengkap" rows="3" required></textarea>
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

@endsection

@section('scripts')

@endsection
