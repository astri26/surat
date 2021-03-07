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
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No. KK</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="number" class="form-control" id="no_kk" name="no_kk" placeholder="No KK" required>

                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="number" class="form-control" id="nik" name="nik" placeholder="NIK" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat Lahir</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                        <div class="col-sm-12 col-md-7">
                            <!-- <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin"> -->
                            <select class="form-control select2" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" required>
                                <option value selected="selected">-- Jenis Kelamin --</option>    
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Agama</label>
                        <div class="col-sm-12 col-md-7">
                            <!-- <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama"> -->
                                    
                            <select class="form-control select2" id="agama" name="agama" placeholder="Agama" required>
                                <option value selected="selected">-- Agama --</option>    
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Katholik</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Perkawinan</label>
                        <div class="col-sm-12 col-md-7">
                            <!-- <input type="text" class="form-control" id="status_perkawinan" name="status_perkawinan" placeholder="Status Perkawinan"> -->
                            <select class="form-control select2" id="status_perkawinan" name="status_perkawinan" placeholder="Status Perkawinan" required>
                                <option value selected="selected">-- Status Perkawinan --</option>    
                                <option>Kawin</option>
                                <option>Belum Kawin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Hubungan</label>
                        <div class="col-sm-12 col-md-7">
                            <!-- <input type="text" class="form-control" id="status_hubungan" name="status_hubungan" placeholder="Status Hubungan"> -->
                            <select class="form-control select2" id="status_hubungan" name="status_hubungan" placeholder="Status Hubungan" required>
                                <option value selected="selected">-- Status Hubungan --</option>    
                                <option>Kepala Keluarga</option>
                                <option>Suami</option>   
                                <option>Istri</option>
                                <option>Anak</option>   
                                <option>Menantu</option>
                                <option>Cucu</option>   
                                <option>Orang Tua</option>
                                <option>Mertua</option>
                                <option>Famili Lain</option>
                                <option>Pembantu</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pekerjaan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kewarganegaraan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="Kewarganegaraan" required>
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