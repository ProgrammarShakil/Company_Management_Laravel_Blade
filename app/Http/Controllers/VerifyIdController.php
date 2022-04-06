<?php

namespace App\Http\Controllers;

use App\Models\logo;
use App\Models\User;
use App\Models\Footer;
use App\Models\Category;
use App\Models\navslider;
use Illuminate\Http\Request;

class VerifyIdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos = logo::get();
        $nav_sliders = navslider::get();
        $categories = Category::with('sub_categories')->where('status',1)->get();
        $footer = Footer::get();

        $search = request()->query('search');

        if ($search) {
            $employee_data = User::where('id', 'LIKE', "%{$search}%")->get();
            return view('verify_id_searched_data',compact('employee_data','logos','nav_sliders','categories','footer'));
        }
        return view('verify_id',compact('logos','nav_sliders','categories','footer'));
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
