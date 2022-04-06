@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="">Home</a></li>
                        <li><span>Nav Sliders</span></li>
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
                        <h3 class="text-white">Nav Sliders</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr class="text-white">
                                    <th>Title</th>
                                    <th>Button Text</th>
                                    <th>Button Link</th>
                                    <th>Priority</th>
                                    <th>Images</th>
                                    <th>Action</th>
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
                                @foreach ($nav_sliders as $nav_slider)
                                <tr>
                                    <td>{{ $nav_slider->title }}</td>
                                    <td>{{ $nav_slider->button_text }}</td>
                                    <td>{{ $nav_slider->button_link }}</td>
                                    <td>{{ $nav_slider->priority }}</td>
                                    <td> <img src="{{ asset('uploads/slider_images/' . $nav_slider->image) }}" width="40px"> </td>
                                    <td>
                                        <form action="{{ route('admin.nav_sliders.destroy', $nav_slider->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
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