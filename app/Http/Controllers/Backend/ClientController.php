<?php

namespace App\Http\Controllers\Backend;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
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
        $clients = Client::get();
        return view('Backend.pages.clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.pages.clients.create');
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
            'image' => 'required',
            'designation' => 'required',
            'facebook' => 'nullable',
            'facebook_link' => 'nullable',
            'twitter' => 'nullable',
            'twitter_link' => 'nullable',
            'instagram' => 'nullable',
            'instagram_link' => 'nullable',
            'youtube' => 'nullable',
            'youtube_link' => 'nullable',
        ]);

        $clients = new Client();
        $clients->name = $request->name;
        $clients->designation = $request->designation;
        $clients->facebook = $request->facebook;
        $clients->facebook_link = $request->facebook_link;
        $clients->twitter = $request->twitter;
        $clients->twitter_link = $request->twitter_link;
        $clients->instagram = $request->instagram;
        $clients->instagram_link = $request->instagram_link;
        $clients->youtube = $request->youtube;
        $clients->youtube_link = $request->youtube_link;

        if ($request->hasFile('image')) {  // if isset or get image
            $file = $request->file('image');   // get image 
            $extension = $file->getClientOriginalExtension();  // get image extension
            $fileName = time(). '.' . $extension;  // get file name
            $file->move('uploads/client_images', $fileName);  // configuring where image upload
            $clients->image = $fileName;
        }
        $clients->save();
        return redirect()->back()->with('Status', 'Client Added Successfully.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);

        $destination = 'uploads/client_images/'. $client->image; // get destination 
        if (File::exists( $destination)) { 
            File::delete($destination);
        }
        $client->delete();
        return redirect()->back()->with('Status', 'Client Deleted Successfully.');
    }
}
