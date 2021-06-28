
<!DOCTYPE html>
<head>
    <title>Contoh Surat Keterangan</title>
    <meta charset="utf-8">
    <style>
		body {
		height: 842px;
		width: 595px;
		/* to centre page on screen*/
		margin-left: auto;
		margin-right: auto;
		}
	</style>
	<body bgcolor="white">
        <table>
            <font face="Times New Roman" color="black">
                   <td><img align="center" src="{{url('otika/assets/img/kopsurat.png')}}" width="100" height="100" ></td>
                    <td align="center"><b><font face="Times New Roman" color="black" size="5">PEMERINTAH KABUPATEN MADIUN </font> <br>
                        <font face="Times New Roman" color="black" size="5">KECAMATAN JIWAN </font> <br>
                        <font face="Times New Roman" color="black" size="5">DESA BIBRIK </font> <br>
                        <font size="3" >Raya Desa Bibrik No. 157 Telp. (0351) 475382<br></font>
                        <font size="2" >Kode Pos: 63161<br></font></b></td>
            </table>
		<hr size="5px" width="100%" color="black">
		<font face="Times New Roman" color="black" size="4">
			<p align="center"> <u> <b> SURAT KETERANGAN</b></u>
		</font>
		<br>
		<font face="Times New Roman" color="black" size="2">  Nomor : 470/{{ $no_surat ?? '' }}/401.406.02/2021 </font>

</head>

<body>
    <div id=halaman>

        <p style="text-align: justify;"> Yang bertanda tangan di bawah ini :
        </p>
        <table>
            <tr>
                <td style="width: 30%; text-indent: 0.3in;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">Hengki Rahmawadi, S.P</td>
            </tr>
            <tr>
                <td style="width: 30%; text-indent: 0.3in;">Jabatan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">Kepala Desa Bibrik</td>
            </tr>
            <tr>
                <td style="width: 30%; text-indent: 0.3in;">Kecamatan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">Jiwan</td>
            </tr>
            <tr>
                <td style="width: 30%; text-indent: 0.3in;">Kabupaten</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">Madiun</td>
            </tr>
        </table>
            <p style="text-align: Justify;"> Menerangkan dengan sesungguhnya bahwa :
            </p>
            <table>
            <tr>
                <td style="width: 30%; text-indent: 0.3in;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $nama_warga ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 30%; text-indent: 0.3in;">Tempat, Tgl. Lahir</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"> {{ $tempat_lahir ?? '' }}, {{ Carbon\Carbon::parse($tgl ?? '')->translatedFormat('d F Y') }}</td>
            </tr>
            <tr>
                <td style="width: 30%; text-indent: 0.3in;">Status Perkawinan</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $status_perkawinan ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 30%; text-indent: 0.3in;">Kewarganegaraan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $kewarganegaraan ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 30%;text-indent: 0.3in;">Pendidikan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $pendidikan ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 30%; text-indent: 0.3in;">Agama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $agama ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 30%; text-indent: 0.3in;">Pekerjaan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $pekerjaan ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 30%; text-indent: 0.3in">Alamat</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $alamat ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 30%; text-indent: 0.3in;">Keterangan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $keterangan ?? '' }}</td>
            </tr>
            </table>
            <table>
            <tr>
                <td style="width: 50%;">Surat keterangan ini dipergunakan untuk</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $keperluan ?? '' }}</td>
            </tr>
        </table>

        <p  style="text-align: justify;">Demikian Surat Keterangan dibuat dengan sebenarnya agar dapat digunakan sebagaimana mestinya.
        </p>

        @php
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', date('Y-m-d'));

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        $tanggalSekarang = $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    @endphp

<div style="width:39%; text-align: center; float: right;">Bibrik, {{ $tanggalSekarang }}</div><br>
<div style="width: 30%; text-align: justify; float: right;">Kepala Desa Bibrik</div><br><br><br><br><br><br>
<div style="width: 35%; text-align: center; float: right;">HENGKI RAHMAWADI, S.P</div>

</div>
    <div class="form-group row mb-4">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
        <div class="col-sm-12 col-md-7">
            <button id="printPageButton" onClick="window.print();">Print</button>
        </div>
</body>

</html>
