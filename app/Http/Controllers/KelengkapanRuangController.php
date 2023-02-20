<?php

namespace App\Http\Controllers;

use App\Models\kelengkapan_ruang;
use App\Http\Requests\Storekelengkapan_ruangRequest;
use App\Http\Requests\Updatekelengkapan_ruangRequest;

class KelengkapanRuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session_start();
        $ruangan = $_SESSION['idRuang'];
        return redirect()->route('RuangLab.show', $ruangan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lab.adminAddKelengkapan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storekelengkapan_ruangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storekelengkapan_ruangRequest $request)
    {
        $store = new kelengkapan_ruang;
        $store->ruangan = $request->ruangan;
        $store->kelengkapan = $request->kelengkapan;
        $store->jumlah = $request->jumlah;
        $store->kondisi = $request->kondisi;
        $store->save();
        return redirect()->route('RuangLab.show', $request->ruangan);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kelengkapan_ruang  $kelengkapan_ruang
     * @return \Illuminate\Http\Response
     */
    public function show(kelengkapan_ruang $kelengkapan_ruang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kelengkapan_ruang  $kelengkapan_ruang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelengkapan = kelengkapan_ruang::find($id);
        return view('admin.lab.adminEditKelengkapan', compact('kelengkapan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatekelengkapan_ruangRequest  $request
     * @param  \App\Models\kelengkapan_ruang  $kelengkapan_ruang
     * @return \Illuminate\Http\Response
     */
    public function update(Updatekelengkapan_ruangRequest $request, $id)
    {
        $store = kelengkapan_ruang::find($id);
        $store->ruangan = $request->ruangan;
        $store->kelengkapan = $request->kelengkapan;
        $store->jumlah = $request->jumlah;
        $store->kondisi = $request->kondisi;
        $store->save();
        return redirect()->route('RuangLab.show', $request->ruangan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kelengkapan_ruang  $kelengkapan_ruang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelengkapan = kelengkapan_ruang::find($id);
        $kelengkapan->delete();
        return redirect()->route('Kelengkapan.index');
    }
}
