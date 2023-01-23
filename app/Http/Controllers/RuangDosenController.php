<?php

namespace App\Http\Controllers;

use App\Models\ruang_dosen;
use App\Http\Requests\Storeruang_dosenRequest;
use App\Http\Requests\Updateruang_dosenRequest;

class RuangDosenController extends Controller
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
     * @param  \App\Http\Requests\Storeruang_dosenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeruang_dosenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ruang_dosen  $ruang_dosen
     * @return \Illuminate\Http\Response
     */
    public function show(ruang_dosen $ruang_dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ruang_dosen  $ruang_dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(ruang_dosen $ruang_dosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateruang_dosenRequest  $request
     * @param  \App\Models\ruang_dosen  $ruang_dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Updateruang_dosenRequest $request, ruang_dosen $ruang_dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ruang_dosen  $ruang_dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(ruang_dosen $ruang_dosen)
    {
        //
    }
}
