@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="">Home</a></li>
                        <li><span>Sub Categories</span></li>
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
                        <h3 class="text-white">Sub Categories</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr class="text-white">
                                    <th>SubCategory</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @include('Backend.layout.partials.messages')
                                @foreach ($sub_categories as $sub_category)
                                <tr>
                                    <td><span class="text-success">{{ $sub_category->category->name }}</span> > <span class="text-warning">{{ $sub_category->name }}</span></td>
                                    <td>{{ $sub_category->slug }}</td>
                                    <td>
                                        @if ($sub_category->status == '1')
                                            <span class="text-success">Active</span>
                                        @elseif ($sub_category->status == '0')
                                            <span class="text-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        
                                            <a href="{{ route('admin.sub_categories.edit', $sub_category->id) }}" class="btn btn-success btn-sm mx-1"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                       
                                            <form action="{{ route('admin.sub_categories.destroy', $sub_category->id) }}" method="POST">
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