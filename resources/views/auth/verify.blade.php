@extends('layouts.layout')
@section('contents')
<div class="container" style="margin: 20px; padding: 20px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border: 1px solid #ddd; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-header" style="background-color: #f8f9fa; font-size: 24px; font-weight: bold; text-align: center; padding: 15px;">
                    {{ __('Verify Your Email Address') }}
                </div>

                <div class="card-body" style="padding: 20px; font-size: 14px;">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert" style="color: #155724; background-color: #d4edda; border-color: #c3e6cb; padding: 10px;">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p style="margin-bottom: 20px;">{{ __('Before proceeding, please check your email for the verification link.') }}</p>
                    <p>{{ __('If you did not receive the email') }},</p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="color: #007bff; text-decoration: underline; font-size: 14px;">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
