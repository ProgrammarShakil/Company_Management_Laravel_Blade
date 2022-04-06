<?php

namespace App\Http\Controllers;

use App\Models\logo;
use App\Models\Footer;
use App\Models\Category;
use App\Models\JobApply;
use App\Models\JobPost;
use App\Models\navslider;
use Illuminate\Http\Request;

class JobApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function JobApplyStore(Request $request)
    {
        // Validation Data
        $request->validate([
            'designation' => 'required',
            'full_name' => 'required',
            'NID_NO' => 'required',
            'Birth_ID_NO' => 'required',
            'Birth_date' => 'required',
            'district' => 'required',
            'age' => 'required',
            'guardian_value' => 'required',
            'guradian_name' => 'required',
            'mother_name' => 'required',
            'mobile_no' => 'required',
            'email' => 'required',
            'nationality' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'religion' => 'required',
            'gender' => 'required',
            'running_designation' => 'required',
            'education' => 'required',
            'experience' => 'required',
            'image' => 'required',
            'signature_image' => 'required',
        ]);

        
        $job_apply = new JobApply();
        $job_apply->job_id = $request->job_id;
        $job_apply->designation = $request->designation;
        $job_apply->full_name = $request->full_name;
        $job_apply->guardian_value = $request->guardian_value;
        $job_apply->fathers_name_or_husband_name = $request->guradian_name;
        $job_apply->mothers_name = $request->mother_name;
        $job_apply->running_designation = $request->running_designation;
        $job_apply->date_of_birth = $request->Birth_date;
        $job_apply->age = $request->age;
        $job_apply->religion = $request->religion;
        $job_apply->education = $request->education;
        $job_apply->nationality = $request->nationality;
        $job_apply->email = $request->email;
        $job_apply->district = $request->district;
        $job_apply->gender = $request->gender;
        $job_apply->NID_NO = $request->NID_NO;
        $job_apply->Birth_ID = $request->Birth_ID_NO;
        $job_apply->mobile_no = $request->mobile_no;
        $job_apply->permanent_address = $request->permanent_address;
        $job_apply->present_address = $request->present_address;

        if ($request->hasFile('image')) {  // if isset or get image
            $file = $request->file('image');   // get image 
            $extension = $file->getClientOriginalExtension();  // get image extension
            $fileName = time(). '.' . $extension;  // get file name
            $file->move('uploads/job_apply_images', $fileName);  // configuring where image upload
            $job_apply->image = $fileName;
        }

        if ($request->hasFile('signature_image')) {  // if isset or get image
            $file2 = $request->file('signature_image');   // get image 
            $extension2 = $file2->getClientOriginalExtension();  // get image extension
            $fileName2 = time(). '.' . $extension2;  // get file name
            $file2->move('uploads/job_apply_images', $fileName2);  // configuring where image upload
            $job_apply->signature_image = $fileName2;
        }


        $job_apply->save();
        return redirect()->back()->with('message', 'Applied Successfully.');
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
    public function showDataWithJobId($id)
    {
        $job_posts = JobPost::find($id);
        $logos = logo::get();
        $nav_sliders = navslider::get();
        $categories = Category::with('sub_categories')->where('status',1)->get();
        $footer = Footer::get();
        return view('job_apply', compact('job_posts','logos','nav_sliders','categories','footer'));
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
        //
    }
}
