<?php

namespace App\Http\Controllers;

use App\Penduduk;
use App\Surat;
use Illuminate\Http\Request;

class SkehilanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = Penduduk::all();
        return view('surat.indexskehilangan', compact('penduduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detailWarga = Penduduk::where('nik', $request->nama)->first();
        $surat = surat::where('tipe_surat', "Kehilangan")->latest('no_surat')->first();
        if($surat == null){
            $no_surat = 0;
        }else{
            $no_surat = $surat->no_surat;
        }
        Surat::create([
            'nik' => $detailWarga->nik,
            'nama_warga' => $detailWarga->nama,
            'tipe_surat' =>'Kehilangan',
            // 'no_surat' => $surat->no_surat + 1,
            // 'tempat_lahir' => $request->tempat_lahir,
            // 'tanggal_lahir' => $request->tanggal_lahir,
            // 'hari' => $request->hari,
            // 'umur' => $diff->y,
            'tanggal' => date("Y-m-d"),
            'tanggal_meninggal' => $request->tanggal_meninggal,
            // 'tgl' => $request->tgl,
            // 'jenis_kelamin'=>$request->jeniskelamin,
            // 'status_perkawinan'=>$request->status_perkawinan,
            // 'agama'=>$request->agama,
            // 'alamat'=>$request->alamat,
            // 'lokasi'=>$request->lokasi,
            // 'penghasilan'=>$request->penghasilan,
            // 'keterangan'=>$request->keterangan,
        ]);

        return view('template.templatekehilangan', [
            // 'no_surat' => $no_surat + 1,
            'nama_warga' => $detailWarga->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nik' => $request->nik,
            'kewarganegaraan' => $request->kewarganegaraan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status_perkawinan'=> $request->status_perkawinan,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'keterangan' => $request->keterangan,
            'keperluan' => $request->keperluan,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tampilHistory($id_surat){
        $detailSurat = Surat::where('id_surat', $id_surat)->first();
        return view('template.templatekehilangan', [
            'nama_warga' => $detailSurat->nama,
            'no_surat' => $detailSurat->no_surat,
            'tempat_lahir' => $detailSurat->tempat_lahir,
            'tanggal_lahir' => $detailSurat->tanggal_lahir,
            'nik' => $detailSurat->nik,
            'kewarganegaraan' => $detailSurat->kewarganegaraan,
            'jenis_kelamin' => $detailSurat->jenis_kelamin,
            'status_perkawinan'=> $detailSurat->status_perkawinan,
            'agama' => $detailSurat->agama,
            'pekerjaan' => $detailSurat->pekerjaan,
            'alamat' => $detailSurat->alamat,
            'keterangan' => $detailSurat->keterangan,
            'keperluan' => $detailSurat->keperluan,
        ]);
    }

    public function getDataPenduduk(Request $request)
    {
        $penduduk = Penduduk::where([
            'nik' => $request->id
        ])->first();

        $surat = Surat::all()->last();

        $data['status'] = 'ok';
        $data['result'] = array('jenis_kelamin' => $penduduk->jenis_kelamin, 'alamat' => $penduduk->alamat, 'nik' => $penduduk->nik, 'kewarganegaraan' => $penduduk->kewarganegaraan,
        'agama' => $penduduk->agama, 'pekerjaan' => $penduduk->pekerjaan, 'tanggal_lahir' => $penduduk->tanggal_lahir, 'tempat_lahir' => $penduduk->tempat_lahir,
        'status_perkawinan' => $penduduk->status_perkawinan);

        return json_encode($data);
    }
}
