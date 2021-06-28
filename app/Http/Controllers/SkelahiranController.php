<?php

namespace App\Http\Controllers;

use App\Penduduk;
use App\Surat;
use Illuminate\Http\Request;

class SkelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = Penduduk::all();
        $surat = Surat::all();
        return view('surat.indexskelahiran', compact('penduduk'));
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
        $surat = Surat::where('tipe_surat', "kelahiran")->latest('no_surat')->first();
        $awal = date_create($detailWarga->tanggal_lahir);
        $akhir = date_create();
        $diff  = date_diff($awal, $akhir);
        if($surat == null){
            $no_surat = 0;
        }else{
            $no_surat = $surat->no_surat;
        }
        Surat::create([
            'nik' => $detailWarga->nik,
            'nama_warga' => $detailWarga->nama,
            'tipe_surat' =>'Kelahiran',
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
            return view('template.templatekelahiran', [
                'nama_warga' => $detailWarga->nama,
                // 'no_surat' => $surat->no_surat +1 ,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'umur' => $diff->y,
                'tanggal' => date("Y-m-d"),
                'tgl' => $request->tgl,
                'nama_ibu' => $request->nama_ibu,
                'status_perkawinan'=> $request->status_perkawinan,
                'nama_ayah' => $request->nama_ayah,
                'alamat' => $request->alamat,
                'lokasi' => $request->lokasi,
                'keperluan' => $request->keperluan,
                'penghasilan' => $request->penghasilan,
                'keterangan' => $request->keterangan,
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
        return view('template.templatekelahiran', [
            'nama_warga' => $detailSurat->nama_warga,
            'tempat_lahir' => $detailSurat->tempat_lahir,
            'tanggal_lahir' => $detailSurat->tanggal_lahir,
            'umur' => $detailSurat->umur,
            'tanggal' => $detailSurat->tanggal,
            'jenis_kelamin' => $detailSurat->jenis_kelamin,
            'nama_ayah'=> $detailSurat->nama_ayah,
            'nama_ibu' => $detailSurat->nama_ibu,
            'tgl' => $detailSurat->tgl,
            'pekerjaan' => $detailSurat->pekerjaan,
            'alamat' => $detailSurat->alamat,
            'keperluan' => $detailSurat->keperluan,
            'lokasi' => $detailSurat->lokasi,
            'keterangan' => $detailSurat->keterangan,
        ]);
    }
    public function getDataPenduduk(Request $request)
    {
        $penduduk = Penduduk::where([
            'nik' => $request->id
        ])->first();

        $data['status'] = 'ok';
        $data['result'] = array('tanggal_lahir' => $penduduk->tanggal_lahir,
        'tempat_lahir' => $penduduk->tempat_lahir, 'alamat' => $penduduk->alamat,
        'nama_ibu' => $penduduk->nama_ibu, 'nama_ayah' => $penduduk->nama_ayah);

        return json_encode($data);
    }
}
