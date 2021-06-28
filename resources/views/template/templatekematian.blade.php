<!DOCTYPE html>
<head>
    <title>Contoh Kematian</title>
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
			<p align="center"> <u> <b> SURAT KETERANGAN KEMATIAN </b></u>
		</font>
		<br>
		<font face="Times New Roman" color="black" size="2">  Nomor : 470/{{ $no_surat ?? '' }} /401.406.02/2021 </font>

</head>

<body>
    <div id=halaman>

        <p style="text-align: justify; text-indent: 0.5in;"> Yang bertanda tangan dibawah ini, Kepala Desa Bibrik, Kecamatan Jiwan, Kabupaten Madiun menerangkan dengan sebenarnya bahwa orang tersebut dibawah ini :
        </p>

        <table>
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $nama_warga ?? ''}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Jenis Kelamin</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $jenis_kelamin ?? ''}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Alamat</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $alamat ?? ''}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Umur</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $umur ?? ''}}</td>
            </tr>
        </table>
        <table>
        <p style="text-align: Center; text-indent: 0.5in;"> <b> "Telah Meninggal Dunia" pada: </b>
        </p>
            <tr>
        <td style="width: 30%;">Hari, Tanggal</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ Carbon\Carbon::parse($tgl ?? '')->translatedFormat('l, d F Y') }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Di</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $lokasi ?? ''}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Disebabkan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $keterangan ?? ''}}</td>
            </tr>
        </table>

        <p  style="text-align: justify; text-indent: 0.5in;">Demikian Surat Keterangan ini diberikan, untuk dapat atas dasar sebenarnya.</p>

    <div style="width:39%; text-align: center; float: right;">Bibrik, {{ Carbon\Carbon::parse($tangggal ?? '')->translatedFormat(' d F Y') }}</div><br>
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
