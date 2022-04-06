<?php

namespace App\Http\Controllers;

use App\Models\logo;
use App\Models\Team;
use App\Models\Client;
use App\Models\Footer;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\navslider;
use App\Models\OurActivities;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_sliders = Slider::get();
        $logos = logo::get();
        $nav_sliders = navslider::get();
        $team_members = Team::get();
        $clients = Client::get();
        $products = Product::get();
        $categories = Category::with('sub_categories')->where('status',1)->get();
        $footer = Footer::get();
        $our_activities = OurActivities::get();

        // return ($categories);
        // $sub_categories = SubCategory::with('category')->where('status',1)->get();
        
        return view('welcome', compact( 'our_activities', 'footer','categories','home_sliders','logos','nav_sliders','team_members','clients','products'));
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
        //
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
        //
    }

}
