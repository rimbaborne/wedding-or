
@extends('layouts.master')

@section('styles')



@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div id="carousel-controls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 br-7" alt="" src="{{asset('build/assets/images/media/4.jpg')}}" data-holder-rendered="true">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 br-7" alt="" src="{{asset('build/assets/images/media/5.jpg')}}" data-holder-rendered="true">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 br-7" alt="" src="{{asset('build/assets/images/media/6.jpg')}}" data-holder-rendered="true">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 br-7" alt="" src="{{asset('build/assets/images/media/7.jpg')}}" data-holder-rendered="true">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 br-7" alt="" src="{{asset('build/assets/images/media/8.jpg')}}" data-holder-rendered="true">
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
</div>

@endsection

@section('scripts')



@endsection
