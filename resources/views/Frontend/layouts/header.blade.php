<style>
        @media screen and ( max-width: 992px){

        .dropbtn{
             margin-right: 161px;
        }

        .dropdown:hover  .dropdown-content a {
            background-color: #ffffff;
            color: #120546;
            text-decoration: none;
            
            border-bottom: 2px solid rgb(214, 211, 211);
            margin-right: -75px;
        }
        .dropdown:hover  .dropdown-content {
            box-shadow: 0px 8px 16px 0px rgba(255, 255, 255, 0.2);
            
        }

    }

    .dropbtn {
    background-color: #fff;
    color: 000;
    padding: 16px;
    font-size: 16px;
    border: none;
    font-family: 'PT Sans Narrow', sans-serif;
    text-transform: uppercase;
    margin-top: 1px !important;
    }

    .dropbtn:focus{
        outline: none;
    }

    .dropdown {
    position: relative;
    display: inline-block;
    }

    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffffff;
    min-width: 240px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    font-family: 'PT Sans Narrow', sans-serif;
    }

    .dropdown-content a {
    color: rgb(255, 255, 255);
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-family: 'PT Sans Narrow', sans-serif;
    text-transform: uppercase;
    border-bottom: 1px solid #ffff;
    }

    .dropdown-content a:hover {background-color: #ffffff; color: rgb(10, 10, 10); text-decoration: underline;}

    /* .dropdown:hover .dropdown-content {display: block;  margin-left: -75px; background-color: #ffffff; color:rgb(0, 0, 0)} */
    .dropdown:hover .dropdown-content {display: block;  margin-left: -75px; background-color: #120546; color:#fff}



</style>
  
  <button type="button" id="noticemodal" style="display:none;" class="" data-toggle="modal"
        data-target="#exampleModal"></button>

    <header class="header-area">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-12 col-md-9">
                    <div class="main-menu">
                        <!-- Mobile Header -->
                        <div class="wsmobileheader clearfix  "> <a id="wsnavtoggle"
                                class="wsanimated-arrow"><span></span></a> <span class="smllogo wow shake ">
                                <a href="">
                                    @foreach ($logos as $logo)
                                         <img style="height:30px" class="img-fluid" src="{{ asset('uploads/logo_images/' . $logo->image) }}">
                                    @endforeach
                                </a>
                            </span> <a href="" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
                        </div>
                        <!-- Mobile Header -->
                        <div class="wsmainfull clearfix">
                            <div class="wsmainwp clearfix">
                                <div class="desktoplogo">
                                    <a href="{{ route('welcome') }}">
                                        @foreach ($logos as $logo)
                                            <img style="height:25px" class="img-fluid" src="{{ asset('uploads/logo_images/' . $logo->image) }}">
                                        @endforeach
                                    </a>
                                </div>
                                <!--Main Menu HTML Code-->
                                <nav class="wsmenu clearfix">
                                    <ul class="wsmenu-list">
                                            <li aria-haspopup="true"><a href="{{ route('welcome') }}" class="menuhomeicon">Home</a></li>
                                        @foreach($categories as $category)
                                            <li aria-haspopup="true">
                                                <a href="" class="menuhomeicon">{{ $category->name}}

                                                    <span class="dropdown-icon"><i class="{{  'fas fa-angle-down'  }}"></i></span>
                                                </a>                                      <div class="wsmegamenu clearfix">
                                                <div class="container">
                                                        <div class="row">
                                                            <ul class="col-lg-4 col-md-12 col-xs-12 link-list">
                                                                


                                                        <div class="">

                                                            <h3 class="title">{{ $category->name }} Demo</h3>
                                                            <div id="{{ $category->name }}" class="carousel slide" data-ride="carousel">
                                                                <div class="carousel-inner product-img"> 
                                                                   @foreach ($nav_sliders as $nav_slider)
                                                                        <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}"><img src="{{ asset('uploads/slider_images/' . $nav_slider->image) }}" width="40px">
                                                                            <div class="carousel-caption">
                                                                                <h3><a href="">{{$nav_slider->title}}</a></h3>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach 


                                                                </div>
                                                                <a class="carousel-control-prev" href="#{{ $category->name }}"
                                                                    data-slide="prev"> <span
                                                                        class="carousel-control-prev-icon"></span> </a>
                                                                <a class="carousel-control-next" href="#{{ $category->name }}"
                                                                    data-slide="next"> <span
                                                                        class="carousel-control-next-icon"></span> </a>
                                                            </div>
                                                        </div>
                                                                
                                                            </ul>
                                                            <ul class="col-lg-4 col-md-12 col-xs-12 link-list">
                                                                <li class="title"><h3 class="title">{{ $category->name }}</h3></li>
                                                                @foreach ($category->sub_categories as $sub_category)
                                                                <li><a href=""><i class="fa fa-arrow-circle-right"></i> {{ $sub_category->name }}</a></li>
                                                                @endforeach
                                                            </ul>
                                                            <div class="col-lg-4 col-md-12 col-xs-12">
                                                                <h3 class="title">Contact</h3>

                                                                <ul class="nav-contact">
                                                                    <li><a target="_blank" href=""><i class="fas fa-phone-square"></i>01771212979</a></li>
                                                                    <li><a target="_blank" href=""><i class="fas fa-envelope"></i>info@codewareltd.com</a></li>
                                                                    <li><a target="_blank" href="http://m.me/CodeWareLTD"><i class="fab fa-facebook-messenger"></i>codewareltd</a></li>
                                                                    <li><a target="_blank" href="http://m.me/CodeWareLTD"><i class="fab fa-facebook-messenger"></i>Address: 2/1, Avenue.</a></li>
                                                                    <li><a target="_blank" href="http://m.me/CodeWareLTD"><i class="fab fa-facebook-messenger"></i>Office Location</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                        @endforeach
                                            <li aria-haspopup="true"><a href="{{ route('welcome') }}" class="menuhomeicon">Company Profile</a></li>

                                            <li>
                                                <div class="dropdown">
                                                    <button class=" dropbtn p-3"> MORE <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></button>
                                                    <div class="dropdown-content">
                                                       <a href="{{ route('job_offer') }}" class="">JOB OFFER</a>
                                                       <a href="{{ route('verify_id') }}" class="">ID Verify</a>
                                                       <a href="{{ route('welcome') }}" class="">Contact</a>
                                                    </div>
                                                </div>
                                            </li>







                                            <li aria-haspopup="true"><a href="{{ route('login') }}" class="menuhomeicon">Login</a></li>

                                    </ul>

                                    <ul class="social-top">
                                        <li><a target="_blank" href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a target="_blank" href=""><i class="fab fa-twitter"></i></a></li>
                                        <li><a target="_blank" href=""><i class="fab fa-linkedin-in"></i></a></li>
                                        <li class="search-box-b"><a href="#search" class="search-trigger"> <i
                                                    class="fa fa-search"></i></a></li>
                                    </ul>


                                    <div id="search">
                                        <button type="button" class="close">×</button>
                                        <form>
                                            <input type="search" value="" placeholder="type keyword(s) here" />
                                            <button type="submit" class="btn btn-primary">Go</button>
                                        </form>
                                    </div>



                                </nav>
                                <!--Menu HTML Code-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    