<?php

namespace App\Http\Controllers;

use App\Models\Jop;
use App\Http\Requests\StoreJopRequest;
use App\Http\Requests\UpdateJopRequest;

class JopController extends Controller
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
     * @param  \App\Http\Requests\StoreJopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJopRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jop  $jop
     * @return \Illuminate\Http\Response
     */
    public function show(Jop $jop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jop  $jop
     * @return \Illuminate\Http\Response
     */
    public function edit(Jop $jop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJopRequest  $request
     * @param  \App\Models\Jop  $jop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJopRequest $request, Jop $jop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jop  $jop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jop $jop)
    {
        //
    }
}
