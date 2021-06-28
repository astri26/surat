@extends('master')
@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update Data Penduduk</h4>
                </div>
                <div class="card-body">
                <form action="{{url('/penduduk/'.$penduduk->nik)}}" method="post">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="nik" id="nik">
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No. KK</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="number" class="form-control" id="no_kk" name="no_kk" placeholder="No KK" value="{{ $penduduk->no_kk }}" required>

                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="number" class="form-control" id="nik" name="nik" placeholder="NIK" value="{{ $penduduk->nik }}" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ $penduduk->nama }}" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat Lahir</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="{{ $penduduk->tempat_lahir }}" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ $penduduk->tanggal_lahir }}" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                        <div class="col-sm-12 col-md-7">
                            <!-- <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin"> -->
                            <select class="form-control select2" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" value="{{ $penduduk->jenis_kelamin }}" required>
                                <option value selected="selected">-- Jenis Kelamin --</option>
                                <option value="Laki-laki" {{ $penduduk->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }} >Laki-laki</option>
                                <option value="Perempuan" {{ $penduduk->jenis_kelamin == 'Perempuan' ? 'selected' : '' }} >Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Ibu</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu"  value="{{ $penduduk->nama_ibu }}" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Ayah</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah"  value="{{ $penduduk->nama_ayah }}" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{ $penduduk->alamat }}" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Agama</label>
                        <div class="col-sm-12 col-md-7">
                            <!-- <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama"> -->

                            <select class="form-control select2" id="agama" name="agama" placeholder="Agama" value="{{ $penduduk->agama }}" required>
                                <option value selected="selected">-- Agama --</option>
                                <option value="Islam" {{ $penduduk->agama == 'Islam' ? 'selected' : '' }} >Islam</option>
                                <option value="Kristen" {{ $penduduk->agama == 'Kristen' ? 'selected' : '' }} >Kristen</option>
                                <option value="Katholik" {{ $penduduk->agama == 'Katholik' ? 'selected' : '' }} >Katholik</option>
                                <option value="Hindu" {{ $penduduk->agama == 'Hindu' ? 'selected' : '' }} >Hindu</option>
                                <option value="Budha" {{ $penduduk->agama == 'Budha' ? 'selected' : '' }} >Budha</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Perkawinan</label>
                        <div class="col-sm-12 col-md-7">
                            <!-- <input type="text" class="form-control" id="status_perkawinan" name="status_perkawinan" placeholder="Status Perkawinan"> -->
                            <select class="form-control select2" id="status_perkawinan" name="status_perkawinan" placeholder="Status Perkawinan" value="{{ $penduduk->status_perkawinan }}" required>
                                <option value selected="selected">-- Status Perkawinan --</option>
                                <option value="Kawin" {{ $penduduk->status_perkawinan == 'Kawin' ? 'selected' : '' }} >Kawin</option>
                                <option value="Belum Kawin" {{ $penduduk->status_perkawinan == 'Belum Kawin' ? 'selected' : '' }} >Belum Kawin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Hubungan</label>
                        <div class="col-sm-12 col-md-7">
                            <!-- <input type="text" class="form-control" id="status_hubungan" name="status_hubungan" placeholder="Status Hubungan"> -->
                            <select class="form-control select2" id="status_hubungan" name="status_hubungan" placeholder="Status Hubungan" value="{{ $penduduk->status_hubungan }}" required>
                                <option value selected="selected">-- Status Hubungan --</option>
                                <option value="Kepala-Keluarga" {{ $penduduk->status_hubungan == 'Kepala-Keluarga' ? 'selected' : '' }} >Kepala-Keluarga</option>
                                <option value="Suami" {{ $penduduk->status_hubungan == 'Suami' ? 'selected' : '' }} >Suami</option>
                                <option value="Istri" {{ $penduduk->status_hubungan == 'Istri' ? 'selected' : '' }} >Istri</option>
                                <option value="Anak" {{ $penduduk->status_hubungan == 'Anak' ? 'selected' : '' }} >Anak</option>
                                <option value="Menantu" {{ $penduduk->status_hubungan == 'Menantu' ? 'selected' : '' }} >Menantu</option>
                                <option value="Cucu" {{ $penduduk->status_hubungan == 'Cucu' ? 'selected' : '' }} >Cucu</option>
                                <option value="Orang-Tua" {{ $penduduk->status_hubungan == 'Orang-Tua' ? 'selected' : '' }} >Orang Tua</option>
                                <option value="Mertua" {{ $penduduk->status_hubungan == 'Mertua' ? 'selected' : '' }} >Mertua</option>
                                <option value="Famili-Lain" {{ $penduduk->status_hubungan == 'Famili-Lain' ? 'selected' : '' }} >Famili Lain</option>
                                <option value="Pembantu" {{ $penduduk->status_hubungan == 'Pembantu' ? 'selected' : '' }} >Pembantu</option>
                                <option value="Lainnya" {{ $penduduk->status_hubungan == 'Lainnya' ? 'selected' : '' }} >Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pekerjaan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" value="{{ $penduduk->pekerjaan }}" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kewarganegaraan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="Kewarganegaraan" value="{{ $penduduk->kewarganegaraan }}" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pendidikan</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" id="pendidikan" name="pendidikan" placeholder="Pendidikan" required>
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
