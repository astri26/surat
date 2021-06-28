@extends('master')
@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Cetak Surat Izin Keramaian</h4>
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
                    {{-- <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Umur</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="umur" name="umur" placeholder="Umur" required>
                        </div>
                    </div> --}}
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pekerjaan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="teks" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required>
                        </div>
                    </div>
                        <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="teks" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
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
            url: '{{ url('/sizinkeramaian/get-data/') }}',
            type: 'post',
            data: '_token={{ csrf_token() }}&id=' + value,
            dataType: 'JSON',
            success: function(response){
                document.getElementById('pekerjaan').value = response.result.pekerjaan;
                document.getElementById('alamat').value = response.result.alamat;
            }
        })
    }
</script>

@endsection
