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
                    <a class="nav-link" href="{{url('/templatekematian')}}"><h5 class="font-15">Surat Kematian</h5>
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

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
        <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                <a class="nav-link" href="{{url('/templatekelahiran')}}"><h5 class="font-15">Surat Kelahiran</h5>
                    </a>
                    <h2 class="mb-3 font-18"></h2>
                    <p class="mb-0"><span class="col-orange"></span></p>
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
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
        <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                <a class="nav-link" href="{{url('/templateketerangan')}}"><h5 class="font-13">Surat Keterangan</h5>
                    </a>
                    <h2 class="mb-3 font-18"></h2>
                    <p class="mb-0"><span class="col-green"></span>
                    </p>
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
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
        <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                <a class="nav-link" href="{{url('/templatekehilangan')}}"><h5 class="font-13">Surat Kehilangan</h5>
                    </a>
                    <h2 class="mb-3 font-18"></h2>
                    <p class="mb-0"><span class="col-green"></span>
                    </p>
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

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
        <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                <a class="nav-link" href="{{url('/templateketeranganusaha')}}"><h5 class="font-13">Surat Keterangan Usaha</h5>
                    </a>
                    <h2 class="mb-3 font-18"></h2>
                    <p class="mb-0"><span class="col-green"></span>
                    </p>
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
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
        <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                <a class="nav-link" href="{{url('/templatekeramaian')}}"><h5 class="font-13">Surat Izin Keramaian</h5>
                    </a>
                    <h2 class="mb-3 font-18"></h2>
                    <p class="mb-0"><span class="col-green"></span>
                    </p>
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
    {{-- </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
        <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                <a class="nav-link" href="{{url('/sizinkeramaian')}}"><h5 class="font-13">Surat Izin Keramaian</h5>
                    </a>
                    <h2 class="mb-3 font-18"></h2>
                    <p class="mb-0"><span class="col-green"></span>
                    </p>
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
    </div> --}}
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
        <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                <a class="nav-link" href="{{url('/templatepenghasilan')}}"><h5 class="font-12">Surat Keterangan Penghasilan</h5>
                    </a>
                    <h2 class="mb-3 font-18"></h2>
                    <p class="mb-0"><span class="col-green"></span> </p>
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

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
        <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                <a class="nav-link" href="{{url('/templatesktm')}}"><h5 class="font-13">Surat Keterangan Tidak Mampu</h5>
                    </a>
                    <h2 class="mb-3 font-18"></h2>
                    <p class="mb-0"><span class="col-green"></span>
                    </p>
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
    
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
        <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                <div class="card-content">
                <a class="nav-link" href="{{url('/templatebelumkawin')}}"><h5 class="font-12">Surat Keterangan Belum Pernah Kawin</h5>
                    </a>
                    <h2 class="mb-3 font-18"></h2>
                    <p class="mb-0"><span class="col-green"></span>
                    </p>
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

</div>

@endsection
