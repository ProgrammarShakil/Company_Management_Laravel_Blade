<?php

namespace App\Http\Controllers\Backend;

use App\Models\logo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class LogoController extends Controller
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
        $logos = logo::get();
        return view('Backend.pages.settings.site_settings.logo.index', [ 'logos' => $logos ]);
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logos = logo::find($id);
        return view('Backend.pages.settings.site_settings.logo.edit', compact('logos') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $logos = logo::find($id);
        $logos->title = $request->title;

        if ($request->hasfile('image')) {  // if isset or get image
            $destination = 'uploads/logo_images/'. $logos->image; // get destination 

            if (File::exists( $destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');   // get image 
            $extension = $file->getClientOriginalExtension();  // get image extension
            $fileName = time(). '.' . $extension;  // get file name
            $file->move('uploads/logo_images', $fileName);  // configuring where image upload
            $logos->image = $fileName;
        }
        $logos->update();
        return redirect()->back()->with('Status', 'Logo Changed Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(logo $logo)
    {
        //
    }
}
