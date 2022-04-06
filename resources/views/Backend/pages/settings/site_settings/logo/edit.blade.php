@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
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
                        <h3 class="text-white">change Logo</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.logo_change.update', $logos->id) }}" method="post" class="form" enctype="multipart/form-data">
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
                            @method('PUT')
                            <div class="form-group">
                                <label class="text-white" for="">Title</label>
                                <input value="{{$logos->title}}" class="form-control" type="text" name="title" id="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Profile Image</label>
                                <input type="file" class="form-control" name="image" id="exampleInputPassword1">
                                <img class="mt-2" src="{{ asset('uploads/logo_images/' . $logos->image) }}" width="70px">
                            </div>
                            <input class="btn btn-success" type="submit" value="Update Logo">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row area end-->
    </div>

@endsection