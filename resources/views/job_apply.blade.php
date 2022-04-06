@extends('Frontend.master')

@section('frontend-content')            
    <section class="container py-5" style="margin-top: 0px">
        <div class="row justify-content-center">
            <div class="apply-form">
                <div class="container">
                    <form method="POST" action="{{ route('job_apply_create') }}" class="row py-5" enctype="multipart/form-data">
                        <div class="col-md-12">
                            @include('Frontend.dashboard.dashboard_pages.layout.partials.messages')
                        </div>
                        @csrf

                        <input type="hidden"  name="job_id" value="{{ $job_posts->id }}">

                        <div class="col-md-4 py-2">
                            <label for="designation" class="col-md-4 pl-0">Designation</label>

                            <div class="">
                                <input id="designation" type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{ old('designation') }}" required autocomplete="designation">

                                @error('designation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    
                            </div>
                        </div>

                        <div class="col-md-4 py-2">
                            <label for="full_name" class="col-md-4 pl-0"> Full Name</label>

                            <div class="">
                                <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name">

                                @error('full_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4 py-2">
                            <label for="NID_NO" class="col-md-4 pl-0"> NID NO</label>

                            <div class="">
                                <input id="NID_NO" type="text" class="form-control @error('NID_NO') is-invalid @enderror" name="NID_NO" value="{{ old('NID_NO') }}" required autocomplete="NID_NO">

                                @error('NID_NO')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-4 py-2">
                            <label for="Birth_ID_NO" class="col-md-4 pl-0"> Birth ID NO</label>

                            <div class="">
                                <input id="Birth_ID_NO" type="text" class="form-control @error('Birth_ID_NO') is-invalid @enderror" name="Birth_ID_NO" value="{{ old('Birth_ID_NO') }}" required autocomplete="Birth_ID_NO">

                                @error('Birth_ID_NO')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4 py-2">
                            <label for="Birth_date" class="col-md-4 pl-0"> Birth Date</label>

                            <div class="">
                                <input id="Birth_date" type="date" class="form-control @error('Birth_date') is-invalid @enderror" name="Birth_date" value="{{ old('Birth_date') }}" required autocomplete="Birth_date">

                                @error('Birth_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4 py-2">
                            <label for="district" class="col-md-4 pl-0"> District </label>

                            <div class="">

                                <select class="form-control @error('district') is-invalid @enderror" name="district" value="{{ old('district') }}" required autocomplete="district">
                                    <option selected disabled value="">Choose...</option>
                                    <option value="Borguna">Borguna</option>
                                    <option value="Barisal">Barisal</option>
                                    <option value="Vola">Vola</option>
                                    <option value="Jhalkathi">Jhalkathi</option>
                                    <option value="Potuakhali">Potuakhali </option>
                                    <option value="Pirozpur">Pirozpur </option>
                                    <option value="7">Bandorban</option>
                                    <option value="Bandorban">BrahmmonBaria</option>
                                    <option value="Chaadpur">Chaadpur</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Comilla">Comilla</option>
                                    <option value="Cox's Bazar">Cox's Bazar </option>
                                    <option value="Feni">Feni</option>
                                    <option value="Khagrachori">Khagrachori</option>
                                    <option value="Lokkhipur">Lokkhipur</option>
                                    <option value="Noakhali">Noakhali</option>
                                    <option value="Rangamati">Rangamati</option>
                                    <option value="Dhaka">Dhaka </option>
                                    <option value="Faridpur">Faridpur </option>
                                    <option value="Gazipur">Gazipur </option>
                                    <option value="Gopalgonj">Gopalgonj</option>
                                    <option value="Jamalpur">Jamalpur </option>
                                    <option value="Kishoregonj">Kishoregonj </option>
                                    <option value="Madaripur">Madaripur </option>
                                    <option value="Manikgonj">Manikgonj </option>
                                    <option value="Munshigonj">Munshigonj </option>
                                    <option value="27">Mymensing </option>
                                    <option value="Mymensing">Naraynagang </option>
                                    <option value="Narshingdi">Narshingdi </option>
                                    <option value="Netrokona">Netrokona </option>
                                    <option value="Rajbari">Rajbari </option>
                                    <option value="Sariatpur">Sariatpur </option>
                                    <option value="Sherpur">Sherpur </option>
                                    <option value="Tangail">Tangail </option>
                                    <option value="Bagerhat">Bagerhat</option>
                                    <option value="Chuadanga">Chuadanga </option>
                                    <option value="Jessore">Jessore </option>
                                    <option value="Jhinaidah">Jhinaidah </option>
                                    <option value="Khulna">Khulna </option>
                                    <option value="Kustia">Kustia </option>
                                    <option value="Magura">Magura</option>
                                    <option value="Meherpur">Meherpur </option>
                                    <option value="Narail">Narail </option>
                                    <option value="Shatkhira">Shatkhira </option>
                                    <option value="Bogura">Bogura </option>
                                    <option value="Joypurhat">Joypurhat</option>
                                    <option value="Naoga">Naoga </option>
                                    <option value="Nator">Nator </option>
                                    <option value="Chapai Nawab Gong">Chapai Nawab Gong </option>
                                    <option value="Pabna">Pabna</option>
                                    <option value="Rajshahi">Rajshahi </option>
                                    <option value="Sirajgong">Sirajgong</option>
                                    <option value="Dinajpur">Dinajpur </option>
                                    <option value="Gaibandha">Gaibandha </option>
                                    <option value="Kurigram">Kurigram </option>
                                    <option value="Lalmonirhat">Lalmonirhat </option>
                                    <option value="Nilfamari">Nilfamari</option>
                                    <option value="Panchagar">Panchagar </option>
                                    <option value="Rangpur">Rangpur </option>
                                    <option value="Thakurgao">Thakurgao</option>
                                    <option value="Hobigong">Hobigong </option>
                                    <option value="Moulovibazar">Moulovibazar </option>
                                    <option value="Sunamgong">Sunamgong </option>
                                    <option value="Sylhet">Sylhet</option>
                                </select>

                                @error('district')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4 py-2">
                            <label for="age" class="col-md-4 pl-0"> Age</label>

                            <div class="">
                                <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age">

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-4 py-2">
                            <div class="">

                                <select class="form-control mt-3 @error('guardian_value') is-invalid @enderror" name="guardian_value" value="{{ old('guardian_value') }}" required autocomplete="guardian_value">
                                    <option selected disabled value="">Father/Husband Name</option>
                                    <option value="Father">Father</option>
                                    <option value="Husband">Husband</option>
                                </select>

                                @error('guardian_value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="">

                                <input id="guradian_name" type="text" class="form-control @error('guradian_name') is-invalid @enderror" name="guradian_name" value="{{ old('guradian_name') }}" required autocomplete="guradian_name">


                                @error('guradian_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4 py-2">
                            <div class="">

                                <label for="age" class="col-md-4 pl-0"> Mother Name</label>

                                <input id="mother_name" type="text" class="form-control @error('mother_name') is-invalid @enderror" name="mother_name" value="{{ old('mother_name') }}" required autocomplete="mother_name">


                                @error('mother_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4 py-2">
                            <div class="">

                                <label for="mobile_no" class="col-md-4 pl-0"> Mobile No</label>

                                <input id="mobile_no" type="text" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" value="{{ old('mobile_no') }}" required autocomplete="mobile_no">


                                @error('mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4 py-2">
                            <div class="">

                                <label for="email" class="col-md-4 pl-0"> Email</label>

                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">


                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4 py-2">
                            <div class="">

                                <label for="nationality" class="col-md-4 pl-0"> Nationality</label>

                                <input id="nationality" value="Bangladesi" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ old('nationality') }}" required autocomplete="nationality">


                                @error('nationality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 py-2">
                            <div class="">

                                <label for="present_address" class="col-md-4 pl-0"> Present Address</label>

                                <textarea id="present_address" value="Bangladesi" class="form-control @error('present_address') is-invalid @enderror" name="present_address"  required autocomplete="present_address">{{ old('present_address') }}</textarea>


                                @error('present_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 py-2">
                            <div class="">

                                <label for="permanent_address" class="col-md-4 pl-0"> Permanent Address</label>

                                <textarea id="permanent_address" value="Bangladesi" class="form-control @error('permanent_address') is-invalid @enderror" name="permanent_address"  required autocomplete="permanent_address">{{ old('permanent_address') }}</textarea>


                                @error('permanent_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="col-md-4 py-2">
                            <div class="">

                                <label for="religion" class="col-md-4 pl-0"> Religion</label>

                                <select class="form-control @error('religion') is-invalid @enderror" name="religion" value="{{ old('religion') }}" required autocomplete="religion">
                                    <option selected disabled value="">Choose...</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Christian">Christian</option>
                                    <option value="Buddho">Buddho</option>
                                    <option value="Others">Others</option>
                                </select>

                                @error('religion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                                                
                        
                        <div class="col-md-4 py-2">
                            <div class="">

                                <label for="gender" class="col-md-4 pl-0"> Gender</label>

                                <select class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender">
                                    <option selected disabled value="">Choose...</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-4 py-2">
                            <div class="">

                                <label for="running_designation" class=" pl-0">Running Designation</label>

                                <input id="running_designation" type="text" class="form-control @error('running_designation') is-invalid @enderror" name="running_designation" value="{{ old('running_designation') }}" required autocomplete="running_designation">


                                @error('running_designation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                       
                        
                        <div class="col-md-6 py-2">
                            <div class="">

                                <label for="education" class="col-md-4 pl-0"> Education</label>

                                <input id="education" type="text" class="form-control @error('education') is-invalid @enderror" name="education" value="{{ old('education') }}" required autocomplete="education">


                                @error('education')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                       
                        
                        <div class="col-md-6 py-2">
                            <div class="">

                                <label for="experience" class="col-md-4 pl-0"> Experience</label>

                                <input id="experience" type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ old('experience') }}" required autocomplete="experience">


                                @error('experience')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                       
                        
                        <div class="col-md-6 py-2">
                            <div class="">

                                <label for="image" class="col-md-4 pl-0">Your Image</label>

                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image">


                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                       
                        
                        <div class="col-md-6 py-2">
                            <div class="">

                                <label for="signature_image" class="pl-0">Signature Image</label>

                                <input id="signature_image" type="file" class="form-control @error('signature_image') is-invalid @enderror" name="signature_image" value="{{ old('signature_image') }}" required autocomplete="signature_image">


                                @error('signature_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                       

                        
                        <div class="col-md-12 mt-5">
                           <input class="btn btn-primary btn-block" type="submit" value="Submit">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection