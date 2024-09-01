
@extends('layouts.master')

@section('styles')



@endsection

@section('content')

<div class="row py-4">
    <div id="carousel-controls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 br-7" style="max-height: 700px; object-fit: cover;" alt="" src="https://images.pexels.com/photos/313707/pexels-photo-313707.jpeg" data-holder-rendered="true">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 br-7" style="max-height: 700px; object-fit: cover;" alt="" src="https://images.pexels.com/photos/1616113/pexels-photo-1616113.jpeg" data-holder-rendered="true">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 br-7" style="max-height: 700px; object-fit: cover;" alt="" src="https://images.pexels.com/photos/169185/pexels-photo-169185.jpeg" data-holder-rendered="true">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-controls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-controls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="row py-4">
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
        <div class="card">
            <div class="card-body text-center">
                <i class="fa fa-globe text-primary fa-3x text-primary-shadow"></i>
                <h6 class="mt-4 mb-2">Tersedia Di</h6>
                <h2 class="mb-2 number-font">Kota Balikpapan</h2>
            </div>
        </div>
    </div><!-- COL END -->
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
        <div class="card">
            <div class="card-body text-center">
                <i class="fa fa-comment-o text-success fa-3x text-success-shadow"></i>
                <h6 class="mt-4 mb-2">Pemesanan</h6>
                <h2 class="mb-2 number-font">Cepat dan Mudah</h2>
            </div>
        </div>
    </div><!-- COL END -->
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
        <div class="card">
            <div class="card-body text-center">
                <i class="fa fa-pie-chart text-info fa-3x text-info-shadow"></i>
                <h6 class="mt-4 mb-2">Paket Wedding</h6>
                <h2 class="mb-2  number-font">Banyak Pilihan</h2>
            </div>
        </div>
    </div><!-- COL END -->
</div>

<div class="row py-4">
    @for ($i = 0; $i < 4; $i++)
        <div class="col-md-6 col-xxl-3 col-xl-6 col-sm-6">
            <div class="card item-card">
                <div class="card-body">
                    <div class="product-image6">
                        <a href="javascript:void(0);">
                            <img class="img-fluid" src="{{asset('build/assets/images/pngs/9.png')}}" alt="img">
                        </a>
                    </div>
                    <div class="product-content text-center">
                        <h4 class="title"><a href="javascript:void(0);">Paket 1</a></h4>
                        <h3 class="price">Rp 30.000.000</h3>
                    </div>
                    <div class="text-center pt-4">
                        <a class="btn btn-primary">Pesan <i class="fa fa-shopping-cart"></i> </a>
                        <a class="btn btn-outline-primary">Info</a>
                    </div>
                </div>
            </div>
        </div>
    @endfor

</div>

@endsection

@section('scripts')



@endsection
