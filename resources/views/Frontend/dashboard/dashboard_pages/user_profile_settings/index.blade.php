@extends('Frontend.dashboard.dashboard_pages.layout.master')
@section('user-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="{{ route('home') }}">Dashboard</a></li>
                        <li><span>Password Change</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    
    <div class="main-content-inner">
       <div class="row mt-3 px-5">
           <div class="col-md-12 ">
            
            {{-- <h2 class="text-center">Manage Profile</h2> --}}
           </div>
       </div>
        <div class="row p-5 justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark">
                    <h4 class="card-header text-center text-white py-4">
                        Update Password
                    </h4>
                    <div class="card-body">
                        @include('Frontend.dashboard.dashboard_pages.layout.partials.messages')
                        <form action="{{ route('users.password.update') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                      <label for="old_password" class="form-label text-warning">Old Password :</label>
                                      <input type="password" value="" class="form-control" id="old_password" placeholder="Enter Old Password" name="old_password">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                      <label for="password" class="form-label text-success"> New Password :</label>
                                      <input type="password" class="form-control" id="password" placeholder="Enter New Password" name="password">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                      <label for="password_confirmation" class="form-label text-success"> Confirm Password :</label>
                                      <input type="password" class="form-control" id="password_confirmation" placeholder="Enter Confirm Password" name="password_confirmation">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection