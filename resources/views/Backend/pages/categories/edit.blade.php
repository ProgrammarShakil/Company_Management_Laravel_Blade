@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Categories</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->

    <div class="main-content-inner">
     <!-- row area start -->
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5 mb-3">
                <div class="card bg-dark">
                    <div class="card-header">
                        <h3 class="text-white">Edit Category</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.categories.update', $categories->id) }}" method="post" class="form">
                            @include('Backend.layout.partials.messages')
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="text-white" for="">Title</label>
                                <input value="{{$categories->name}}" class="form-control" type="text" name="name" id="">
                            </div>
                            <div class="form-group">
                                <select name="status" class="form-control py-2">
                                    <option {{ $categories->status == '1' ? 'selected': ''}}  value="1" class="form-control text-success">Active</option>
                                    <option {{ $categories->status == '0' ?  'selected': ''}}  value="0" class="form-control text-danger">Inactive</option>
                                </select>
                            </div>
                            <input class="btn btn-success" type="submit" value="Update Category">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row area end-->
    </div>

@endsection