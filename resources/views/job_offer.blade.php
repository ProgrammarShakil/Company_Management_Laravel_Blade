@extends('Frontend.master')

@section('frontend-content')            
    <section class="container py-5" style="margin-top: 40px">
        <div class="row justify-content-center">
            @foreach ($job_post as $job)
                <div class="col-md-4">
                   <a href="{{ route('job_offer_details', $job->id) }}" class="text-dark">
                        <div class="card p-5 mb-5">
                            <div class="">
                                {{-- <img class="img-fluid" src="{{ asset('uploads/job_images/' . $job->image) }} " width="50px"> --}}
                                <a href="{{ route('job_offer_details', $job->id) }}" class="text-dark"><h5 class="text-success"> {{ $job->job_title }} </h5></a>
                                <a href="{{ route('job_offer_details', $job->id) }}" class="text-dark"><p> 
                                    

                            <div class="py-1"> <span>Designation <b>:</b> </span> <span class="text-primary"> {{ $job->designation }} </span> </div>
                            <div py-1> 
                                <span>Vacancy <b>:</b> </span> <span class="text-primary">
                                    
                                    @if ($job->vacancy <= 9)
                                    {{ '0' . $job->vacancy }} 
                                    @else
                                    {{  $job->vacancy }}
                                    @endif </span> 
                            </div>
                            <div class="py-1"> <span>Qualification <b>:</b> </span> <span class="text-primary"> {{ $job->qualification }} </span> </div>
                            <div class="py-1"> <span>Experience <b>:</b> </span> <span class="text-primary"> {{ $job->experience }} </span> </div>
                            <div class="py-1"> <span>Age <b>:</b> </span> <span class="text-primary"> {{ $job->age }} </span> </div>
                            <div class="py-1"> <span>Employment Status <b>:</b> </span> <span class="text-primary"> {{ $job->employment_status == 1 ? 'Office Desk' : 'Remote' }} </span> </div>
                            <div class="py-1"> <span>Deadline <b>:</b> </span> <span class="text-primary"> {{ date($job->deadline) }}</span> <b>...</b></div>




                                </p></a>
                            </div>
                        </div>
                    </a>
                </div>
             @endforeach
        </div>
    </section>
@endsection