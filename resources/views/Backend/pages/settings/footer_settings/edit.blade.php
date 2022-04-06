@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Footer</span></li>
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
                        <div class="d-flex justify-content-between">
                            <h3 class="text-white">Edit Footer</h3>
                            <a class="btn btn-success btn-sm" href="{{ route('admin.footer_settings.index') }}">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.footer_settings.update', $data->id) }}" method="post" class="form">
                            @include('Backend.layout.partials.messages')
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="text-white" for="">Branch Name</label>
                                <input value="{{$data->branch_name}}" class="form-control" type="text" name="name" id="">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="">Branch Address</label>
                                <textarea rows="7" class="form-control" type="text" name="description" id="">{{$data->address}}</textarea>
                            </div>
                            <div class="form-group">
                                <select name="status" class="form-control py-2">
                                    <option {{ $data->status == '1' ? 'selected': ''}}  value="1" class="form-control text-success">Active</option>
                                    <option {{ $data->status == '0' ?  'selected': ''}}  value="0" class="form-control text-danger">Inactive</option>
                                </select>
                            </div>
                            <input class="btn btn-success" type="submit" value="Update Branch">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row area end-->
    </div>

@endsection