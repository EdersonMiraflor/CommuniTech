@extends('layouts.layout2')

@section('content')
<link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">

<div class="reset-container">
    <h1>{{ __('Reset Password') }}</h1>

    <form method="POST" action="{{ route('password.update') }}" class="reset-form">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <!-- Email Address -->
        <div class="email-address">
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="error-message"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <!-- Password -->
        <div class="reset-password">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="new-password">
            @error('password')
                <span class="error-message"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="confirm-password">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="submit-button">{{ __('Reset Password') }}</button>
    </form>
</div>

@endsection

