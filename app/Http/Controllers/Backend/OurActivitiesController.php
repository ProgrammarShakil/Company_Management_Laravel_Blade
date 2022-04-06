<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\OurActivities;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class OurActivitiesController extends Controller
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
        $data = OurActivities::get();
        return view('Backend.pages.our_activities.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.pages.our_activities.create');
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
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);


        $data = new OurActivities();
        $data->title = $request->title;
        $data->description = $request->description;

        if ($request->hasFile('image')) {  // if isset or get image
            $file = $request->file('image');   // get image 
            $extension = $file->getClientOriginalExtension();  // get image extension
            $fileName = time(). '.' . $extension;  // get file name
            $file->move('uploads/our_activities_images', $fileName);  // configuring where image upload
            $data->image = $fileName;
        }

        $data->save();
        return redirect()->back()->with('Status', 'Activity Added Successfully.');
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
        $data = OurActivities::find($id);
        return view('Backend.pages.our_activities.edit', compact('data') );
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
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $data = OurActivities::find($id);
        $data->title = $request->title;
        $data->description = $request->description;

        
        if ($request->hasfile('image')) {  // if isset or get image
            $destination = 'uploads/our_activities_images/'. $data->image; // get destination 

            if (File::exists( $destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');   // get image 
            $extension = $file->getClientOriginalExtension();  // get image extension
            $fileName = time(). '.' . $extension;  // get file name
            $file->move('uploads/our_activities_images', $fileName);  // configuring where image upload
            $data->image = $fileName;
        }

        $data->update();
        return redirect()->back()->with('Status', 'Activity Updated Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = OurActivities::find($id);

        $destination = 'uploads/our_activities_images/'. $data->image; // get destination 
        if (File::exists( $destination)) {
            File::delete($destination);
        }
        $data->delete();
        return redirect()->back()->with('Status', 'Activity Deleted Successfully.');

    }
}
