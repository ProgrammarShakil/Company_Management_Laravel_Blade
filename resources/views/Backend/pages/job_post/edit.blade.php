@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Jobs</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->

    <div class="main-content-inner">
     <!-- row area start -->
        <div class="row justify-content-center">
            <div class="col-md-12 mt-5 mb-3">
                <div class="card bg-dark">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h3 class="text-white">Edit Jobs</h3>
                            <a class="btn btn-success btn-sm" href="{{ route('admin.job_post.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.job_post.update' , $data->id) }}" method="post" class="form" enctype="multipart/form-data">
                            @include('Backend.layout.partials.messages')
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white" for="">Job Title</label>
                                        <input value="{{ $data->job_title }}" class="form-control" type="text" name="job_title" id="" placeholder="Job Title">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="image">Image</label>
                                        <input value="{{ $data->image }}" class="form-control" type="file" name="image" id="image" >
                                        <img src="{{ asset('uploads/job_images/'. $data->image) }}" width="120px">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="">Designation</label>
                                        <input value="{{ $data->designation }}" class="form-control" type="text" name="designation" placeholder="Designation">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="text-white" for="">Job Description</label>
                                        <textarea rows="15" name="description" class="form-control">{{ $data->job_description }}</textarea>
                                    </div>
                                    
                                </div>
                                
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white" for="">Vacancy</label>
                                        <input value="{{ $data->vacancy }}" class="form-control" type="text" name="vacancy" placeholder="Vacancy">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="">Qualification</label>
                                        <input value="{{ $data->qualification }}" class="form-control" type="text" name="qualification" placeholder="Qualification">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="">Experience</label>
                                        <input value="{{  $data->experience  }}" class="form-control" type="text" name="experience" placeholder="Experience">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="">Employment Status</label>
                                        <select name="employment_status" class="form-control py-2">
                                            <option {{ $data->employment_status == 1 ? 'selected' : '' }} value="1" class="form-control text-success">Office Desk</option>
                                            <option {{ $data->employment_status == 0 ? 'selected' : '' }} value="0" class="form-control text-success">Remote</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="">Location</label>
                                        <input value="{{ $data->location }}" class="form-control" type="text" name="location" placeholder="Location">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-white" for="">Deadline</label>
                                        <input value="{{ $data->deadline }}" class="form-control" type="date" name="deadline" placeholder="Deadline">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-white" for="">Age</label>
                                        <input value="{{ $data->age }}" class="form-control" type="text" name="age" placeholder="Age">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-white" for="">Status</label>

                                        <select name="status" class="form-control py-2">
                                            <option {{ $data->status == 1 ? 'selected' : '' }} value="1" class="form-control text-success">Active</option>
                                            <option {{ $data->status == 0 ? 'selected' : '' }} value="0" class="form-control text-danger">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="w-100">
                                        <input class="btn btn-primary btn-block mt-4" type="submit" value="Update">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row area end-->
    </div>

@endsection