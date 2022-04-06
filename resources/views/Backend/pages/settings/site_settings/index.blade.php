@extends('Backend.layout.master')

@section('admin-content')

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Site Settings</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->

    <div class="main-content-inner">
     <!-- row area start -->
        <div class="row ">
            <div class="col-md-2 mt-5 mb-3">
                <a href="{{ route('admin.logo_change.index') }}" class="text-white">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <div class="mx-auto text-center" style="font-size: 30px"><i class="fa fa-adn text-center" aria-hidden="true"></i></div>
                            <div>Change Logo</div> 
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- row area end-->
    </div>

@endsection