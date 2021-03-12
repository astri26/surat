@extends('master')
@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Input Data Keluarga</h4>
                </div>
                <div class="card-body">
                <form action="{{url('/keluarga')}}" method="post">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No. KK</label>
                        <div class="col-sm-12 col-md-7">
                            {{-- <input type="number" class="form-control" id="no_kk" name="no_kk" placeholder="No KK" required> --}}
                            <select class="form-control select2" placeholder="-- Select No.KK --" id="id_penduduk" name="id_penduduk"  required>
                                <option value selected="selected">-- No.KK --</option>
                                @foreach ($penduduk as $pndk)
                                    <option value="{{$pndk->id_penduduk}}">{{$pndk->no_kk}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK</label>
                        <div class="col-sm-12 col-md-7">
                            {{-- <input type="number" class="form-control" id="nik" name="nik" placeholder="NIK" required> --}}
                            <select class="form-control select2" placeholder="-- Select NIK --" id="id_penduduk" name="id_penduduk"  required>
                                <option value selected="selected">-- NIK --</option>
                                @foreach ($penduduk as $pndk)
                                    <option value="{{$pndk->id_penduduk}}">{{$pndk->nik}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                        <div class="col-sm-12 col-md-7">
                            {{-- <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required> --}}
                            <select class="form-control select2" placeholder="-- Nama --" id="id_penduduk" name="id_penduduk"  required>
                                <option value selected="selected">-- Nama --</option>
                                @foreach ($penduduk as $pndk)
                                    <option value="{{$pndk->id_penduduk}}">{{$pndk->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Dusun</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="dusun" name="dusun" placeholder="Dusun" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">RT</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="number" class="form-control" id="rt" name="rt" placeholder="RT" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">RW</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="number" class="form-control" id="rw" name="rw" placeholder="RW" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

@endsection
