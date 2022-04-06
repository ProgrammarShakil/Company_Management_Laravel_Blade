<?php

namespace App\Http\Controllers\Backend;

use App\Models\Client;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
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
        $categories = Category::get();
        return view('Backend.pages.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.pages.categories.create');
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
            'name' => 'required | unique:categories,name',
            'status' => 'required',
        ]);

        $admin_id = Auth::guard('admin')->user()->id;

        $category = new Category();
        $category->name = $request->name;
        $category->admin_id = $admin_id;
        $category->slug = strtolower(str_replace(' ','-',$request->name));
        $category->status = $request->status;

        $category->save();
        return redirect()->back()->with('Status', 'Category Added Successfully.');
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
        $categories = Category::find($id);
        return view('Backend.pages.categories.edit', compact('categories') );
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
                'name' => 'required | unique:categories,name,' . $id . ',id',
                'status' => 'required',
            ]);

            $admin_id = Auth::guard('admin')->user()->id;
            
            $category = Category::find($id);
            $category->name = $request->name;
            $category->admin_id = $admin_id;
            $category->slug = strtolower(str_replace(' ','-',$request->name));
            $category->status = $request->status;

            $category->update();
            return redirect()->back()->with('Status', 'Category Updated Successfully.');

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
            $category = Category::find($id);
    
            $category->delete();
            return redirect()->back()->with('Status', 'Category Deleted Successfully.');

        }catch(Exception $e){
             return redirect()->back()->with('Status', $e->getMessage());
        }
    }
}
