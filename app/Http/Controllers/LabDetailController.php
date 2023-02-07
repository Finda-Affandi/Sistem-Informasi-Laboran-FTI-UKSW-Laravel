<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ruang_lab;
use App\Models\kelengkapan_ruang;
use App\Models\komputer_lab;
use App\Models\spek_komputer;
use App\Models\kalender;
use App\Models\software_lab;

class LabDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
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
     * @param  int  $id
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
        return view('client.ruangLabDetail', compact('ruangLab', 'spekKomputer', 'kelengkapan', 'komputerLab', 'kalenderLab', 'id', 'software'));
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
}
