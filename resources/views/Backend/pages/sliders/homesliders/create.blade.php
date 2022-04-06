@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Sliders</span></li>
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
                        <h3 class="text-white">Add Home Sliders</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.sliders.store') }}" method="post" class="form" enctype="multipart/form-data">
                            <div>
                                @if (session('Status'))
                                <div class="alert alert-success">
                                    {{ session('Status') }}
                                </div>
                                @endif
                            </div>
                            <div>
                                @if($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-warning">{{ $error }}</div>
                                    @endforeach
                                @endif
                            </div>
                            @csrf
                            <div class="form-group">
                                <label class="text-white" for="">Title</label>
                                <input value="{{ old('title') }}" class="form-control" type="text" name="title" id="" placeholder="Slider Title">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="">Image</label>
                                <input class="form-control" type="file" name="image" id="" >
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="">Button Text</label>
                                <input value="{{ old('button_text') }}" class="form-control" type="text" name="button_text" id="" placeholder="Button Text">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="">Button Link</label>
                                <input value="{{ old('button_link') }}" class="form-control" type="text" name="button_link" id="" placeholder="Button Link">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="">Priority</label>
                                <input value="{{ old('priority') }}" class="form-control" type="text" name="priority" id="" placeholder="Priority">
                            </div>
                            <input class="btn btn-success" type="submit" value="Add Slide">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row area end-->
    </div>

@endsection