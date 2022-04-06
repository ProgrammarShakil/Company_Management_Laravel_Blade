@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Add Clients</span></li>
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
                        <h3 class="text-white">Create Category</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.categories.store') }}" method="post" class="form">
                            @include('Backend.layout.partials.messages')
                            @csrf
                            <div class="form-group">
                                <label class="text-white" for="">Name</label>
                                <input value="{{ old('name') }}" class="form-control" type="text" name="name" id="" placeholder="Category Name">
                            </div>
                            <div class="form-group">
                                <select name="status" class="form-control py-2">
                                    <option selected value="1" class="form-control text-success">Active</option>
                                    <option value="0" class="form-control text-danger">Inactive</option>
                                </select>
                            </div>
                            <input class="btn btn-success" type="submit" value="Add Category">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row area end-->
    </div>

@endsection