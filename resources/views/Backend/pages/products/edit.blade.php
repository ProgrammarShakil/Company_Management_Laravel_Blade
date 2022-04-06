@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Product</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->

    <div class="main-content-inner">
     <!-- row area start -->
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5 mb-3">
                <div class="card bg-dark">
                    <div class="card-header">
                        <h3 class="text-white">Edit Product</h3> 
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.products.update', $product->id) }}" method="post" class="form" enctype="multipart/form-data">
                            @include('Backend.layout.partials.messages')
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="text-white" for="">Title</label>
                                <input value="{{$product->title}}" class="form-control" type="text" name="title" id="">
                            </div>                            
                            <div class="form-group">
                                <label class="text-white" for="">Image</label>
                                <input class="form-control" type="file" name="image">
                                <img class="pt-3" src="{{ asset('uploads/product_images/' . $product->image) }}" width="120px">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="">Category</label>
                                <select name="category_id" class="form-control py-2">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="">Description</label>
                                <textarea rows="6" cols="6" class="form-control" name="description" id="" >{{ $product->description }}</textarea>
                            </div>
                            <input class="btn btn-success" type="submit" value="Update Product">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row area end-->
    </div>

@endsection