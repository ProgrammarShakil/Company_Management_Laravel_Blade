@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="">Home</a></li>
                        <li><span>Logo</span></li>
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
                        <h3 class="text-white">Logo</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr class="text-white">
                                    <th>Title</th>
                                    <th>Logo</th>
                                    <th>Change</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                            <div>
                                @if (session('Status'))
                                <div class="alert alert-success">
                                    {{ session('Status') }}
                                </div>
                                @endif
                            </div>
                                @foreach ($logos as $logo)
                                <tr>
                                    <td>{{ $logo->title }}</td>
                                    <td> <img src="{{ asset('uploads/logo_images/' . $logo->image) }}" width="70px"> </td>
                                    <td>
                                        <a href="{{ route('admin.logo_change.edit', $logo->id) }}" class="btn btn-sm btn-success"><i class="fa fa-edit" aria-hidden="true"></i></a>
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