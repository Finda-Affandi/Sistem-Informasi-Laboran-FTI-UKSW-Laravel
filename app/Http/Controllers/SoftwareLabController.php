<?php

namespace App\Http\Controllers;

use App\Models\software_lab;
use App\Http\Requests\Storesoftware_labRequest;
use App\Http\Requests\Updatesoftware_labRequest;

class SoftwareLabController extends Controller
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
        return view('admin.lab.adminAddSoftware');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storesoftware_labRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storesoftware_labRequest $request)
    {
        $store = new software_lab;
        $store->ruangan = $request->ruangan;
        $store->software = $request->software;
        $store->save();
        return redirect()->route('RuangLab.show', $request->ruangan);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\software_lab  $software_lab
     * @return \Illuminate\Http\Response
     */
    public function show(software_lab $software_lab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\software_lab  $software_lab
     * @return \Illuminate\Http\Response
     */
    public function edit(software_lab $software_lab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatesoftware_labRequest  $request
     * @param  \App\Models\software_lab  $software_lab
     * @return \Illuminate\Http\Response
     */
    public function update(Updatesoftware_labRequest $request, software_lab $software_lab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\software_lab  $software_lab
     * @return \Illuminate\Http\Response
     */
    public function destroy(software_lab $software_lab)
    {
        //
    }
}
