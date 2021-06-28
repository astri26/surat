<?php

namespace App\Http\Controllers;

use App\Keluarga;
use DB;
use App\Penduduk;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keluarga = Keluarga::all();
        return view('keluarga.index', compact('keluarga'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $keluarga = Keluarga::all();
        return view('keluarga.create', compact('keluarga'));
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
            'no_kk' => 'required',
            'nama_kk' => 'required',
            'dusun' => 'required',
            'rt' => 'required',
            'rw' => 'required',
        ]);
        $keluarga = new keluarga();
        $keluarga->no_kk = $request->no_kk;
        $keluarga->nama_kk = $request->nama_kk;
        $keluarga->dusun = $request->dusun;
        $keluarga->rt = $request->rt;
        $keluarga->rw = $request->rw;
        $keluarga->save();
        // Keluarga::create([
        //     'rt' => $request->no_kk,
        //     'nama_kk' => $request->nama_kk,
        //     'dusun' => $request->dusun,
        //     'rt' => $request->rt,
        //     'rw' => $request->rw
        // ]);
        return redirect('/keluarga')->with(['success' => 'Data Keluarga Berhasil Ditambahkan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function show(Keluarga $keluarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function edit(Keluarga $keluarga)
    {
        $keluarga = Keluarga::find($keluarga->no_kk);
        return view('keluarga.update', compact('keluarga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keluarga $keluarga)
    {
        Keluarga::where('no_kk',$keluarga->no_kk)
            ->update([
                'nama_kk' => $request->nama_kk,
                'dusun' => $request->dusun,
                'rt' => $request->rt,
                'rw' => $request->rw
            ]);
        return redirect('/keluarga')->with(['success' => 'Data Keluarga Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keluarga $keluarga)
    {
        Keluarga::destroy($keluarga->no_kk);
        return redirect('/keluarga')->with(['success' => 'Data Keluarga Berhasil Dihapus!']);
    }
    // public function getDataPenduduk(Request $request)
    // {
    //     $penduduk = Penduduk::where([
    //         'id_penduduk' => $request->id
    //     ])->first();

    //     $data['status'] = 'ok';
    //     $data['result'] = array('nama' => $penduduk->nama, 'alamat' => $penduduk->alamat);

    //     return json_encode($data);
    // }
}
