@extends('master')
@section('content')
<div class="row ">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
        <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                    <a class="nav-link" href="{{url('/history')}}"><h5 class="font-15">History Surat</h5>
                    </a>
                    <p class="mb-0"></p>
                </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                <div class="banner-img">
                    <img src="{{url('otika/assets/img/banner/1.png')}}" alt="">
                </div>

                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection
