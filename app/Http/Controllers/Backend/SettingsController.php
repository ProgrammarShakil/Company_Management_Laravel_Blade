<?php

namespace App\Http\Controllers\Backend;

use App\Models\settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Backend.pages.settings.site_settings.index');
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
     * @param  \App\Models\settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function show(settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function edit(settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, settings $settings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function destroy(settings $settings)
    {
        //
    }
}
