@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Activity</span></li>
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
                            <h3 class="text-white">Edit Activity</h3>
                            <a class="btn btn-success btn-sm" href="{{ route('admin.our_activities.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.our_activities.update', $data->id) }}" method="post" class="form">
                            @include('Backend.layout.partials.messages')
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="text-white" for="">Activity Title</label>
                                <input value="{{$data->title}}" class="form-control" type="text" name="title" id="">
                            </div>
                                                        
                            <div class="form-group">
                                <label class="text-white" for="">Image</label>
                                <input class="form-control" type="file" name="image">
                                <img class="pt-3" src="{{ asset('uploads/our_activities_images/' . $data->image) }}" width="120px">
                            </div>

                            <div class="form-group">
                                <label class="text-white" for="">Activity Description</label>
                                <textarea rows="7" class="form-control" type="text" name="description" id="">{{$data->description}}</textarea>
                            </div>

                            <input class="btn btn-success" type="submit" value="Update Activity">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row area end-->
    </div>

@endsection