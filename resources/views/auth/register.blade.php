@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="card-header py-3 text-center"> Employee {{ __('Register') }}</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf 

                        <div class="row mb-3 ps-5">
                            <label for="name" class="col-md-4 col-form-label text-left">Your Full Name :</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- ---  --}}



                        <div class="row mb-3 ps-5">
                            <label for="fathers_name_or_husband_name_value" class="col-md-4 col-form-label text-left">Your Guardian :</label>

                            <div class="col-md-6">

                                <select name="fathers_name_or_husband_name_value" id="fathers_name_or_husband_name_value" class="form-control @error('fathers_name_or_husband_name_value') is-invalid @enderror">
                                    <option selected disabled>Select Guardian <span> &#9660;</span></option>
                                    <option value="1">Father's Name</option>
                                    <option value="2">Husbands's Name</option>
                                </select>

                                @error('fathers_name_or_husband_name_value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ps-5">
                            <label for="gurdian_name" class="col-md-4 col-form-label text-left">Guardian Name :</label>

                            <div class="col-md-6">
                                <input id="gurdian_name" type="text" class="form-control @error('gurdian_name') is-invalid @enderror" name="gurdian_name" value="{{ old('gurdian_name') }}" required autocomplete="gurdian_name">

                                @error('gurdian_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3 ps-5">
                            <label for="mothers_name" class="col-md-4 col-form-label text-left">Mother's Name :</label>

                            <div class="col-md-6">
                                <input id="mothers_name" type="text" class="form-control @error('mothers_name') is-invalid @enderror" name="mothers_name" value="{{ old('mothers_name') }}" required autocomplete="mothers_name" autofocus>

                                @error('mothers_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ps-5">
                            <label for="mobile_number" class="col-md-4 col-form-label text-left">Mobile Number :</label>

                            <div class="col-md-6">
                                <input id="mobile_number" type="text" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}" required autocomplete="mobile_number" autofocus>

                                @error('mobile_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ps-5">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-left">Date Of Birth :</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus>

                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3 ps-5">
                            <label for="religion" class="col-md-4 col-form-label text-left">Your Religion :</label>

                            <div class="col-md-6">

                                <select name="religion" id="religion" class="form-control @error('religion') is-invalid @enderror">
                                    <option selected disabled>Select Religion <span> &#9660;</span></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Kristan">Kristan</option>
                                    <option value="Others">Others</option>
                                </select>

                                @error('religion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3 ps-5">
                            <label for="" class="col-md-4 col-form-label text-left">Your Gender :</label>

                            <div class="col-md-6">

                                <input id="male"  type="radio" class=" @error('gender') is-invalid @enderror" name="gender" value="male" required autocomplete="gender" autofocus>
                                <label for="male" class="pe-3 "> Male</label>
                                <input id="female"  type="radio" class=" @error('gender') is-invalid @enderror" name="gender" value="female" required autocomplete="gender" autofocus>
                                <label for="female" class="pe-3"> Female </label>
                                <input  id="others" type="radio" class=" @error('gender') is-invalid @enderror" name="gender" value="others" required autocomplete="gender" autofocus>
                                <label for="others" class="pe-3"> Others </label>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3 ps-5">
                            <label for="birth_or_NID_value" class="col-md-4 col-form-label text-left">Birth/NID :</label>

                            <div class="col-md-6">

                                <select name="birth_or_NID_value" id="birth_or_NID_value" class="form-control @error('birth_or_NID_value') is-invalid @enderror">
                                    <option selected disabled>Select One <span> &#9660;</span></option>
                                    <option value="1">National ID</option>
                                    <option value="2">Birth ID</option>
                                </select>

                                @error('birth_or_NID_value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ps-5">
                            <label for="birth_or_NID" class="col-md-4 col-form-label text-left">Your Birth ID / NID :</label>

                            <div class="col-md-6">
                                <input id="birth_or_NID" type="text" class="form-control @error('birth_or_NID') is-invalid @enderror" name="birth_or_NID" value="{{ old('birth_or_NID') }}" required autocomplete="birth_or_NID">

                                @error('birth_or_NID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ps-5">
                            <label for="image" class="col-md-4 col-form-label text-left">Your Image :</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ps-5">
                            <label for="NID_front_side" class="col-md-4 col-form-label text-left">NID Front Side :</label>

                            <div class="col-md-6">
                                <input id="NID_front_side" type="file" class="form-control @error('NID_front_side') is-invalid @enderror" name="NID_front_side" value="{{ old('NID_front_side') }}" required autocomplete="NID_front_side">

                                @error('NID_front_side')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ps-5">
                            <label for="NID_back_side" class="col-md-4 col-form-label text-left">NID Back Side :</label>

                            <div class="col-md-6">
                                <input id="NID_back_side" type="file" class="form-control @error('NID_back_side') is-invalid @enderror" name="NID_back_side" value="{{ old('NID_back_side') }}" required autocomplete="NID_back_side">

                                @error('NID_back_side')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ps-5">
                            <label for="father_or_mother_image" class="col-md-4 col-form-label text-left">Father/Mother Image :</label>

                            <div class="col-md-6">
                                <input id="father_or_mother_image" type="file" class="form-control @error('father_or_mother_image') is-invalid @enderror" name="father_or_mother_image" value="{{ old('father_or_mother_image') }}" required autocomplete="father_or_mother_image">

                                @error('father_or_mother_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ps-5">
                            <label for="father_or_mother_NID_front" class="col-md-4 col-form-label text-left">Father/Mother NID Front :</label>

                            <div class="col-md-6">
                                <input id="father_or_mother_NID_front" type="file" class="form-control @error('father_or_mother_NID_front') is-invalid @enderror" name="father_or_mother_NID_front" value="{{ old('father_or_mother_NID_front') }}" required autocomplete="father_or_mother_NID_front">

                                @error('father_or_mother_NID_front')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ps-5">
                            <label for="father_or_mother_NID_back" class="col-md-4 col-form-label text-left">Father/Mother NID Back :</label>

                            <div class="col-md-6">
                                <input id="father_or_mother_NID_back" type="file" class="form-control @error('father_or_mother_NID_back') is-invalid @enderror" name="father_or_mother_NID_back" value="{{ old('father_or_mother_NID_back') }}" required autocomplete="father_or_mother_NID_back">

                                @error('father_or_mother_NID_back')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ps-5">
                            <label for="permanent_address" class="col-md-4 col-form-label text-left">Permanent Address :</label>

                            <div class="col-md-6">
                                <textarea id="permanent_address" rows="3" class="form-control @error('permanent_address') is-invalid @enderror" name="permanent_address">{{ old('permanent_address') }}</textarea>
                                @error('permanent_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ps-5">
                            <label for="present_address" class="col-md-4 col-form-label text-left">Present Address :</label>

                            <div class="col-md-6">
                                <textarea id="present_address" rows="3" class="form-control @error('present_address') is-invalid @enderror" name="present_address">{{ old('present_address') }}</textarea>

                                @error('present_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        {{-- ----  --}}

                        <div class="row mb-3 ps-5">
                            <label for="email" class="col-md-4 col-form-label text-left">{{ __('Email Address') }} :</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                            <div class="col-md-6">
                                <input id="password" type="hidden" value="Bangladesh" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> --}}

                            <div class="col-md-6">
                                <input type="hidden" value="Bangladesh" id="password-confirm"  class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row">
                            {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> --}}

                            <div class="col-md-6">
                                <input type="hidden" value="0" name="status">
                            </div>
                        </div>

                        <div class="row mb-0 ps-5">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    {{-- @include('Backend.layout.partials.messages') --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
