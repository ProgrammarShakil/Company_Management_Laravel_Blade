@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="">Home</a></li>
                        <li><span>Employee list</span></li>
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
                              <h3 class="text-white">Employee list</h3>
                              {{-- <a class="btn btn-success btn-sm" href="{{ route('admin.employee_list.create') }}"><i class="fa fa-plus" aria-hidden="true"></i></a> --}}
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="text-white">
                                    <th width="3%">Employee Name</th>
                                    <th width="2%">Email</th>
                                    <th width="5%">Status</th>
                                    <th width="5%">Father/Husband</th>
                                    <th width="5%">Guardian's Name</th>
                                    <th width="5%">Mother's Name</th>
                                    <th width="5%">Date Of Birth</th>
                                    <th width="5%">Religion</th>
                                    <th width="5%">Gender</th>
                                    <th width="5%">Birth/NID</th>
                                    <th width="5%">Birth/NID NO</th>
                                    <th width="5%">Mobile NO</th>
                                    <th width="5%">Permanent Address</th>
                                    <th width="5%">Present Address</th>
                                    <th width="5%">Employee_Images</th>
                                    <th width="5%">NID_Front_Side</th>
                                    <th width="5%">NID_Back_Side</th>
                                    <th width="5%">Father/Mother Image</th>
                                    <th width="5%">Father/Mother NID Front</th> 
                                    <th width="5%">Father/Mother NID Back</th>
                                    <th width="5%" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @include('Backend.layout.partials.messages')
                                @foreach ($data as $employee)
                                <tr>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->status == 1 ? 'Approved' : 'Pending'}} </td>
                                    <td>{{ $employee->fathers_name_or_husband_name_value }}</td>
                                    <td>{{ $employee->fathers_name_or_husband_name }}</td>
                                    <td>{{ $employee->mothers_name }}</td>
                                    <td>{{ $employee->date_of_birth }}</td>
                                    <td>{{ $employee->religion }}</td>
                                    <td>{{ $employee->gender }}</td>
                                    <td>{{ $employee->NID_NO_or_Birth_ID_value }}</td>
                                    <td>{{ $employee->NID_NO_or_Birth_ID }}</td>
                                    <td>{{ $employee->mobile_no }}</td>
                                    <td>{{ $employee->permanent_address }}</td>
                                    <td>{{ $employee->present_address }}</td>
                                    <td><img src="{{ asset('uploads/employee_images/' . $employee->image) }}" width="120px"></td>
                                    <td><img src="{{ asset('uploads/employee_images/' . $employee->NID_font_image) }}" width="120px"></td>
                                    <td><img src="{{ asset('uploads/employee_images/' . $employee->NID_back_image) }}" width="120px"></td>
                                    <td><img src="{{ asset('uploads/employee_images/' . $employee->father_or_mother_image) }}" width="120px"></td>
                                    <td><img src="{{ asset('uploads/employee_images/' . $employee->NID_font_father_or_mother_image) }}" width="120px"></td>
                                    <td><img src="{{ asset('uploads/employee_images/' . $employee->NID_back_father_or_mother_image) }}" width="120px"></td>
                                    <td class="d-flex justify-content-center">
                                        
                                            <a href="{{ route('admin.employee_list.edit', $employee->id) }}" class="btn btn-success btn-sm mx-1"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                       
                                            <form action="{{ route('admin.employee_list.destroy', $employee->id) }}" method="POST">
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