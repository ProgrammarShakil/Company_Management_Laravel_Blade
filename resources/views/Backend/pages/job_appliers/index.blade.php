@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="">Home</a></li>
                        <li><span> Job Appliers list</span></li>
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
                              <h3 class="text-white">Job Appliers list</h3>
                              <a class="btn btn-success btn-sm" href="{{ route('admin.dashboard') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="text-white">
                                    <th width="3%">JOB ID</th>
                                    <th width="3%">Applier Name</th>
                                    <th width="2%">Designation</th>
                                    {{-- <th width="5%">Father/Husband</th>
                                    <th width="5%">Guardian's Name</th>
                                    <th width="5%">Mother's Name</th> --}}
                                    {{-- <th width="5%">Date Of Birth</th> --}}
                                    <th width="5%">Age</th>
                                    <th width="5%">Religion</th>
                                    <th width="5%">Education</th>
                                    {{-- <th width="5%">Nationality</th> --}}
                                    <th width="5%">Email</th>
                                    {{-- <th width="5%">District</th> --}}
                                    <th width="5%">Gender</th>
                                    {{-- <th width="5%">NID NO</th> --}}
                                    {{-- <th width="5%">Birth NO</th> --}}
                                    {{-- <th width="5%">Mobile NO</th>
                                    <th width="5%">Permanent Address</th>
                                    <th width="5%">Present Address</th> --}}
                                    {{-- <th width="5%">Applier Images</th> --}}
                                    {{-- <th width="5%">Applier Singature Images</th> --}}
                                    <th width="5%" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @include('Backend.layout.partials.messages')
                                @foreach ($data as $job_appliers)
                                <tr>
                                    <td>{{ $job_appliers->job_id }}</td>
                                    <td>{{ $job_appliers->full_name }}</td>
                                    <td>{{ $job_appliers->designation}} </td>
                                    {{-- <td>{{ $job_appliers->guardian_value }}</td> --}}
                                    {{-- <td>{{ $job_appliers->fathers_name_or_husband_name }}</td> --}}
                                    {{-- <td>{{ $job_appliers->mothers_name }}</td> --}}
                                    {{-- <td>{{ $job_appliers->date_of_birth }}</td> --}}
                                    <td>{{ $job_appliers->age }}</td>
                                    <td>{{ $job_appliers->religion }}</td>
                                    <td>{{ $job_appliers->education }}</td>
                                    {{-- <td>{{ $job_appliers->nationality }}</td> --}}
                                    <td>{{ $job_appliers->email }}</td>
                                    {{-- <td>{{ $job_appliers->district }}</td> --}}
                                    <td>{{ $job_appliers->gender }}</td>
                                    {{-- <td>{{ $job_appliers->NID_NO }}</td> --}}
                                    {{-- <td>{{ $job_appliers->Birth_ID }}</td> --}}
                                    {{-- <td>{{ $job_appliers->mobile_no }}</td> --}}
                                    {{-- <td>{{ $job_appliers->permanent_address }}</td> --}}
                                    {{-- <td>{{ $job_appliers->present_address }}</td> --}}
                                    {{-- <td><img src="{{ asset('uploads/job_apply_images/' . $job_appliers->image) }}" width="120px"></td> --}}
                                    {{-- <td><img src="{{ asset('uploads/job_apply_images/' . $job_appliers->signature_image) }}" width="120px"></td> --}}
                                    <td class="d-flex justify-content-center">
                                        
                                            <a href="{{ route('admin.job_applied_candidates.edit', $job_appliers->id) }}" class="btn btn-success btn-sm mx-1">Details</a>
                                       
                                            <form action="{{ route('admin.job_applied_candidates.destroy', $job_appliers->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick=" return confirm('Are You Sure ?')" class="btn btn-danger btn-sm mx-1"><i class="fa fa-trash" aria-hidden="true"></i></button>
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