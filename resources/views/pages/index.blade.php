
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
                <h2 class="mb-2 number-font">Banyak Pilihan</h2>
            </div>
        </div>
    </div><!-- COL END -->
</div>

<div class="row" style="margin-top: 100px">
    <div class="col-md-12 text-center">
        <h1 class="font-weight-bold">Paket Rekomendasi</h1>
    </div>
</div>

<div class="row py-4">
    @foreach ($pakets as $item)
        <div class="col-md-6 col-xl-4  col-sm-6">
            <div class="card item-card">
                @if ($item->diskon != 0)
                    <span class="ribbon">
                        <span>{{ $item->diskon }}%</span>
                    </span>
                @endif
                <div class="product-grid6 card-body">
                    <div class="product-image6">
                        <a href="javascript:void(0);">
                            <img class="img-fluid" src="{{asset('storage/gambar/1.png')}}" alt="img">
                        </a>
                    </div>
                    <div class=" text-center">
                        {{-- <div class="text-center mb-2 text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div> --}}
                        <h3 class="font-weight-bold mt-3"><a href="javascript:void(0);">{{ $item->nama }}</a></h3>
                        @php
                            $nominal_diskon = $item->nominal - ($item->nominal * $item->diskon / 100);
                        @endphp
                        <div class="price">
                            @if ($item->diskon > 0)
                                Rp {{ number_format($nominal_diskon,0,',','.') }}
                                <span class="ms-4">Rp {{ number_format($item->nominal,0,',','.') }}</span>
                            @else
                                Rp {{ number_format($item->nominal,0,',','.') }}
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mr-5 ml-5 mt-4">
                            <button type="button" class="btn btn-block btn-outline-primary" data-bs-toggle="modal" data-bs-target="#info{{ $item->id }}">
                                Info
                            </button>
                        </div>
                        <div class="col-sm-6 mr-5 ml-5 mt-4">
                            <a href="javascript:void(0);" class="btn btn-block btn-info">Pesan</a>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="info{{ $item->id }}" tabindex="-1" aria-labelledby="info{{ $item->id }}Label" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="info{{ $item->id }}Label">{{ $item->nama }}</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="text-center">
                                        <img src="{{ asset('storage/gambar/' . $item->gambar) }}" width="100%" alt="{{ $item->nama }}">
                                    </div>
                                    <div class="mt-4">
                                        {!! $item->keterangan !!}
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>

@endsection

@section('scripts')



@endsection
