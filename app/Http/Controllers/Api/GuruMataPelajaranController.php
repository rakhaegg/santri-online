<?php

namespace App\Http\Controllers;

use App\Models\GuruMataPelajaran;
use App\Http\Requests\StoreGuruMataPelajaranRequest;
use App\Http\Requests\UpdateGuruMataPelajaranRequest;

class GuruMataPelajaranController extends Controller
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
     * @param  \App\Http\Requests\StoreGuruMataPelajaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGuruMataPelajaranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuruMataPelajaran  $guruMataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(GuruMataPelajaran $guruMataPelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuruMataPelajaran  $guruMataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(GuruMataPelajaran $guruMataPelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGuruMataPelajaranRequest  $request
     * @param  \App\Models\GuruMataPelajaran  $guruMataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGuruMataPelajaranRequest $request, GuruMataPelajaran $guruMataPelajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuruMataPelajaran  $guruMataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuruMataPelajaran $guruMataPelajaran)
    {
        //
    }
}
