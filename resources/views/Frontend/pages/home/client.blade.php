    <section class="our-client-area mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h3 class="text-center text-white py-3" style="color: #130F3A; background:#FA5661"">OUR CLIENTS</h3>
                    <div class="slider owl-carousel owl-theme" id="owl-carousel2">
                        @foreach ($clients as $client)
                                
                        <div class="carousels-item">
                            <div class="cards mt-4">
                                <div class="card py-5">
                                    <div class="content">
                                        <div class="img">
                                                <img src="{{ asset('uploads/client_images/' . $client->image) }}" width="40px">
                                        </div>
                                        <div class="details">
                                            <div class="name">{{ $client->name }}</div>
                                            <div class="job">{{ $client->designation }}</div>
                                        </div>
                                        <div class="media-icons">
                                            <a href="{{ $client->facebook_link }}"><i class="fab fa-{{ $client->facebook }}"></i></a>
                                            <a href="{{ $client->twitter_link }}"><i class="fab fa-{{ $client->twitter }}"></i></a>
                                            <a href="{{ $client->youtube_link }}"><i class="fab fa-{{ $client->youtube }}"></i></a>
                                            <a href="{{ $client->instagram_link }}"><i class="fab fa-{{ $client->instagram }}"></i></a>
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