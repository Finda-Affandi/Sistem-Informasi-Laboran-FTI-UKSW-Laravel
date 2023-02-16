<?php

namespace App\Http\Controllers;

use App\Models\kalender;
use App\Http\Requests\StorekalenderRequest;
use App\Http\Requests\UpdatekalenderRequest;

class KalenderController extends Controller
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
        return view('admin.lab.adminAddKalender');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekalenderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekalenderRequest $request)
    {
        $store = new kalender;
        $store->ruangan = $request->ruangan;
        $store->kalender_id = $request->kalender_id;
        $store->save();
        return redirect()->route('RuangLab.show', $request->ruangan);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kalender  $kalender
     * @return \Illuminate\Http\Response
     */
    public function show(kalender $kalender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kalender  $kalender
     * @return \Illuminate\Http\Response
     */
    public function edit(kalender $kalender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekalenderRequest  $request
     * @param  \App\Models\kalender  $kalender
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekalenderRequest $request, kalender $kalender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kalender  $kalender
     * @return \Illuminate\Http\Response
     */
    public function destroy(kalender $kalender)
    {
        //
    }
}
