<?php

namespace App\Http\Controllers;

use App\Models\gedung_fti;
use App\Http\Requests\Storegedung_ftiRequest;
use App\Http\Requests\Updategedung_ftiRequest;

class GedungFtiController extends Controller
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
     * @param  \App\Http\Requests\Storegedung_ftiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storegedung_ftiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gedung_fti  $gedung_fti
     * @return \Illuminate\Http\Response
     */
    public function show(gedung_fti $gedung_fti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gedung_fti  $gedung_fti
     * @return \Illuminate\Http\Response
     */
    public function edit(gedung_fti $gedung_fti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updategedung_ftiRequest  $request
     * @param  \App\Models\gedung_fti  $gedung_fti
     * @return \Illuminate\Http\Response
     */
    public function update(Updategedung_ftiRequest $request, gedung_fti $gedung_fti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gedung_fti  $gedung_fti
     * @return \Illuminate\Http\Response
     */
    public function destroy(gedung_fti $gedung_fti)
    {
        //
    }
}
