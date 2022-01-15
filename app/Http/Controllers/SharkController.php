<?php

namespace App\Http\Controllers;

use App\Models\Shark;
use App\Http\Requests\StoreSharkRequest;
use App\Http\Requests\UpdateSharkRequest;

class SharkController extends Controller
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
     * @param  \App\Http\Requests\StoreSharkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSharkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shark  $shark
     * @return \Illuminate\Http\Response
     */
    public function show(Shark $shark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shark  $shark
     * @return \Illuminate\Http\Response
     */
    public function edit(Shark $shark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSharkRequest  $request
     * @param  \App\Models\Shark  $shark
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSharkRequest $request, Shark $shark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shark  $shark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shark $shark)
    {
        //
    }
}
