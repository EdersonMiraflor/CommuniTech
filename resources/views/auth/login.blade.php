@extends('layouts.layout2')

@section('content')

<link rel="stylesheet" href="{{ asset('css/img-auth.css') }}">


<div class="login-container my-5 py-5">
    <div class="row justify-content-center">

        <!-- Left Container for Images and Text -->
        <div class="left-login">

            <img src="{{ asset('/img/manito-logo.png') }}" alt="Manito Logo" class="login-logo">
            <div class="login-text">
                <h1 class="login-title">CommuniTECH</h1>
                <p class="login-description">A Web - Based Application For Civil Registry Office of Manito, Albay</p>
            </div>
            <div class="login-picture">
                <div class="login-photo">
                    <div class="login-text secure-picture">
                        <img src="{{ asset('img/secure.png') }}" alt="Secure">
                        <p class="h5">SECURE</p>
                    </div>
                    <div class="login-text fast-picture">
                        <img src="{{ asset('img/fastt.png') }}" alt="Fast">
                        <p class="h5">FAST</p>
                    </div>
                    <div class="login-text convenient-picture">
                        <img src="{{ asset('img/convenient.png') }}" alt="Convenient">
                        <p class="h5">CONVENIENT</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Container for the Form -->
        <div class="right-login">
            <div class="login-card ">
               

                <div class="card-login">
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
                                <a class="btn btn-link" style="text-transform: none;" href="{{ route('password.request') }}">
                                     {{ __('Forgot your password?') }}
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