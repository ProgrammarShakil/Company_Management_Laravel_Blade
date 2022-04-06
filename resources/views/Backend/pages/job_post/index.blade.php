@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="">Home</a></li>
                        <li><span>All Jobs</span></li>
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
                              <h3 class="text-white">All Jobs</h3>
                              <a class="btn btn-success btn-sm" href="{{ route('admin.job_post.create') }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="text-white">
                                    <th width="">Job Title</th>
                                    <th width="">Designation</th>
                                    <th width="">Status</th>
                                    <th width="">Vacancy</th>
                                    <th width="">Deadline</th>
                                    <th width="">Qualification</th>
                                    {{-- <th width="">Location</th> --}}
                                    <th width="">Experience</th>
                                    {{-- <th>JOb Description</th> --}}
                                    <th width="">Age</th>
                                    <th width="">Employment Status</th>
                                    <th width="">Image</th>
                                    <th width="" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @include('Backend.layout.partials.messages')
                                @foreach ($data as $job)
                                <tr>
                                    <td>{{ $job->job_title }}</td>
                                    <td>{{ $job->designation }}</td>
                                    <td>
                                        @if ($job->status == '1')
                                        <span class="text-success">Active</span>
                                        @elseif ($job->status == '0')
                                        <span class="text-warning">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{ $job->vacancy }}</td>
                                    <td>{{ $job->deadline }}</td>
                                    <td>{{ $job->qualification }}</td>
                                    {{-- <td>{{ $job->location }}</td> --}}
                                    <td>{{ $job->experience }}</td>
                                    {{-- <td style="width:200px">{{ $job->job_description }}</td> --}}
                                    <td>{{ $job->age }}</td>
                                    <td>{{ $job->employment_status == 1 ? 'Office Desk' : 'Remote'}}</td>
                                    <td> <img src="{{ asset('uploads/job_images/'. $job->image) }}" alt=""></td>
                                    <td class="d-flex justify-content-center">
                                        
                                            <a href="{{ route('admin.job_post.edit', $job->id) }}" class="btn btn-success btn-sm mx-1"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                       
                                            <form action="{{ route('admin.job_post.destroy', $job->id) }}" method="POST">
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