@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-8">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="">Home</a></li>
                        <li><span>Add Product</span></li>
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
                        <h3 class="text-white">Create Product</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.products.store') }}" method="post" class="form" enctype="multipart/form-data">
                            @include('Backend.layout.partials.messages')
                            @csrf
                            <div class="form-group">
                                <label class="text-white" for="">Title</label>
                                <input value="{{ old('name') }}" class="form-control" type="text" name="title" id="" placeholder="Product Title">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="">Image</label>
                                <input class="form-control" type="file" name="image">
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
                                <label class="text-white" for="">Sub Category</label>
                                <select name="sub_category_id" class="form-control py-2">
                                    @foreach ($sub_categories as $sub_category)
                                        <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="">Description</label>
                                <textarea rows="6" cols="6" value="{{ old('description') }}" class="form-control" type="text" name="description" id="" placeholder="Product Description"></textarea>
                            </div>
                            <input class="btn btn-success" type="submit" value="Add Product">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row area end-->
    </div>

@endsection