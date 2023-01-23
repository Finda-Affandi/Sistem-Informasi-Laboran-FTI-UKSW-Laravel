<?php

namespace App\Http\Controllers;

use App\Models\spek_komputer;
use App\Http\Requests\Storespek_komputerRequest;
use App\Http\Requests\Updatespek_komputerRequest;

class SpekKomputerController extends Controller
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
     * @param  \App\Http\Requests\Storespek_komputerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storespek_komputerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\spek_komputer  $spek_komputer
     * @return \Illuminate\Http\Response
     */
    public function show(spek_komputer $spek_komputer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\spek_komputer  $spek_komputer
     * @return \Illuminate\Http\Response
     */
    public function edit(spek_komputer $spek_komputer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatespek_komputerRequest  $request
     * @param  \App\Models\spek_komputer  $spek_komputer
     * @return \Illuminate\Http\Response
     */
    public function update(Updatespek_komputerRequest $request, spek_komputer $spek_komputer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\spek_komputer  $spek_komputer
     * @return \Illuminate\Http\Response
     */
    public function destroy(spek_komputer $spek_komputer)
    {
        //
    }
}
