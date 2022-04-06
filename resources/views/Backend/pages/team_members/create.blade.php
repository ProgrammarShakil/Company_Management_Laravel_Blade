@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Add Members</span></li>
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
                        <h3 class="text-white">Add Members</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.team_members.store') }}" method="post" class="form" enctype="multipart/form-data">
                            @include('Backend.layout.partials.messages')
                            @csrf
                            <div class="form-group">
                                <label class="text-white" for="">Name</label>
                                <input value="{{ old('name') }}" class="form-control" type="text" name="name" id="" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="">Image</label>
                                <input class="form-control" type="file" name="image" id="" >
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="">Designation</label>
                                <input value="{{ old('designation') }}" class="form-control" type="text" name="designation" id=""  placeholder="Designation">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="facebook" value="facebook-f">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="">Facebook Link</label>
                                <input class="form-control" type="text" name="facebook_link" id="" placeholder="https://facebook.com">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="twitter" value="twitter">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="">Twitter Link</label>
                                <input class="form-control" type="text" name="twitter_link" id="" placeholder="https://twitter.com">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="instagram" value="instagram">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="">Instagram Link</label>
                                <input class="form-control" type="text" name="instagram_link" id="" placeholder="https://instagram.com">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="youtube" value="youtube">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="">Youtube Link</label>
                                <input class="form-control" type="text" name="youtube_link" id="" placeholder="https://youtube.com">
                            </div>
                            <input class="btn btn-success" type="submit" value="Add Member">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row area end-->
    </div>

@endsection