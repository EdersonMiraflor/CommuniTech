@extends('layouts.layout2')
@section('contents')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<div class="auth-container">
    <div class="auth-row">
        <div class="auth-col">
            <div class="auth-card">
                <div class="auth-card-header">
                    {{ __('Verify Your Email Address') }}
                </div>

                <div class="auth-card-body">
                    @if (session('resent'))
                        <div class="auth-alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p class="auth-text">{{ __('Before proceeding, please check your email for the verification link.') }}</p>
                    <p class="auth-text">{{ __('If you did not receive the email') }},</p>
                    <form class="auth-form d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="auth-button">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
