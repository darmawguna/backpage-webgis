<?php

namespace App\Http\Controllers;

use App\Models\Sungai;
use App\Http\Requests\StoreSungaiRequest;
use App\Http\Requests\UpdateSungaiRequest;

class SungaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backpage.sungai');
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
     * @param  \App\Http\Requests\StoreSungaiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSungaiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sungai  $sungai
     * @return \Illuminate\Http\Response
     */
    public function show(Sungai $sungai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sungai  $sungai
     * @return \Illuminate\Http\Response
     */
    public function edit(Sungai $sungai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSungaiRequest  $request
     * @param  \App\Models\Sungai  $sungai
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSungaiRequest $request, Sungai $sungai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sungai  $sungai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sungai $sungai)
    {
        //
    }
}
