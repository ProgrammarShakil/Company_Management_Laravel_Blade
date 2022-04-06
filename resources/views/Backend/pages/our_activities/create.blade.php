@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Create Activity</span></li>
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
                        <div class="d-flex justify-content-between">
                              <h3 class="text-white">Create Activities</h3>
                              <a class="btn btn-danger btn-sm" href="{{ route('admin.our_activities.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.our_activities.store') }}" method="post" class="form" enctype="multipart/form-data">
                            @include('Backend.layout.partials.messages')
                            @csrf
                            <div class="form-group">
                                <label class="text-white" for="">Activity Title</label>
                                <input value="{{ old('title') }}" class="form-control" type="text" name="title" id="" placeholder="Activity Title">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="">Activity Image</label>
                                <input value="{{ old('image') }}" class="form-control" type="file" name="image" id="">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="">Activity Description</label>
                                <textarea rows="6" placeholder="Activity Description" name="description" class="form-control">{{ old('description') }}</textarea>
                            </div>
                            <input class="btn btn-success" type="submit" value="Add Activity">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row area end-->
    </div>

@endsection