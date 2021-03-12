<?php

namespace App\Http\Controllers;

use App\Keluarga;
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
        $penduduk = Penduduk::all();
        return view('keluarga.index', compact('keluarga','penduduk'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penduduk = Penduduk::all();
        return view('keluarga.create', compact('penduduk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Keluarga::create([
            'penduduk_id' => $request->id_penduduk,
            'dusun' => $request->dusun,
            'rt' => $request->rt,
            'rw' => $request->rw
        ]);
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
        $keluarga = Keluarga::find($keluarga->id_keluarga);
        $penduduk = Penduduk::all();
        return view('keluarga.update', compact('keluarga','penduduk'));
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
        Keluarga::where('id_keluarga', $keluarga->id_keluarga)
            ->update([
                'penduduk_id' => $request->id_penduduk,
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
        Keluarga::destroy($keluarga->id_keluarga);
        return redirect('/keluarga')->with(['success' => 'Data Keluarga Berhasil Dihapus!']);
    }
}
