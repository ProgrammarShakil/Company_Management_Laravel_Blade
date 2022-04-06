@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Job Applier Details</span></li>
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
                            <h3 class="text-white">Job Applier Details</h3>
                            <a class="btn btn-success btn-sm" href="{{ route('admin.job_post.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.job_post.update' , $data->id) }}" method="post" class="form" enctype="multipart/form-data">
                            @include('Backend.layout.partials.messages')
                            @csrf
                            @method('PUT')
                            
                            <div class="row justify-content-center">
                                <div class="col-md-12 ">
                                    <div class="form-group text-center">
                                        <h4 class="text-white mb-5" for="image"> Applier Image</h4>
                                        {{-- <input value="{{ $data->image }}" class="form-control" type="file" name="image" id="image" > --}}
                                        <div><img style="border:1px solid #ccc;border-radius: 50%; height:200px; width:200px" class="img-fluid" src="{{ asset('uploads/job_apply_images/'. $data->image) }}" width="150px"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white" for="">JOB ID</label>
                                        <input disabled value="{{ $data->job_id }}" class="form-control" type="text" name="job_title" id="" placeholder="Job Title">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="">Applied Designation</label>
                                        <input disabled value="{{ $data->designation }}" class="form-control" type="text" name="designation" placeholder="Designation">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="">National ID</label>
                                        <input disabled value="{{ $data->NID_NO }}" class="form-control" type="text" name="designation" placeholder="Designation">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="">Birth ID</label>
                                        <input disabled value="{{ $data->Birth_ID }}" class="form-control" type="text" name="designation" placeholder="Designation">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="">Mobile No</label>
                                        <input disabled value="{{ $data->mobile_no }}" class="form-control" type="text" name="designation" placeholder="Designation">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="">Applier Name</label>
                                        <input disabled value="{{ $data->full_name }}" class="form-control" type="text" name="job_title" id="" placeholder="Job Title">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="text-white" for="">Father/Husband Name</label>
                                        <input disabled value="{{ $data->guardian_value }} : {{ $data->fathers_name_or_husband_name }}" class="form-control" type="text" name="qualification" placeholder="Qualification">
                                    </div>
                                    
                                </div>
                                
                                
                                <div class="col-md-6">
                                    
                                    <div class="form-group">
                                        <label class="text-white" for="">Mother Name</label>
                                        <input disabled value="{{  $data->mothers_name  }}" class="form-control" type="text" name="experience" placeholder="Experience">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="">Birth Date</label>
                                        <input disabled value="{{  $data->date_of_birth  }}" class="form-control" type="text" name="experience" placeholder="Experience">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="">Nationality</label>
                                        <input disabled value="{{ $data->nationality }}" class="form-control" type="text" name="location" placeholder="Location">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="">Running Designation</label>
                                        <input disabled value="{{ $data->running_designation }}" class="form-control" type="text" name="job_title" id="" placeholder="Job Title">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-white" for="">Deadline</label>
                                        <input disabled value="{{ $data->deadline }}" class="form-control" type="date" name="deadline" placeholder="Deadline">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="text-white" for="">Age</label>
                                        <input disabled value="{{ $data->age }}" class="form-control" type="text" name="age" placeholder="Age">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="text-white" for="">Present Address</label>
                                        <input disabled value="{{ $data->present_address }} "" class="form-control" type="text" name="qualification" placeholder="Qualification">
                                    </div>
                                    {{-- <div class="form-group">
                                        <label class="text-white" for="">Status</label>

                                        <select name="status" class="form-control py-2">
                                            <option {{ $data->status == 1 ? 'selected' : '' }} value="1" class="form-control text-success">Active</option>
                                            <option {{ $data->status == 0 ? 'selected' : '' }} value="0" class="form-control text-danger">Inactive</option>
                                        </select>
                                     </div> --}}
                                     
                                     {{-- <div class="w-100">
                                         <input class="btn btn-primary btn-block mt-4" type="submit" value="Update">
                                        </div> --}}
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