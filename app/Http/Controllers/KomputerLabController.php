<?php

namespace App\Http\Controllers;

use App\Models\komputer_lab;
use App\Http\Requests\Storekomputer_labRequest;
use App\Http\Requests\Updatekomputer_labRequest;

class KomputerLabController extends Controller
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
     * @param  \App\Http\Requests\Storekomputer_labRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storekomputer_labRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\komputer_lab  $komputer_lab
     * @return \Illuminate\Http\Response
     */
    public function show(komputer_lab $komputer_lab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\komputer_lab  $komputer_lab
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $komputer = komputer_lab::find($id);
        return view('admin.lab.adminEditKomputer', compact('komputer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatekomputer_labRequest  $request
     * @param  \App\Models\komputer_lab  $komputer_lab
     * @return \Illuminate\Http\Response
     */
    public function update(Updatekomputer_labRequest $request, $id)
    {
        $store = komputer_lab::find($id);
        $store->ruangan = $request->ruangan;
        $store->no_komputer = $request->no_komputer;
        $store->kondisi = $request->kondisi;
        $store->keterangan = $request->keterangan;
        $store->save();
        return redirect()->route('RuangLab.show', $request->ruangan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\komputer_lab  $komputer_lab
     * @return \Illuminate\Http\Response
     */
    public function destroy(komputer_lab $komputer_lab)
    {
        //
    }
}
