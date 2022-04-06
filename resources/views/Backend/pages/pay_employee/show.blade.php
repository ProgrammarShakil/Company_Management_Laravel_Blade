@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Employee Payment History</span></li>
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
                              <h3 class="text-white">Employee Payment History</h3>
                              <a class="btn btn-success btn-sm" href="{{ route('admin.dashboard') }}">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr class="text-white">
                                    <th width="3%">Employee ID</th>
                                    <th width="3%">Employee Name</th>
                                    <th width="5%">Amount</th>
                                    <th width="5%">Remarks</th>
                                    <th width="5%">Month Name</th>
                                    <th width="5%">Image</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @include('Backend.layout.partials.messages')
                                @foreach ($data as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->users->name }}</td>
                                    <td>{{ $employee->amount }}</td>
                                    <td>{{ $employee->remarks }}</td>
                                    <td>{{ $employee->month_name }}</td>
                                    <td><img src="{{ asset('uploads/employee_images/' . $employee->users->image) }}" width="120px"></td>
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