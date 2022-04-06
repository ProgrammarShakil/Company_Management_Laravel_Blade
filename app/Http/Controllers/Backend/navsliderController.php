<?php

namespace App\Http\Controllers\Backend;


use App\Models\navslider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class navsliderController extends Controller
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
        $nav_sliders = navslider::get();
        return view('Backend.pages.sliders.navsliders.index', [ 'nav_sliders' => $nav_sliders ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Backend.pages.sliders.navsliders.create');
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
            'priority' => 'integer | unique:navsliders,priority'
        ]);

        $nav_sliders = new navslider();
        $nav_sliders->title = $request->title;
        $nav_sliders->button_text = $request->button_text;
        $nav_sliders->button_link = $request->button_link;
        $nav_sliders->priority = $request->priority;

        if ($request->hasFile('image')) {  // if isset or get image
            $file = $request->file('image');   // get image 
            $extension = $file->getClientOriginalExtension();  // get image extension
            $fileName = time(). '.' . $extension;  // get file name
            $file->move('uploads/slider_images', $fileName);  // configuring where image upload
            $nav_sliders->image = $fileName;
        }
        $nav_sliders->save();
        return redirect()->back()->with('Status', 'Slider Added Successfully.');
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
        $nav_sliders = navslider::find($id);

        $destination = 'uploads/slider_images/'. $nav_sliders->image; // get destination 
        if (File::exists( $destination)) {
            File::delete($destination);
        }
        $nav_sliders->delete();
        return redirect()->back()->with('Status', 'Slider Deleted Successfully.');
    }
}
