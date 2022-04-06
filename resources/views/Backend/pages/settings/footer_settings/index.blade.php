@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="">Home</a></li>
                        <li><span>Footer Settings</span></li>
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
                              <h3 class="text-white">Footer Settings</h3>
                              <a class="btn btn-success btn-sm" href="{{ route('admin.footer_settings.create') }}">Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr class="text-white">
                                    <th width="20%">Branch Name</th>
                                    <th width="60%">Address</th>
                                    <th width="10%">Status</th>
                                    <th width="10%" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @include('Backend.layout.partials.messages')
                                @foreach ($data as $footer)
                                <tr>
                                    <td>{{ $footer->branch_name }}</td>
                                    <td>{{ $footer->address }}</td>
                                    <td>
                                        @if ($footer->status == '1')
                                            <span class="text-success">Active</span>
                                        @elseif ($footer->status == '0')
                                            <span class="text-warning">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        
                                            <a href="{{ route('admin.footer_settings.edit', $footer->id) }}" class="btn btn-success btn-sm mx-1"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                       
                                            <form action="{{ route('admin.footer_settings.destroy', $footer->id) }}" method="POST">
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