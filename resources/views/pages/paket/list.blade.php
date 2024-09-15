
@extends('layouts.master')

@section('styles')



@endsection

@section('content')

    <!-- ROW-1 OPEN -->
    <div class="mt-5 row row-cards">
        <div class="col-xl-2 col-lg-4">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title"> Jenis Paket</div>
                        </div>
                        <div class="card-body m-2">
                            <form action="{{ route('paket.list') }}" method="GET">
                                @foreach ($jenispakets as $jenispaket)
                                    <div  class="custom-checkbox custom-control mb-2">
                                        <input type="checkbox" data-checkboxes="mygroup" id="checkbox-{{ $jenispaket->id }}" class="custom-control-input" name="{{ $jenispaket->slug }}"
                                            @if(request()->get($jenispaket->slug) == 'on') checked @endif
                                            @if(!request()->query() || count(request()->query()) == 0) checked @endif
                                        >
                                        <label for="checkbox-{{ $jenispaket->id }}" class="custom-control-label">{{ $jenispaket->nama }}</label>
                                    </div>
                                @endforeach
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary" onclick="return filterPaket()">
                                        Filter Paket <i class="fa fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </form>

                            <script>
                                function filterPaket() {
                                    var checked = false;
                                    @foreach ($jenispakets as $jenispaket)
                                        if (document.getElementById('checkbox-{{ $jenispaket->id }}').checked) {
                                            checked = true;
                                        }
                                    @endforeach
                                    if (!checked) {
                                        alert('Silahkan pilih jenis paket yang di inginkan!');
                                        return false;
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-10 col-lg-8">
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
