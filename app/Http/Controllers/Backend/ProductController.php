<?php

namespace App\Http\Controllers\Backend;


use App\Models\Product;
use App\Models\navslider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
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
        $products = Product::get();
        
        return view('Backend.pages.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::get();
      $sub_categories = SubCategory::get();
      return view('Backend.pages.products.create',compact('categories','sub_categories'));
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
            'description' => 'required',
        ]);

        $admin_id = Auth::guard('admin')->user()->id;
        
        $product = new Product();
        $product->title = $request->title;
        $product->admin_id = $admin_id;
        $product->slug = strtolower(str_replace(' ', '-',$request->title));
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->description = $request->description;

        if ($request->hasFile('image')) {  // if isset or get image
            $file = $request->file('image');   // get image 
            $extension = $file->getClientOriginalExtension();  // get image extension
            $fileName = time(). '.' . $extension;  // get file name
            $file->move('uploads/product_images', $fileName);  // configuring where image upload
            $product->image = $fileName;
        }
        $product->save();
        return redirect()->back()->with('Status', 'Product Created Successfully.');
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
        $product = Product::find($id);
        $categories = Category::get();
        return view('Backend.pages.products.edit', compact('product','categories') );
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
        $product = Product::find($id);

        $admin_id = Auth::guard('admin')->user()->id;
        
        $product->title = $request->title;
        $product->admin_id = $admin_id;
        $product->slug = strtolower(str_replace(' ', '-',$request->title));
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->description = $request->description;

        if ($request->hasfile('image')) {  // if isset or get image
            $destination = 'uploads/product_images/'. $product->image; // get destination 

            if (File::exists( $destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');   // get image 
            $extension = $file->getClientOriginalExtension();  // get image extension
            $fileName = time(). '.' . $extension;  // get file name
            $file->move('uploads/product_images', $fileName);  // configuring where image upload
            $product->image = $fileName;
        }
        $product->update();
        return redirect()->back()->with('Status', 'Product Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $destination = 'uploads/product_images/'. $product->image; // get destination 
        if (File::exists( $destination)) {
            File::delete($destination);
        }
        $product->delete();
        return redirect()->back()->with('Status', 'Product Deleted Successfully.');
    }
}
