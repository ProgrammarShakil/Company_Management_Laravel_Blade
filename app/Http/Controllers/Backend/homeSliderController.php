<?php

namespace App\Http\Controllers\Backend;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class homeSliderController extends Controller
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
        $home_sliders = Slider::get();
        return view('Backend.pages.sliders.homesliders.index', [ 'home_sliders' => $home_sliders ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Backend.pages.sliders.homesliders.create');
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
            'priority' => 'integer | unique:sliders,priority'
        ]);

        $home_slider = new Slider();
        $home_slider->title = $request->title;
        $home_slider->button_text = $request->button_text;
        $home_slider->button_link = $request->button_link;
        $home_slider->priority = $request->priority;

        if ($request->hasFile('image')) {  // if isset or get image
            $file = $request->file('image');   // get image 
            $extension = $file->getClientOriginalExtension();  // get image extension
            $fileName = time(). '.' . $extension;  // get file name
            $file->move('uploads/slider_images', $fileName);  // configuring where image upload
            $home_slider->image = $fileName;
        }
        $home_slider->save();
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
        $home_slider = Slider::find($id);

        $destination = 'uploads/slider_images/'. $home_slider->image; // get destination 
        if (File::exists( $destination)) {
            File::delete($destination);
        }
        $home_slider->delete();
        return redirect()->back()->with('Status', 'Slider Deleted Successfully.');
    }
}
