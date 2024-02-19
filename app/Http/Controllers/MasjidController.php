<?php

namespace App\Http\Controllers;

use App\Models\masjid;
use Illuminate\Http\Request;

class MasjidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('masjid.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masjid.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\masjid  $masjid
     * @return \Illuminate\Http\Response
     */
    public function show(masjid $masjid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\masjid  $masjid
     * @return \Illuminate\Http\Response
     */
    public function edit(masjid $masjid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\masjid  $masjid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, masjid $masjid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\masjid  $masjid
     * @return \Illuminate\Http\Response
     */
    public function destroy(masjid $masjid)
    {
        //
    }
}
