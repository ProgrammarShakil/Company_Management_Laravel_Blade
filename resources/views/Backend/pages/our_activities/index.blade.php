@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="">Home</a></li>
                        <li><span>Our Activity</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->

    <div class="main-content-inner">
     <!-- row area start -->
        <div class="row justify-content-center">
            <div class="col-md-10 mt-5 mb-3">
                <div class="card bg-dark">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                              <h3 class="text-white">Our Activity</h3>
                              <a class="btn btn-success btn-sm" href="{{ route('admin.our_activities.create') }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr class="text-white">
                                    <th width="10%">Branch Name</th>
                                    <th width="50%">Description</th>
                                    <th width="30%">Images</th>
                                    <th width="10%" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @include('Backend.layout.partials.messages')
                                @foreach ($data as $activity)
                                <tr>
                                    <td>{{ $activity->title }}</td>
                                    <td>{{ $activity->description }}</td>
                                    <td><img src="{{ asset('uploads/our_activities_images/' . $activity->image) }}" width="120px"></td>
                                    <td class="d-flex justify-content-center">
                                        
                                            <a href="{{ route('admin.our_activities.edit', $activity->id) }}" class="btn btn-success btn-sm mx-1"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                       
                                            <form action="{{ route('admin.our_activities.destroy', $activity->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm mx-1"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- row area end-->
    </div>

@endsection