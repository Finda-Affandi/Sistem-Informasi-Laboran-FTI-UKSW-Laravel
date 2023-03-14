<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use App\Http\Requests\StorelaporanRequest;
use App\Http\Requests\UpdatelaporanRequest;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.laporan.addLaporan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorelaporanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelaporanRequest $request)
    {
        $dateTime = date("Y-m-d H:i:s");

        $store = new laporan;
        $store->namaPelapor = $request->namaPelapor;
        $store->statusPelapor = $request->statusPelapor;
        $store->email = $request->email;
        $store->ruangan = $request->ruangan;
        $store->laporan = $request->laporan;
        $store->tanggal = $dateTime;
        $store->save();

        return view("client.laporan.laporan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelaporanRequest  $request
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelaporanRequest $request, laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(laporan $laporan)
    {
        //
    }
}
