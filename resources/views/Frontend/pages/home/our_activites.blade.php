 <style>
     
     .owl-carousel .owl-nav button.owl-next
      {
   
        color: inherit;
        border: 0 !important;
        padding: 0 !important;
        font: inherit;
        position: absolute;
        right: -40px;
        top: 40%;
        outline: none;
        font-size: 33px;
     }

    .owl-carousel .owl-nav button.owl-next:hover
      {
        background:none;
        color: red;
     }

     .owl-carousel .owl-nav button.owl-prev{
   
        color: inherit;
        border: none !important;
        outline: none;
        padding: 0 !important;
        font: inherit;
        position: absolute;
        left: -40px;
        top: 40%;
        font-size: 33px;
     }

       .owl-carousel .owl-nav button.owl-prev:hover
      {
        background:none;
        color: red;
     }
 </style>
 
 
 
 <section class="e-marketing-area pb-5">  {{-- our activities area --}}

    <section class="our-client-area my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h3 class="text-center text-white py-3" style="color: #130F3A; background:#FA5661"">Our Activites</h3>
                    <div class="slider owl-carousel owl-theme" id="client-area">
                        @foreach ($our_activities as $our_activity)
                         <div class="carousels-item">
                            <div class="cards mt-4">
                                <div class="card py-5">
                                    <div class="content">
                                        <h2 class="pb-3">{{ $our_activity->title }}</h2>
                                        <hr>
                                        <div class="row justify-content-between">
                                            <div class="col-md-4">
                                                <div class="contact">
                                                    <img src="{{ asset('uploads/our_activities_images/' . $our_activity->image) }}" width="40px">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="text-left">
                                                    <p>{{ $our_activity->description }}</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div> <!-- /.slider -->
                </div>
            </div>
        </div>
    </section>