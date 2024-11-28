@extends('layouts.layout2')

@section('content')

<link rel="stylesheet" href="{{ asset('css/img-auth.css') }}">


<div class="container my-5 py-5">
    <div class="row justify-content-center">
        <!-- Left Container for Images and Text -->
        <div class="col-lg-6 col-md-6 mb-6 mb-md-0">
            <div class="text-center" style="margin-top: 60px; font-family: Arial, sans serif;">
                <h1 class="display-4">CommuniTECH</h1>
                <p class="lead">A Web - Based Application For Civil Registry Office of Manito, Albay</p>
            </div>
            <div class="d-flex flex-column align-items-center mt-4">
                <div class="d-flex flex-row justify-content-around w-100 mb-4">
                    <div class="text-center">
                        <img src="{{ asset('img/secure.png') }}" alt="Secure" width="70" height="70">
                        <p class="h5">SECURE</p>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('img/fast.png') }}" alt="Fast" width="95" height="75">
                        <p class="h5">FAST</p>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('img/convenient.png') }}" alt="Convenient" width="70" height="70">
                        <p class="h5">CONVENIENT</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Container for the Form -->
        <div class="col-lg-8 col-md-8">
            <div class="card ">
               

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" placeholder="Enter E-mail Address" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Enter Password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn custom-btn btn-lg">
                                {{ __('LOG IN') }}
                            </button>

                            @if (Route::has('password.request'))
                                <div class="d-flex justify-content-between mt-2">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                         {{ __('Forgot Your Password?') }}
                                    </a>
                                    <a href="{{ route('register') }}">{{ __('No Account Yet? Register') }}</a>
                                </div>
                            @endif
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection