@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-primary mt-5 text-white py-3">
                <h3 class="card-header text-center py-3">{{ __(' User Login') }}</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 px-2">
                            <label for="email" class="col-md-3 col-form-label">{{ __('Email :') }}</label>

                            <div class="col-md-9">
                                <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                        
{{--                         
                        <div class="row mb-3 px-2">
                            <label for="job_id" class="col-md-3 col-form-label">JOB ID</label>

                            <div class="col-md-9">
                                <input placeholder="JOB ID" id="job_id" type="text" class="form-control @error('job_id') is-invalid @enderror" name="job_id" value="{{ old('job_id') }}" required>

                                @error('job_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="row mb-3 px-2">
                            <label for="password" class="col-md-3 col-form-label">{{ __('Password :') }}</label>

                            <div class="col-md-9">
                                <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" style="padding-left: 140px">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0 ">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-danger ">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
