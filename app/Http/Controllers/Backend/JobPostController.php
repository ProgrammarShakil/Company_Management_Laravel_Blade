<?php

namespace App\Http\Controllers\Backend;


use App\Models\JobPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class JobPostController extends Controller
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
        $data = JobPost::get();
        return view('Backend.pages.job_post.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.pages.job_post.create');
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
            'job_title' => 'required',
            'image' => 'nullable',
            'designation' => 'required',
            'vacancy' => 'required',
            'qualification' => 'required',
            'status' => 'required',
            'employment_status' => 'required',
            'location' => 'required',
            'deadline' => 'required',
            'description' => 'required',
            'experience' => 'required',
            'age' => 'required',
        ]);

        $data = new JobPost();
        $data->job_title = $request->job_title;
        $data->designation = $request->designation;
        $data->vacancy = $request->vacancy;
        $data->qualification = $request->qualification;
        $data->status = $request->status;
        $data->employment_status = $request->employment_status;
        $data->location = $request->location;
        $data->deadline = $request->deadline;
        $data->job_description = $request->description;
        $data->experience = $request->experience;
        $data->age = $request->age;


        if ($request->hasFile('image')) {  // if isset or get image
            $file = $request->file('image');   // get image 
            $extension = $file->getClientOriginalExtension();  // get image extension
            $fileName = time(). '.' . $extension;  // get file name
            $file->move('uploads/job_images', $fileName);  // configuring where image upload
            $data->image = $fileName;
        }

        $data->save();
        return redirect()->back()->with('Status', 'JOB Added Successfully.');
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
        $data = JobPost::find($id);
        return view('Backend.pages.job_post.edit', compact('data') );
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
            'job_title' => 'required',
            'image' => 'nullable',
            'designation' => 'required',
            'vacancy' => 'required',
            'qualification' => 'required',
            'status' => 'required',
            'employment_status' => 'required',
            'location' => 'required',
            'deadline' => 'required',
            'description' => 'required',
            'experience' => 'required',
            'age' => 'required',
        ]);
        
        $data = JobPost::find($id);
        $data->job_title = $request->job_title;
        $data->designation = $request->designation;
        $data->vacancy = $request->vacancy;
        $data->qualification = $request->qualification;
        $data->status = $request->status;
        $data->employment_status = $request->employment_status;
        $data->location = $request->location;
        $data->deadline = $request->deadline;
        $data->job_description = $request->description;
        $data->experience = $request->experience;
        $data->age = $request->age;

        if ($request->hasFile('image')) {  // if isset or get image
            $file = $request->file('image');   // get image 
            $extension = $file->getClientOriginalExtension();  // get image extension
            $fileName = time(). '.' . $extension;  // get file name
            $file->move('uploads/job_images', $fileName);  // configuring where image upload
            $data->image = $fileName;
        }

        $data->update();
        return redirect()->back()->with('Status', 'JOB Updated Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = JobPost::find($id);

        $destination = 'uploads/job_images/'. $data->image; // get destination 
        if (File::exists( $destination)) {
            File::delete($destination);
        }
        $data->delete();
        return redirect()->back()->with('Status', 'Job Deleted Successfully.');
    }
}
