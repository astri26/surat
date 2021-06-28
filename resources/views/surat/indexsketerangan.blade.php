@extends('master')
@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Cetak Surat Keterangan</h4>
                </div>
                <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK - Nama</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" id="nama" name="nama" onchange="setInput(this)" placeholder="Nama" required>
                                <option value selected="selected">-- NIK - Nama --</option>
                                @foreach ($penduduk as $pndk)
                                    <option value="{{ $pndk->nik }}">{{ $pndk->nik}} - {{ $pndk->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat Lahir</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" disabled class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
                        </div>
                    </div>
                    </div>
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" disabled class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal" required>
                    </div>
                     </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Perkawinan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" disabled class="form-control" id="status_perkawinan" name="status_perkawinan" placeholder="Status Perkawinan" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kewarganegaraan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" disabled class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="Kewarganegaraan" required>
                        </div>
                    </div>
                        <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pendidikan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" disabled class="form-control" id="pendidikan" name="pendidikan" placeholder="Pendidikan" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Agama</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" disabled class="form-control" id="agama" name="agama" placeholder="Agama" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pekerjaan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" disabled class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Surat Ini dipergunakan untuk :</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="keperluan" name="keperluan" placeholder="Keperluan" required>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    function setInput(result) {
        var value = result.value;

        $.ajax({
            url: '{{ url('/sketerangan/get-data/') }}',
            type: 'post',
            data: '_token={{ csrf_token() }}&id=' + value,
            dataType: 'JSON',
            success: function(response){
                document.getElementById('tempat_lahir').value = response.result.tempat_lahir;
                document.getElementById('tanggal_lahir').value = response.result.tanggal_lahir;
                document.getElementById('status_perkawinan').value = response.result.status_perkawinan;
                document.getElementById('kewarganegaraan').value = response.result.kewarganegaraan;
                document.getElementById('pendidikan').value = response.result.pendidikan;
                document.getElementById('agama').value = response.result.agama;
                document.getElementById('pekerjaan').value = response.result.pekerjaan;
                document.getElementById('keterangan').value = response.result.keterangan;
                document.getElementById('keperluan').value = response.result.keperluan;
            }
        })
    }
</script>

@endsection
