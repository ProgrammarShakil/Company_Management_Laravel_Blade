    <section class="our-team-area mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    {{-- <h3 class="text-center bg-custom-red text-white" style="color: #130F3A;"></h3> --}}
                    <h3 class="text-center text-white py-3" style="color: #130F3A; background:#FA5661">OUR TEAM MEMBERS</h3>

                    <div class="slider owl-carousel owl-theme" id="owl-carousel3">
                        @foreach ($team_members as $team_member)
                                
                        <div class="carousels-item">
                            <div class="cards mt-4">
                                <div class="card py-5">
                                    <div class="content">
                                        <div class="img">
                                                <img src="{{ asset('uploads/team_images/' . $team_member->image) }}" width="40px">
                                        </div>
                                        <div class="details">
                                            <div class="name">{{ $team_member->name }}</div>
                                            <div class="job">{{ $team_member->designation }}</div>
                                        </div>
                                        <div class="media-icons">
                                            <a href="{{ $team_member->facebook_link }}"><i class="fab fa-{{ $team_member->facebook }}"></i></a>
                                            <a href="{{ $team_member->twitter_link }}"><i class="fab fa-{{ $team_member->twitter }}"></i></a>
                                            <a href="{{ $team_member->youtube_link }}"><i class="fab fa-{{ $team_member->youtube }}"></i></a>
                                            <a href="{{ $team_member->instagram_link }}"><i class="fab fa-{{ $team_member->instagram }}"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="carousels-item">
                            <div class="cards mt-4">
                                <div class="card py-5">
                                    <div class="content">
                                        <div class="img">
                                                <img src="{{ asset('frontend/images/demo-man.png') }}" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="name">Andrew Neil</div>
                                            <div class="job">Web Designer</div>
                                        </div>
                                        <div class="media-icons">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousels-item">
                            <div class="cards mt-4">
                                <div class="card py-5">
                                    <div class="content">
                                        <div class="img">
                                                <img src="{{ asset('frontend/images/demo-man.png') }}" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="name">Andrew Neil</div>
                                            <div class="job">Web Designer</div>
                                        </div>
                                        <div class="media-icons">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousels-item">
                            <div class="cards mt-4">
                                <div class="card py-5">
                                    <div class="content">
                                        <div class="img">
                                                <img src="{{ asset('frontend/images/demo-man.png') }}" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="name">Andrew Neil</div>
                                            <div class="job">Web Designer</div>
                                        </div>
                                        <div class="media-icons">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.slider -->
                </div>
            </div>
        </div>
    </section>