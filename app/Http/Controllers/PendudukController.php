<?php

namespace App\Http\Controllers;

use App\Keluarga;
use App\Penduduk;
use DB;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keluarga = Keluarga::all();
        $penduduk = Penduduk::all();
        return view('penduduk.index', compact('penduduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $keluarga = Keluarga::all();
        return view('penduduk.create', compact('keluarga'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_kk'=> 'required|size:16',
            'nik'=> 'required|size:16',
            'nama'=> 'required',
            'nama_ayah'=> 'required',
            'nama_ibu'=> 'required',
            'tempat_lahir'=> 'required',
            'tanggal_lahir'=> 'required',
            'jenis_kelamin'=> 'required',
            'alamat'=> 'required',
            'agama'=> 'required',
            'status_perkawinan'=> 'required',
            'status_hubungan'=> 'required',
            'pekerjaan'=> 'required',
            'kewarganegaraan'=> 'required',
            'pendidikan'=> 'required',
        ]);
        $penduduk = new penduduk;
        $penduduk->no_kk=$request->no_kk;
        $penduduk->nik=$request->nik;
        $penduduk->nama=$request->nama;
        $penduduk->nama_ayah=$request->nama_ayah;
        $penduduk->nama_ibu=$request->no_kk;
        $penduduk->tempat_lahir=$request->tempat_lahir;
        $penduduk->tanggal_lahir=$request->tanggal_lahir;
        $penduduk->jenis_kelamin=$request->jenis_kelamin;
        $penduduk->alamat=$request->alamat;
        $penduduk->agama=$request->agama;
        $penduduk->status_perkawinan=$request->status_perkawinan;
        $penduduk->status_hubungan=$request->status_hubungan;
        $penduduk->pekerjaan=$request->pekerjaan;
        $penduduk->kewarganegaraan=$request->kewarganegaraan;
        $penduduk->pendidikan=$request->pendidikan;
        $penduduk->save();
        return redirect('penduduk')->with(['success' => 'Data Penduduk Berhasil Ditambahkan!']);
        // Penduduk::create($request->all());

        // return redirect('penduduk')->with(['success' => 'Data Penduduk Berhasil Ditambahkan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show($no_kk)
    {
        Keluarga::where('no_kk', $no_kk)->firstOrFail();
        $penduduk = Penduduk::where('no_kk', $no_kk)->orderBy('nama', 'ASC')->get();
        return view('penduduk.index', compact('penduduk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        $penduduk = Penduduk::find($penduduk->nik);
        return view('penduduk.update', compact('penduduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        Penduduk::where('nik', $penduduk->nik)
            ->update([
                // 'no_kk' => $request->no_kk,
                'nik' => $request->nik,
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'status_perkawinan' => $request->status_perkawinan,
                'status_hubungan' => $request->status_hubungan,
                'pekerjaan' => $request->pekerjaan,
                'kewarganegaraan' => $request->kewarganegaraan,
                'pendidikan' => $request->pendidikan,
                'nama_ibu' => $request->nama_ibu,
                'nama_ayah' => $request->nama_ayah
            ]);
        return redirect('/penduduk')->with(['success' => 'Data Pelanggan Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penduduk $penduduk)
    {
        Penduduk::destroy($penduduk->nik);
        return redirect('/penduduk')->with(['success' => 'Data Penduduk Berhasil Dihapus!']);
    }
}
