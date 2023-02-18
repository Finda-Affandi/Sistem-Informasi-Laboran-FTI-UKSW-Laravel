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
        return view('admin.lab.adminAddLab');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeruang_labRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeruang_labRequest $request)
    {
        $kontak = "https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=" . $request->kontak_pic;

        for($i = 0; $i < (int)$request->jumlah_komputer + 1; $i++) {
            if($i == 0) {
                $store = new komputer_lab;
                $store->ruangan = $request->ruangan;
                $store->no_komputer = "Pengajar";
                $store->kondisi = "Baik";
                $store->keterangan = " ";
                $store->save();
            }
            else {
                $store = new komputer_lab;
                $store->ruangan = $request->ruangan;
                $store->no_komputer = $i;
                $store->kondisi = "Baik";
                $store->keterangan = " ";
                $store->save();
            }
        }

        $store = new ruang_lab;
        $store->ruangan = $request->ruangan;
        $store->nama_ruangan = $request->nama_ruangan;
        $store->view = $request->view;
        $store->jumlah_komputer = $request->jumlah_komputer;
        $store->nama_pic = $request->nama_pic;
        $store->kontak_pic = $kontak;
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
    public function edit($id)
    {
        $lab = ruang_lab::find($id);
        return view('admin.lab.adminEditLab', compact('lab'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateruang_labRequest  $request
     * @param  \App\Models\ruang_lab  $ruang_lab
     * @return \Illuminate\Http\Response
     */
    public function update(Updateruang_labRequest $request, $id)
    {
        $store = ruang_lab::find($id);
        $store->ruangan = $request->ruangan;
        $store->nama_ruangan = $request->nama_ruangan;
        $store->view = $request->view;
        $store->jumlah_komputer = $request->jumlah_komputer;
        $store->nama_pic = $request->nama_pic;
        $store->kontak_pic = $request->kontak_pic;
        $store->save();
        return redirect()->route('RuangLab.show', $request->ruangan);
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
