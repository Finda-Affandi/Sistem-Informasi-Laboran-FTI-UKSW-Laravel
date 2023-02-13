<?php

namespace App\Http\Controllers;

use App\Models\ruang_lab;
use App\Models\kelengkapan_ruang;
use App\Models\komputer_lab;
use App\Models\spek_komputer;
use App\Models\kalender;
use App\Models\software_lab;
use App\Http\Requests\Storeruang_labRequest;
use App\Http\Requests\Updateruang_labRequest;

class RuangLabController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeruang_labRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeruang_labRequest $request)
    {
        $store = new ruang_lab;
        $store->ruangan = $request->ruangan;
        $store->nama_ruangan = $request->nama_ruangan;
        $store->view = $request->view;
        $store->jumlah_komputer = $request->jumlah_komputer;
        $store->nama_pic = $request->nama_pic;
        $store->kontak_pic = $request->kontak_pic;
        $store->save();
        return view('admin.lab.adminRuangLab');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ruang_lab  $ruang_lab
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ruangLab = ruang_lab::select()->where('ruangan', $id)->get();
        $spekKomputer = spek_komputer::select()->where('ruangan', $id)->get();
        $kalenderLab = kalender::select()->where('ruangan', $id)->get();
        $software = software_lab::select()->where('ruangan', $id)->get();
        $kelengkapan = kelengkapan_ruang::select()->where('ruangan', $id)->get();
        $kl = komputer_lab::select()->where('ruangan', $id)->get();
        $komputerLab = $kl->sortBy('no_komputer');
        $komputerLab->values()->all();
        return view('admin.lab.adminLabDetail', compact('ruangLab', 'spekKomputer', 'kelengkapan', 'komputerLab', 'kalenderLab', 'id', 'software'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ruang_lab  $ruang_lab
     * @return \Illuminate\Http\Response
     */
    public function edit(ruang_lab $ruang_lab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateruang_labRequest  $request
     * @param  \App\Models\ruang_lab  $ruang_lab
     * @return \Illuminate\Http\Response
     */
    public function update(Updateruang_labRequest $request, ruang_lab $ruang_lab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ruang_lab  $ruang_lab
     * @return \Illuminate\Http\Response
     */
    public function destroy(ruang_lab $ruang_lab)
    {
        //
    }
}
