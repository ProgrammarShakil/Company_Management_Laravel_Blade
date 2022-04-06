<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Exception;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends Controller
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
        $sub_categories = SubCategory::with('category')->get();
        return view('Backend.pages.sub_categories.index',compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status',1)->get();
        return view('Backend.pages.sub_categories.create',compact('categories'));
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
            'name' => 'required | unique:sub_categories,name',
            'status' => 'required',
        ]);

        $admin_id = Auth::guard('admin')->user()->id;

        $sub_category = new SubCategory();
        $sub_category->name = $request->name;
        $sub_category->admin_id = $admin_id;
        $sub_category->category_id = $request->category_id;
        $sub_category->slug = strtolower(str_replace(' ','-',$request->name));
        $sub_category->status = $request->status;

        $sub_category->save();
        return redirect()->back()->with('Status', 'Sub Category Added Successfully.');
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
        $sub_categories = SubCategory::find($id);
        return view('Backend.pages.sub_categories.edit', compact('sub_categories') );
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
        try{

            // Validation Data
            $request->validate([
                'name' => 'required | unique:sub_categories,name,' . $id . ',id',
                'status' => 'required',
            ]);

            $admin_id = Auth::guard('admin')->user()->id;
            
            $category = Category::find($id);
            $category->name = $request->name;
            $category->admin_id = $admin_id;
            $category->slug = strtolower(str_replace(' ','-',$request->name));
            $category->status = $request->status;

            $category->update();
            return redirect()->back()->with('Status', 'Sub Category Updated Successfully.');

        }catch (Exception $e){

            return redirect()->back()->with('Status', $e->getMessage());

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        try{
            $category = SubCategory::find($id);
    
            $category->delete();
            return redirect()->back()->with('Status', 'Sub Category Deleted Successfully.');

        }catch(Exception $e){
             return redirect()->back()->with('Status', $e->getMessage());
        }
    }
}
