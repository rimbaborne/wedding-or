
@extends('layouts.master')

@section('styles')



@endsection

@section('content')

<div class="row mt-7">
    <div class="col-lg-12">
        <div class="row py-5">
            <div class="text-center">
                <h5 class="display-5 fw-semibold">Cari Paket :</h5>
            </div>
        </div>
    </div>
</div>
    <!-- ROW-1 OPEN -->
    <div class="row row-cards">
        <div class="col-12">
            <div class="card">
                <div class=" card-body p-4">
                    <form action="#" method="GET">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-4">
                                    <label class="form-label">Harga Minimum</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <div class="">
                                                Rp.
                                            </div>
                                        </div><!--  -->
                                        <input type="hidden" id="min_hidden" name="min" >
                                        <input type="text" id="min" class="form-control" onkeyup="paket()" onkeypress="paket()" onmouseover="paket()" onclick="paket()" value="{{ request()->get('min') ?? 0 }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-4">
                                    <label class="form-label">Harga Maximum</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <div class="">
                                                Rp.
                                            </div>
                                        </div><!--  -->
                                        <input type="hidden" id="max_hidden" name="max" >
                                        <input type="text" id="max" class="form-control" onkeyup="paket()" onkeypress="paket()" onmouseover="paket()" onclick="paket()"  value="{{ request()->get('max') ?? 0 }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mb-4">
                            <button class="btn btn-primary px-5" type="submit"> <i class="fa fa-search"></i> cari</button>
                            <a href="{{ route('paket.list') }}" class="btn btn-outline-primary px-5"> <i class="fa fa-list"></i> Lihat List Paket saja</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                @if ($pakets == null)
                    <div class="col-12 text-center">
                        <h4 class="mt-10">Silahkan Cari Paket Berdasarkan Harga</h4>
                    </div>
                @else
                    @foreach ($pakets as $item)
                        <div class="col-md-6 col-xxl-3 col-xl-6 col-sm-6">
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
                                            <a href="javascript:void(0);" class="btn btn-block btn-info" data-bs-toggle="modal" data-bs-target="#pesan{{ $item->id }}">Pesan</a>

                                            <div class="modal fade" id="pesan{{ $item->id }}" tabindex="-1" aria-labelledby="pesan{{ $item->id }}Label" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title" id="pesan{{ $item->id }}Label">Pesan {{ $item->nama }}</h3>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @auth
                                                                <div class="text-center">
                                                                    <img src="{{ asset('storage/gambar/' . $item->gambar) }}" width="100%" alt="{{ $item->nama }}">
                                                                </div>
                                                                <div class="mt-4">
                                                                    {!! $item->keterangan !!}
                                                                </div>
                                                                <hr class="my-4">
                                                                <a href="{{ route('pemesanan.paket', $item->id) }}" class="btn btn-primary"><i class="fa fa-shopping-cart me-2"></i>  Pesan Paket Ini <i class="fa fa-arrow-right ms-2"></i></a>
                                                            @else
                                                                <div class="text-center">
                                                                    <p>Anda harus login / daftar akun terlebih dahulu untuk dapat memesan paket</p>
                                                                    <a href="{{url('auth/login')}}" class="btn btn-primary ">Login</a>
                                                                    <a href="{{url('auth/register')}}" class="btn btn-outline-primary ">Daftar</a>
                                                                </div>
                                                            @endauth
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                @endif

            </div>
            @if ($pakets)
                <div class="mt-5 mb-5">
                    {{ $pakets->appends(request()->query())->links() }}
                </div>
            @endif

        </div><!-- COL-END -->
    </div>
    <!-- ROW-1 CLOSED -->

@endsection

@section('scripts')

		<!-- INTERNAL SELECT2 JS -->
		<script src="{{asset('build/assets/plugins/select2/select2.full.min.js')}}"></script>
		@vite('resources/assets/js/select2.js')
        <script>
            function paket() {
                var currencyFormatter = function(event) {
                var el = this;
                var x = event.keyCode;
                if ( (x > 64 && x < 91) || (x < 48 || x > 57) )
                    event.preventDefault();
                setTimeout(function () {
                    var v = el.value.replace(/\D/g, '');
                    v = (v/1).toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                    el.value = v;
                }, 10);
            };
            document.getElementById("min").addEventListener("keyup", currencyFormatter);
            document.getElementById("max").addEventListener("keyup", currencyFormatter);

            document.getElementById("min").addEventListener("keydown", currencyFormatter);
            document.getElementById("max").addEventListener("keydown", currencyFormatter);

            document.getElementById("min_hidden").value = document.getElementById("min").value.replace(/[^\d]/g, "");
            document.getElementById("max_hidden").value = document.getElementById("max").value.replace(/[^\d]/g, "");
            }

        </script>

        {{-- <script src="https://unpkg.com/imask"></script>
        <script>
            const element = document.getElementById('min');
            const maskOptions = {
            mask: '000.000.000.000'
            };
            const mask = IMask(element, maskOptions);
        </script> --}}

@endsection
