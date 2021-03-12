@extends('master')
@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update Data Keluarga</h4>
                </div>
                <div class="card-body">
                <form action="{{url('/keluarga/'.$keluarga->id_keluarga)}}" method="post">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="id_keluarga" id="id_keluarga">
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No. KK</label>
                        <div class="col-sm-12 col-md-7">
                            {{-- <input type="number" class="form-control" id="no_kk" name="no_kk" placeholder="No KK" value="{{ $keluarga->no_kk }}" required> --}}
                            <select class="form-control select2" id="id_penduduk" name="id_penduduk"  required>
                                <option value selected="selected">-- Pilih No.KK --</option>
                                @foreach ($penduduk as $pndk)
                                    <option value="{{$pndk->id_penduduk}}"
                                    @if ($pndk->id_penduduk == $keluarga->penduduk_id)
                                        selected
                                    @endif
                                    >{{$pndk->no_kk}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK</label>
                        <div class="col-sm-12 col-md-7">
                            {{-- <input type="number" class="form-control" id="nik" name="nik" placeholder="NIK" value="{{ $penduduk->nik }}" required> --}}
                            <select class="form-control select2" id="id_penduduk" name="id_penduduk"  required>
                                <option value selected="selected">-- Pilih NIK --</option>
                                @foreach ($penduduk as $pndk)
                                    <option value="{{$pndk->id_penduduk}}"
                                    @if ($pndk->id_penduduk == $keluarga->penduduk_id)
                                        selected
                                    @endif
                                    >{{$pndk->nik}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                        <div class="col-sm-12 col-md-7">
                            {{-- <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ $penduduk->nama }}" required> --}}
                            <select class="form-control select2" id="id_penduduk" name="id_penduduk"  required>
                                <option value selected="selected">-- Pilih No.KK --</option>
                                @foreach ($penduduk as $pndk)
                                    <option value="{{$pndk->id_penduduk}}"
                                    @if ($pndk->id_penduduk == $keluarga->penduduk_id)
                                        selected
                                    @endif
                                    >{{$pndk->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Dusun</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="dusun" name="dusun" placeholder="Dusun" value="{{ $keluarga->dusun }}" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">RT</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="number" class="form-control" id="rt" name="rt" placeholder="RT" value="{{ $keluarga->rt }}" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">RW</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="number" class="form-control" id="rw" name="rw" placeholder="RW" value="{{ $keluarga->rw }}" required>
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
