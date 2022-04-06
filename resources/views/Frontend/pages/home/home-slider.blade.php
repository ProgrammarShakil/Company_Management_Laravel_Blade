    <section class="slider-area">

        <div id="MiddleCarousel" class="carousel slide UACarousel" data-ride="carousel">

            <ol class="carousel-indicators dot">
                <li data-target="#MiddleCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#MiddleCarousel" data-slide-to="1"></li>
                <li data-target="#MiddleCarousel" data-slide-to="2"></li>
                <li data-target="#MiddleCarousel" data-slide-to="3"></li>
            </ol>

            <div class="carousel-inner swiper-slide">

                @foreach ($home_sliders as $home_slider)
                    <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                        <a target="_blank" href="" class="slidera-btn mobile-hidd">READY TO DISCUSS</a>
                        <img  class="d-block w-100 img-responsive" src="{{ asset('uploads/slider_images/' . $home_slider->image) }}">
                    </div>
                @endforeach

            </div>

        </div>


    </section>