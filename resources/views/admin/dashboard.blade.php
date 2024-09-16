
@extends('admin.layouts.layout')

@section('styles')



@endsection

@section('content')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <div class="card bg-primary img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $data['datapemesanan'] }}</h2>
                            <p class="text-white mb-0">Total Data Pemesanan </p>
                        </div>
                        <div class="ms-auto"> <i class="fa fa-send-o text-white fs-30 me-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <div class="card bg-secondary img-card box-secondary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $data['datapaket'] }}</h2>
                            <p class="text-white mb-0">Jumlah Paket</p>
                        </div>
                        <div class="ms-auto"> <i class="fa fa-bar-chart text-white fs-30 me-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <div class="card  bg-success img-card box-success-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $data['datajenis'] }}</h2>
                            <p class="text-white mb-0">Jumlah Jenis Paket</p>
                        </div>
                        <div class="ms-auto"> <i class="fa fa-list text-white fs-30 me-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
        {{-- <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <div class="card bg-info img-card box-info-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">43,336</h2>
                            <p class="text-white mb-0">Monthly Sales</p>
                        </div>
                        <div class="ms-auto"> <i class="fa fa-cart-plus text-white fs-30 me-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END --> --}}
    </div>

@endsection

@section('scripts')



@endsection
