@extends('Frontend.master')

@section('frontend-content')            
    <section class="container py-5" style="margin-top: 40px">
        <div class="row justify-content-center">
            @foreach ($job_details as $job)
                <div class="col-md-12">
                    <div class="card p-5 mb-5">
                        <div class="">

                            <div class="d-flex justify-content-between">
                                <a href="" class="text-dark"><h5 class="text-success"> {{ $job->job_title }} </h5></a>
                                <a href="{{ route('job_apply_with_job_id', $job->id) }}" class="btn btn-danger">Apply</a>
                            </div>

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

                            <div class="mt-5">
                                <h5>Job Description</h5>
                                <p> {{ $job->job_description }} </p>
                            </div>

                            <div class="mt-5">
                                <div class="py-1"> <span>Deadline <b>:</b> </span> <span class="text-primary"> {{ date($job->deadline) }}</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
             @endforeach
        </div>
    </section>
@endsection