@extends('layouts.layout2')
@section('contents')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<div class="verify-container">
    <div class="verify-row">
        <div class="verify-col">
            <div class="verify-card">
                <div class="verify-card-header">
                    {{ __('Verify Your Email Address') }}
                </div>

                <div class="verify-card-body">
                    @if (session('resent'))
                        <div class="verify-alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p class="verify-text">{{ __('Before proceeding, please check your email for the verification link.') }}</p>
                    <p class="verify-text">{{ __('If you did not receive the email') }},</p>
                    <form class="verify-form d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="verify-button">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
