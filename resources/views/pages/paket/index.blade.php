
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
                                        <input type="text" id="min" class="form-control" name="min" value="0">
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
                                        <input type="text" id="max" class="form-control" name="min" value="0">
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
            {{-- <div class="row">
                <div class="col-md-6 col-xxl-3 col-xl-6 col-sm-6">
                    <div class="card item-card">
                        <div class="ribbone">
                            <div class="ribbon"><span>new</span></div>
                        </div>
                        <div class="product-grid6  card-body">
                            <div class="product-image6">
                                <a href="javascript:void(0);">
                                    <img class="img-fluid" src="{{asset('build/assets/images/pngs/9.png')}}" alt="img">
                                </a>
                            </div>
                            <div class="product-content text-center">
                                <div class="mb-2 text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h4 class="title"><a href="javascript:void(0);">Perfume</a></h4>
                                <div class="price">$16,599<span class="ms-4">$19,799</span></div>
                            </div>
                            <ul class="icons">
                                <li><a href="{{url('shop-description')}}"><i class="fa fa-search "></i></a></li>
                                <li><a href="{{url('wishlist')}}"><i class="fa fa-heart-o"></i></a></li>
                                <li><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3 col-xl-6 col-sm-6">
                    <div class="card item-card">
                        <span class="ribbon">
                            <span>25%</span>
                        </span>
                        <div class="product-grid6 card-body">
                            <div class="product-image6">
                                <a href="javascript:void(0);">
                                    <img class="img-fluid" src="{{asset('build/assets/images/pngs/1.png')}}" alt="img">
                                </a>
                            </div>
                            <div class="product-content text-center">
                                <div class="text-center mb-2 text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h4 class="title"><a href="javascript:void(0);">Camera</a></h4>
                                <div class="price">$529<span class="ms-4">$799</span></div>
                            </div>
                            <ul class="icons">
                                <li><a href="{{url('shop-description')}}"><i class="fa fa-search"></i></a></li>
                                <li><a href="{{url('wishlist')}}"><i class="fa fa-heart-o"></i></a></li>
                                <li><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3 col-xl-6 col-sm-6">
                    <div class="card item-card">
                        <div class="product-grid6  card-body">
                            <div class="product-image6">
                                <a href="javascript:void(0);">
                                    <img class="img-fluid" src="{{asset('build/assets/images/pngs/7.png')}}" alt="img">
                                </a>
                            </div>
                            <div class="product-content text-center">
                                <div class="text-center mb-2 text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <h4 class="title"><a href="javascript:void(0);">Smart Watch</a></h4>
                                <div class="price">$25,239<span class="ms-4">$34,399</span></div>
                            </div>
                            <ul class="icons">
                                <li><a href="{{url('shop-description')}}"><i class="fa fa-search"></i></a></li>
                                <li><a href="{{url('wishlist')}}"><i class="fa fa-heart-o"></i></a></li>
                                <li><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3 col-xl-6 col-sm-6">
                    <div class="card item-card">
                        <div class="product-grid6  card-body">
                            <div class="product-image6">
                                <a href="javascript:void(0);">
                                    <img class="img-fluid" src="{{asset('build/assets/images/pngs/2.png')}}" alt="img">
                                </a>
                            </div>
                            <div class="product-content text-center">
                                <div class="text-center mb-2 text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h4 class="title"><a href="javascript:void(0);">Flower Pot</a></h4>
                                <div class="price">$345<span class="ms-4">$459</span></div>
                            </div>
                            <ul class="icons">
                                <li><a href="{{url('shop-description')}}"><i class="fa fa-search"></i></a></li>
                                <li><a href="{{url('wishlist')}}"><i class="fa fa-heart-o"></i></a></li>
                                <li><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3 col-xl-6 col-sm-6">
                    <div class="card item-card">
                        <div class="product-grid6  card-body ">
                            <div class="product-image6">
                                <a href="javascript:void(0);">
                                    <img class="img-fluid" src="{{asset('build/assets/images/pngs/4.png')}}" alt="img">
                                </a>
                            </div>
                            <div class="product-content text-center">
                                <div class="text-center mb-2 text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h4 class="title"><a href="javascript:void(0);">Womens Bag</a></h4>
                                <div class="price">$277<span class="ms-4">$456</span></div>
                            </div>
                            <ul class="icons">
                                <li><a href="{{url('shop-description')}}"><i class="fa fa-search"></i></a></li>
                                <li><a href="{{url('wishlist')}}"><i class="fa fa-heart-o"></i></a></li>
                                <li><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3 col-xl-6 col-sm-6">
                    <div class="card item-card">
                        <div class="product-grid6  card-body">
                            <div class="product-image6">
                                <a href="javascript:void(0);">
                                    <img class="img-fluid" src="{{asset('build/assets/images/pngs/8.png')}}" alt="img">
                                </a>
                            </div>
                            <div class="product-content text-center">
                                <div class="text-center mb-2 text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <h4 class="title"><a href="javascript:void(0);">Stylish Shoes</a></h4>
                                <div class="price">$567<span class="ms-4">$866</span></div>
                            </div>
                            <ul class="icons">
                                <li><a href="{{url('shop-description')}}"><i class="fa fa-search"></i></a></li>
                                <li><a href="{{url('wishlist')}}"><i class="fa fa-heart-o"></i></a></li>
                                <li><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3 col-xl-6 col-sm-6">
                    <div class="card item-card">
                        <div class="product-grid6  card-body">
                            <div class="product-image6">
                                <a href="javascript:void(0);">
                                    <img class="img-fluid" src="{{asset('build/assets/images/pngs/3.png')}}" alt="img">
                                </a>
                            </div>
                            <div class="product-content text-center">
                                <div class="text-center mb-2 text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h4 class="title"><a href="javascript:void(0);">HeadPhones</a></h4>
                                <div class="price">$455<span class="ms-4">$567</span></div>
                            </div>
                            <ul class="icons">
                                <li><a href="{{url('shop-description')}}"><i class="fa fa-search"></i></a></li>
                                <li><a href="{{url('wishlist')}}"><i class="fa fa-heart-o"></i></a></li>
                                <li><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3 col-xl-6 col-sm-6">
                    <div class="card item-card">
                        <div class="product-grid6  card-body">
                            <div class="product-image6">
                                <a href="javascript:void(0);">
                                    <img class="img-fluid" src="{{asset('build/assets/images/pngs/5.png')}}" alt="img">
                                </a>
                            </div>
                            <div class="product-content text-center">
                                <div class="text-center mb-2 text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h4 class="title"><a href="javascript:void(0);">Chair</a></h4>
                                <div class="price">$345<span class="ms-4">$499</span></div>
                            </div>
                            <ul class="icons">
                                <li><a href="{{url('shop-description')}}"><i class="fa fa-search"></i></a></li>
                                <li><a href="{{url('wishlist')}}"><i class="fa fa-heart-o"></i></a></li>
                                <li><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <div class="float-end">
                    <ul class="pagination ">
                        <li class="page-item page-prev disabled">
                            <a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                        <li class="page-item page-next">
                            <a class="page-link" href="javascript:void(0);">Next</a>
                        </li>
                    </ul>
                </div>
            </div> --}}
        </div><!-- COL-END -->
    </div>
    <!-- ROW-1 CLOSED -->

@endsection

@section('scripts')

		<!-- INTERNAL SELECT2 JS -->
		<script src="{{asset('build/assets/plugins/select2/select2.full.min.js')}}"></script>
		@vite('resources/assets/js/select2.js')
        <script>
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
