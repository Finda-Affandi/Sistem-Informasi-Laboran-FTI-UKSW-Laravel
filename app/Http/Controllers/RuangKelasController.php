<?php

namespace App\Http\Controllers;

use App\Models\ruang_kelas;
use App\Http\Requests\Storeruang_kelasRequest;
use App\Http\Requests\Updateruang_kelasRequest;

class RuangKelasController extends Controller
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
     * @param  \App\Http\Requests\Storeruang_kelasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeruang_kelasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ruang_kelas  $ruang_kelas
     * @return \Illuminate\Http\Response
     */
    public function show(ruang_kelas $ruang_kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ruang_kelas  $ruang_kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(ruang_kelas $ruang_kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateruang_kelasRequest  $request
     * @param  \App\Models\ruang_kelas  $ruang_kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Updateruang_kelasRequest $request, ruang_kelas $ruang_kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ruang_kelas  $ruang_kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(ruang_kelas $ruang_kelas)
    {
        //
    }
}
