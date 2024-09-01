
@extends('layouts.master')

@section('styles')



@endsection

@section('content')



<div class="row row-sm mt-5">
    <div class="col-lg-12">
        <div class="card mg-b-20" id="map2">
            <div class="card-body">
                <div class="h-300p" id="leaflet2"></div>
            </div>
        </div>
    </div>
</div>


<div class="row mt-10 mb-10">
    <div class="text-center">
        <h2 class="fw-semibold mb-2">Tim Vendor Wedding Organizer</h2>
        <h5>Wedding Organizer yang handal dan berpengalaman.</h5>
    </div>
    <!-- COL-OPEN -->
    <div class="col-xl-3 col-md-6 col-lg-6 mt-3">
        <div class="card">
            <div class="card-body text-center">
                <img src="http://127.0.0.1:8001/build/assets/images/users/2.jpg" alt="" class="avatar avatar-xxl bradius">
                <h4 class="h4 mb-0 mt-3">Bapak Ridwan</h4>
                <p class="card-text">Koordinator Pemasaran</p>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                <div class="row user-social-detail text-center">
                    <a href="https://www.facebook.com/" target="_blank" class="social-profile me-4 rounded text-center bg-primary-transparent">
                        <i class="fa fa-facebook text-primary"></i>
                    </a>
                    <a href="https://www.google.com/" target="_blank" class="social-profile me-4 rounded text-center bg-danger-transparent">
                        <i class="fa fa-google text-danger"></i>
                    </a>
                    <a href="https://www.twitter.com/" target="_blank" class="social-profile rounded text-center bg-info-transparent">
                        <i class="fa fa-twitter text-info"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- COL-END -->

    <!-- COL-OPEN -->
    <div class="col-xl-3 col-md-6 col-lg-6 mt-3">
        <div class="card">
            <div class="card-body text-center">
                <img src="http://127.0.0.1:8001/build/assets/images/users/1.jpg" alt="" class="avatar avatar-xxl bradius">
                <h4 class="h4 mb-0 mt-3">Ibu Sri</h4>
                <p class="card-text">Koordinator Operasional</p>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                <div class="row user-social-detail text-center">
                    <a href="https://www.facebook.com/" target="_blank" class="social-profile me-4 rounded text-center bg-primary-transparent">
                        <i class="fa fa-facebook text-primary"></i>
                    </a>
                    <a href="https://www.google.com/" target="_blank" class="social-profile me-4 rounded text-center bg-danger-transparent">
                        <i class="fa fa-google text-danger"></i>
                    </a>
                    <a href="https://www.twitter.com/" target="_blank" class="social-profile rounded text-center bg-info-transparent">
                        <i class="fa fa-twitter text-info"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- COL-END -->

    <!-- COL-OPEN -->
    <div class="col-xl-3 col-md-6 col-lg-6 mt-3">
        <div class="card">
            <div class="card-body text-center">
                <img src="http://127.0.0.1:8001/build/assets/images/users/9.jpg" alt="" class="avatar avatar-xxl bradius">
                <h4 class="h4 mb-0 mt-3">Bapak Agus</h4>
                <p class="card-text">Koordinator Logistik</p>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                <div class="row user-social-detail text-center">
                    <a href="https://www.facebook.com/" target="_blank" class="social-profile me-4 rounded text-center bg-primary-transparent">
                        <i class="fa fa-facebook text-primary"></i>
                    </a>
                    <a href="https://www.google.com/" target="_blank" class="social-profile me-4 rounded text-center bg-danger-transparent">
                        <i class="fa fa-google text-danger"></i>
                    </a>
                    <a href="https://www.twitter.com/" target="_blank" class="social-profile rounded text-center bg-info-transparent">
                        <i class="fa fa-twitter text-info"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- COL-END -->

    <!-- COL-OPEN -->
    <div class="col-xl-3 col-md-6 col-lg-6 mt-3">
        <div class="card">
            <div class="card-body text-center">
                <img src="http://127.0.0.1:8001/build/assets/images/users/4.jpg" alt="" class="avatar avatar-xxl bradius">
                <h4 class="h4 mb-0 mt-3">Ibu Tuti</h4>
                <p class="card-text">Koordinator Dekorasi</p>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                <div class="row user-social-detail text-center">
                    <a href="https://www.facebook.com/" target="_blank" class="social-profile me-4 rounded text-center bg-primary-transparent">
                        <i class="fa fa-facebook text-primary"></i>
                    </a>
                    <a href="https://www.google.com/" target="_blank" class="social-profile me-4 rounded text-center bg-danger-transparent">
                        <i class="fa fa-google text-danger"></i>
                    </a>
                    <a href="https://www.twitter.com/" target="_blank" class="social-profile rounded text-center bg-info-transparent">
                        <i class="fa fa-twitter text-info"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- COL-END -->
</div>





@endsection

@section('scripts')

<!-- INTERNAL LEAFLET JS -->
<script src="{{asset('build/assets/plugins/leaflet/leaflet.js')}}"></script>
@vite('resources/assets/js/map-leafleft.js')

@endsection
