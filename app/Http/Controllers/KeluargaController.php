<?php

namespace App\Http\Controllers;

use App\Keluarga;
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
        $penduduk = Keluarga::all();
        return view('keluarga.index', compact('keluarga'));
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keluarga $keluarga)
    {
        //
    }
}
