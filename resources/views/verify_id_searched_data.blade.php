@extends('Frontend.master')


<style>
    .search-container{
        position: relative;
    }
    .search-container button {
        padding: 10px;
        margin-right: 16px;
        background: #F7941D;
        color: #fff;
        font-size: 17px;
        border: none;
        cursor: pointer;
        position: absolute;
        top: 0;right: -15px;
    }
    .search-container button:hover {
        background: rgb(0, 0, 0);
        color: #fff;
    }
    input[type=text]{
        padding: 5px 65px;
    }

</style>
@section('frontend-content')            
    <section class="container py-5" style="margin-top: 40px;min-height:70vh">


        <div class="search-container d-flex justify-content-between">
            <h3 class="">Search Your Identity</h3> 
            <form action="{{ route('verify_id') }}" method="GET">
                <input type="text" placeholder="SEACRH BY JOB ID" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <hr>



            <div class="card p-5">
                 <div class="row justify-content-center">
                    <div class="col-md-10">
                        @foreach ( $employee_data as $employee)
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div><img style="border: 5px solid rgb(226, 226, 226)" class="img-fluid mb-5 rounded mt-3 ml-5" src="{{ asset('uploads/employee_images/' . $employee->image) }}" width="180px"> </span> </span>  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="py-2"> <span>Employee ID <b>:</b> <span class="text-success px-3">{{ $employee->id}}</span></span>  </div>
                                <div class="py-2"> <span>Employee Name <b>:</b> <span class="text-success px-3">{{ $employee->name}}</span></span>  </div>
                                <div class="py-2"> <span>Employee Email <b>:</b> <span class="text-success px-3">{{ $employee->email}}</span></span>  </div>
                                <div class="py-2"> <span>Employee Birth Date <b>:</b> <span class="text-success px-3">{{ $employee->date_of_birth}}</span></span>  </div>
                                <div class="py-2"> <span>Employee Guardian<b> :</b> <span class="text-success px-3">{{ $employee->fathers_name_or_husband_name}}</span></span>  </div>
                                <div class="py-2"> <span>Employee Mother Name <b>:</b> <span class="text-success px-3">{{ $employee->mothers_name}}</span></span>  </div>
                                <div class="py-2"> <span>Employee Join Date <b>:</b> <span class="text-success px-3">{{ $employee->created_at}}</span></span>  </div>
                                <div class="py-2"> <span>Employee Religion <b>:</b> <span class="text-success px-3">{{ $employee->religion}}</span></span>  </div>
                                <div class="py-2"> <span>Employee Gender <b>:</b> <span class="text-success px-3">{{ $employee->gender}}</span></span>  </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>     
    
    </section>
@endsection