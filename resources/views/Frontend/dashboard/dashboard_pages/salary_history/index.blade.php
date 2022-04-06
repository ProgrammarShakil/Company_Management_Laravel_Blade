@extends('Frontend.dashboard.dashboard_pages.layout.master')
@section('user-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="{{ route('home') }}">Dashboard</a></li>
                        <li><span>Salary History</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    
    <div class="main-content-inner">
       <div class="row mt-3 px-5">
       </div>
        <div class="row p-5 justify-content-center">
            <div class="col-md-12">
                <div class="card bg-dark">
                    <div class="card-body">
                        @include('Frontend.dashboard.dashboard_pages.layout.partials.messages')
                        <div>
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <table class="table">
                                        <h4 class="pb-5 text-center text-white">
                                            Salary History
                                        </h4>
                                        <thead>
                                            <tr class="text-white">
                                                <th width="3%">Employee ID</th>
                                                <th width="3%">Employee Name</th>
                                                <th width="5%">Amount</th>
                                                <th width="5%">Remarks</th>
                                                <th width="5%">Month Name</th>
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
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection