@extends('master')
@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Cetak Surat Kelahiran</h4>
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
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="date" class="form-control" disabled class="form-control" id="tanggal_lahir" name="tanggal" placeholder="Tanggal" required>
                        </div>
                    </div>
                        <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat Lahir</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="teks" class="form-control" disabled class="form-control" id="tempat_lahir" name="lokasi" placeholder="Tempat Lahir" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Ibu</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" disabled class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu" required>
                        </div>
                    </div>
                        <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Ayah</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="teks" class="form-control" disabled class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control"  id="alamat" name="alamat" placeholder="Alamat" required>
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
            url: '{{ url('/skelahiran/get-data/') }}',
            type: 'post',
            data: '_token={{ csrf_token() }}&id=' + value,
            dataType: 'JSON',
            success: function(response){
                document.getElementById('tempat_lahir').value = response.result.tempat_lahir;
                document.getElementById('tanggal_lahir').value = response.result.tanggal_lahir;
                document.getElementById('nama_ibu').value = response.result.nama_ibu;
                document.getElementById('nama_ayah').value = response.result.nama_ayah;
                document.getElementById('alamat').value = response.result.alamat;
            }
        })
    }
</script>

@endsection
