<?php

namespace App\Http\Controllers;

use App\Models\logo;
use App\Models\Footer;
use App\Models\Category;
use App\Models\JobPost;
use App\Models\navslider;
use Illuminate\Http\Request;

class JobOfferController extends Controller
{
    public function index(){
        $logos = logo::get();
        $nav_sliders = navslider::get();
        $categories = Category::with('sub_categories')->where('status',1)->get();
        $footer = Footer::get();
        $job_post = JobPost::where('status','1')->get();
        return view('job_offer', compact('job_post','logos','nav_sliders','categories','footer'));
    }

    public function show($id)
    {
       $job_details  = JobPost::where('id', $id)->get();
        $nav_sliders = navslider::get();
        $categories = Category::with('sub_categories')->where('status',1)->get();
        $footer = Footer::get();
        $logos = logo::get();
       return view('job_offer_details',compact('job_details','logos','nav_sliders','categories','footer'));
    }
}

