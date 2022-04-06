@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li><span>Profie Details</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    
    <div class="main-content-inner">
       <div class="row mt-3 px-5">
           <div class="col-md-12 ">
           </div>
       </div>
        <div class="row p-5 justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark">
                    <h4 class="card-header text-center text-white py-4">
                        Update Profile Details
                    </h4>
                    <form action="{{ route('admin.profiledetails.update') }}" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            @include('Backend.layout.partials.messages')
                            @method("PUT")
                            @csrf
                            <div class="row">
                                
                                <div class="col-md-12 text-center">
                                    @if (!empty($admin->profile_photo_path))
                                    {{-- <img  src="{{asset($admin->profile_photo_path)}}" class="rounded-circle " style="width:100px;height:100px"> --}}
                                    @endif
                                    {{-- <div class="form-group">
                                        <label for="image" class="text-white pt-3">Profile Picture</label>
                                        <input type="file" class="form-control-file" id="image" name="image">
                                    </div> --}}
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                      <label for="name" class="form-label text-success"> Name :</label>
                                      <input type="text" class="form-control" id="name" value="{{$admin->name}}" name="name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                      <label for="email" class="form-label text-success"> Email :</label>
                                      <input type="email" class="form-control" id="email" value="{{$admin->email}}" name="email">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection