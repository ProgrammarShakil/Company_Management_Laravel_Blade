@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Employee Edit</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->

    <div class="main-content-inner">
     <!-- row area start -->
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5 mb-3">
                <div class="card bg-dark">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h3 class="text-white">Approval Employee</h3>
                            <a class="btn btn-success btn-sm" href="{{ route('admin.employee_list.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.employee_list.update', $employee->id) }}" method="post" class="form">
                            @include('Backend.layout.partials.messages')
                            @csrf
                            @method('PUT')

                            {{-- <div class="form-group">
                                <label class="text-white" for="">Employee Name</label>
                                <input value="{{$employee->status}}" class="form-control" type="text" name="title" id="">
                            </div> --}}

                            <div class="form-group">
                                <label class="text-white" for="">Employee Status</label>
                                <select name="status" id="" class="form-control py-2">
                                    <option {{$employee->status == 1 ? 'selected' : ''}} value="1" class="form-control">Approve</option>
                                    <option {{$employee->status == 0 ? 'selected' : ''}} value="0" class="form-control">Pending</option>
                                </select>
                            </div>

                            <input class="btn btn-success" type="submit" value="Approve Employee">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row area end-->
    </div>

@endsection