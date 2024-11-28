@extends('layouts.layout')
@section('contents')

<div style="max-width: 800px; margin: 50px auto; font-family: Arial, sans-serif;">
    <div style="display: flex; justify-content: center;">
        <div style="width: 100%; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 8px; background-color: #fff;">
            <div style="background-color: #f8f9fa; padding: 15px; font-size: 1.5rem; font-weight: bold; border-bottom: 1px solid #dee2e6;">
                {{ __('Reset Password') }}
            </div>

            <div style="padding: 20px;">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div style="margin-bottom: 15px; display: flex; align-items: center;">
                        <label for="email" style="flex: 0 0 30%; text-align: right; margin-right: 10px; font-weight: bold;">
                            {{ __('Email Address') }}
                        </label>
                        <div style="flex: 1;">
                            <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus 
                                style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px;">
                            @error('email')
                                <span style="color: red; font-size: 0.875rem; margin-top: 5px; display: block;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div style="margin-bottom: 15px; display: flex; align-items: center;">
                        <label for="password" style="flex: 0 0 30%; text-align: right; margin-right: 10px; font-weight: bold;">
                            {{ __('Password') }}
                        </label>
                        <div style="flex: 1;">
                            <input id="password" type="password" name="password" required autocomplete="new-password" 
                                style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px;">
                            @error('password')
                                <span style="color: red; font-size: 0.875rem; margin-top: 5px; display: block;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div style="margin-bottom: 15px; display: flex; align-items: center;">
                        <label for="password-confirm" style="flex: 0 0 30%; text-align: right; margin-right: 10px; font-weight: bold;">
                            {{ __('Confirm Password') }}
                        </label>
                        <div style="flex: 1;">
                            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" 
                                style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px;">
                        </div>
                    </div>

                    <div style="margin-top: 20px; text-align: center;">
                        <button type="submit" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; font-size: 1rem; cursor: pointer;">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
