<?php

namespace App\Http\Controllers\Backend;

use App\Models\Footer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FooterController extends Controller
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
        $data = Footer::get();
        return view('Backend.pages.settings.footer_settings.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.pages.settings.footer_settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation Data
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);

        $data = new Footer();
        $data->branch_name = $request->name;
        $data->address = $request->description;
        $data->status = $request->status;

        $data->save();
        return redirect()->back()->with('Status', 'Branch Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Footer::find($id);
        return view('Backend.pages.settings.footer_settings.edit', compact('data') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validation Data
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);
        
        $data = Footer::find($id);
        $data->branch_name = $request->name;
        $data->address = $request->description;
        $data->status = $request->status;

        $data->update();
        return redirect()->back()->with('Status', 'Branch Updated Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
            $data = Footer::find($id);
    
            $data->delete();
            return redirect()->back()->with('Status', 'Branch Deleted Successfully.');

    }
}
