@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Pay Employee</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->

    <div class="main-content-inner">
     <!-- row area start -->
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5 mb-3">
                <div class="card bg-dark">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h3 class="text-white">Pay Employee</h3>
                            <a class="btn btn-success btn-sm" href="{{ route('admin.pay_employee.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pay_employee.store', $data->id) }}" method="post" class="form">
                            @include('Backend.layout.partials.messages')
                            @csrf
                            <div class="form-group">
                                <label class="text-white" for=""> Employee ID - Name </label>
                                <select name="user_id" id="" class="form-control py-2">
                                    <option value="{{$data->id}}">{{$data->id}} - {{$data->name}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-white" for=""> Amount (Tk) </label>
                                <input class="form-control" type="text" name="amount">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for=""> Month Name </label>
                                <input class="form-control" type="text" name="month_name">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for=""> Remarks </label>
                                <input class="form-control" type="text" name="remarks">
                            </div>
                            <input class="btn btn-success" type="submit" value="Pay">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row area end-->
    </div>

@endsection