@extends('master')
@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Input Data Penduduk</h4>
                </div>
                <div class="card-body">
                <form action="{{url('/penduduk')}}" method="post">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor KK</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" id="no_kk" name="no_kk"  value="{{old('nama_kk')}}"placeholder="Nomor KK" required>
                                <option value selected="selected">-- Nomor KK --</option>
                                @foreach ($keluarga as $klrg)
                                    <option value="{{ $klrg->no_kk }}">{{ $klrg->no_kk }} - {{ $klrg->nama_kk }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="number" min_lenght="16" class="form-control" id="nik" name="nik" placeholder="NIK" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama')}}" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat Lahir</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="tempat_lahir" value="{{old('tempat_lahir')}}" name="tempat_lahir" placeholder="Tempat Lahir" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="date" class="form-control" id="tanggal_lahir" value="{{old('tanggal_lahir')}}" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                        <div class="col-sm-12 col-md-7">
                            <!-- <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin"> -->
                            <select class="form-control select2" id="jenis_kelamin" name="jenis_kelamin" value="{{old('jenis_kelamin')}}" placeholder="Jenis Kelamin" required>
                                <option value selected="selected">-- Jenis Kelamin --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Ibu</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="{{old('nama_ibu')}}" placeholder="Nama Ibu" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Ayah</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah" value="{{old('nama_ayah')}}" required>
                        </div>
                    </div>
                    <!-- <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{old('alamat')}}"placeholder="Alamat" required>
                        </div>
                    </div> -->
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Agama</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" id="agama" name="agama" value="{{old('agama')}}"placeholder="Agama" required>
                                <option value selected="selected">-- Agama --</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Perkawinan</label>
                        <div class="col-sm-12 col-md-7">
                            <!-- <input type="text" class="form-control" id="status_perkawinan" name="status_perkawinan" placeholder="Status Perkawinan"> -->
                            <select class="form-control select2" id="status_perkawinan" name="status_perkawinan" value="{{old('status_perkawinan')}}"placeholder="Status Perkawinan" required>
                                <option value selected="selected">-- Status Perkawinan --</option>
                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Hubungan</label>
                        <div class="col-sm-12 col-md-7">
                            <!-- <input type="text" class="form-control" id="status_hubungan" name="status_hubungan" placeholder="Status Hubungan"> -->
                            <select class="form-control select2" id="status_hubungan" name="status_hubungan" value="{{old('status_hubungan')}}"placeholder="Status Hubungan" required>
                                <option value selected="selected">-- Status Hubungan --</option>
                                <option value="Kepala-Keluarga">Kepala Keluarga</option>
                                <option value="Suami">Suami</option>
                                <option value="Istri">Istri</option>
                                <option value="Anak">Anak</option>
                                <option value="Menantu">Menantu</option>
                                <option value="Cucu">Cucu</option>
                                <option value="Orang-Tua">Orang Tua</option>
                                <option value="Mertua">Mertua</option>
                                <option value="Famili-Lain">Famili Lain</option>
                                <option value="Pembantu">Pembantu</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pekerjaan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{old('pekerjaan')}}" placeholder="Pekerjaan" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kewarganegaraan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" value="{{old('kewarganegaraan')}}" placeholder="Kewarganegaraan" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pendidikan</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" id="pendidikan" name="pendidikan" value="{{old('pendidikan')}}" placeholder="Pendidikan" required>
                                <option value selected="selected">-- Pendidikan --</option>
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SLTP Sederajat">SLTP Sederajat</option>
                                <option value="SLTA Sederajat">SLTA Sederajat</option>
                                <option value="Diploma I">Diploma I</option>
                                <option value="Diploma II">Diploma II</option>
                                <option value="Diploma III">Diploma III</option>
                                <option value="Diploma III">Diploma III</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
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
