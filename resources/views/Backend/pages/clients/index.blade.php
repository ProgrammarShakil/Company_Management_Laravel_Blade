@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="">Home</a></li>
                        <li><span>Clients</span></li>
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
                        <h3 class="text-white">Clients</h3>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="text-white">
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Images</th>
                                    <th>Facebook Link</th>
                                    <th>Youtube Link</th>
                                    <th>Twitter Link</th>
                                    <th>Instagram Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-white">
                                @include('Backend.layout.partials.messages')
                                @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->designation }}</td>
                                    <td> <img src="{{ asset('uploads/client_images/' . $client->image) }}" width="100px"> </td>
                                    <td>{{ $client->facebook_link }}</td>
                                    <td>{{ $client->youtube_link }}</td>
                                    <td>{{ $client->twitter_link }}</td>
                                    <td>{{ $client->instagram_link }}</td>
                                    <td>
                                        <form action="{{ route('admin.clients.destroy', $client->id) }}" method="POST">
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