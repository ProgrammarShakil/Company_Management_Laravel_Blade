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
                                    <th width="3%">Employee ID</th>
                                    <th width="3%">Employee Name</th>
                                    <th width="5%">Status</th>
                                    <th width="5%">Mobile NO</th>
                                    <th width="5%">Image</th>
                                    <th width="5%">Payment</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @include('Backend.layout.partials.messages')
                                @foreach ($data as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>
                                        @if ($employee->status == 1)
                                            <span class="text-success"> Approved </span>
                                        @else
                                            <span class="text-danger"> Pending </span>
                                        @endif
                                     </td>
                                    <td>{{ $employee->mobile_no }}</td>
                                    <td><img src="{{ asset('uploads/employee_images/' . $employee->image) }}" width="80px"></td>
                                    <td>
                                        
                                            <a href="{{ route('admin.pay_employee.edit', $employee->id) }}" class="btn btn-success btn-sm mx-1">Pay</a>
                                       
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