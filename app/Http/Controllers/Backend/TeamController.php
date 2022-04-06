<?php

namespace App\Http\Controllers\Backend;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
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
        $team_members = Team::get();
        return view('Backend.pages.team_members.index',compact('team_members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.pages.team_members.create');
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

        $team_members = new Team();
        $team_members->name = $request->name;
        $team_members->designation = $request->designation;
        $team_members->facebook = $request->facebook;
        $team_members->facebook_link = $request->facebook_link;
        $team_members->twitter = $request->twitter;
        $team_members->twitter_link = $request->twitter_link;
        $team_members->instagram = $request->instagram;
        $team_members->instagram_link = $request->instagram_link;
        $team_members->youtube = $request->youtube;
        $team_members->youtube_link = $request->youtube_link;

        if ($request->hasFile('image')) {  // if isset or get image
            $file = $request->file('image');   // get image 
            $extension = $file->getClientOriginalExtension();  // get image extension
            $fileName = time(). '.' . $extension;  // get file name
            $file->move('uploads/team_images', $fileName);  // configuring where image upload
            $team_members->image = $fileName;
        }
        $team_members->save();
        return redirect()->back()->with('Status', 'Member Added Successfully.');
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
        $team_member = Team::find($id);

        $destination = 'uploads/team_images/'. $team_member->image; // get destination 
        if (File::exists( $destination)) {
            File::delete($destination);
        }
        $team_member->delete();
        return redirect()->back()->with('Status', 'Member Deleted Successfully.');
    }
}
