<?php

namespace App\Http\Controllers;

use App\Models\CheckOut;
use App\Http\Requests\StoreCheckOutRequest;
use App\Http\Requests\UpdateCheckOutRequest;

class CheckOutController extends Controller
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
     * @param  \App\Http\Requests\StoreCheckOutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCheckOutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CheckOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function show(CheckOut $checkOut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CheckOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckOut $checkOut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCheckOutRequest  $request
     * @param  \App\Models\CheckOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCheckOutRequest $request, CheckOut $checkOut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CheckOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function destroy(CheckOut $checkOut)
    {
        //
    }
}
