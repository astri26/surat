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
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor KK</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="no_kk" name="no_kk" value="{{old('no_kk')}}" placeholder="Nomor KK" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="nama_kk" name="nama_kk" value="{{old('nama_kk')}}" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Dusun</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" id="dusun" name="dusun" value="{{old('dusun')}}" placeholder="Dusun" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">RT</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="number" class="form-control" id="rt" name="rt" value="{{old('rt')}}" placeholder="RT" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">RW</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="number" class="form-control" id="rw" name="rw" value="{{old('rw')}}" placeholder="RW" required>
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
            url: '{{ url('/keluarga/get-data/') }}',
            type: 'post',
            data: '_token={{ csrf_token() }}&id=' + value,
            dataType: 'JSON',
            success: function(response){
                document.getElementById('nama').value = response.result.nama;
            }
        })
    }
</script>

@endsection
