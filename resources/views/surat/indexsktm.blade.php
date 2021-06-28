@extends('master')
@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Cetak Surat Keterangan Tidak Mampu</h4>
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
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="date" class="form-control"  disabled class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                        </div>
                    </div>
                        <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No. KTP</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="number" class="form-control" disabled class="form-control" id="nik" name="nik" placeholder="No. KTP" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" disabled class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" required>
                        </div>
                    </div>
                        <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Perkawinan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="teks" class="form-control" disabled class="form-control" id="status_perkawinan" name="status_perkawinan" placeholder="Status Perkawinan" required>
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
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Penghasilan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="penghasilan" name="penghasilan" placeholder="Penghasilan" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" required>
                        </div>
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

<script type="text/javascript">
    function setInput(result) {
        var value = result.value;

        $.ajax({
            url: '{{ url('/sktm/get-data/') }}',
            type: 'post',
            data: '_token={{ csrf_token() }}&id=' + value,
            dataType: 'JSON',
            success: function(response){
                document.getElementById('jenis_kelamin').value = response.result.jenis_kelamin;
                document.getElementById('alamat').value = response.result.alamat;
                document.getElementById('tempat_lahir').value = response.result.tempat_lahir;
                document.getElementById('status_perkawinan').value = response.result.status_perkawinan;
                document.getElementById('agama').value = response.result.agama;
                document.getElementById('pekerjaan').value = response.result.pekerjaan;
                document.getElementById('nik').value = response.result.nik;
                document.getElementById('tanggal_lahir').value = response.result.tanggal_lahir;

            }
        })
    }
</script>
@endsection
