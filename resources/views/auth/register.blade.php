@extends('layouts.layout')

@section('contents')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<div class="register-container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('CREATE NEW CIVIL REGISTRY ONLINE ACCOUNT') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- First Name -->
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Middle Name -->
                        <div class="row mb-3">
                            <label for="Middle_Name" class="col-md-4 col-form-label text-md-end">{{ __('Middle Name') }}</label>
                            <div class="col-md-6">
                                <input id="Middle_Name" type="text" class="form-control @error('Middle_Name') is-invalid @enderror" name="Middle_Name" value="{{ old('Middle_Name') }}">
                                @error('Middle_Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="row mb-3">
                            <label for="Last_Name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>
                            <div class="col-md-6">
                                <input id="Last_Name" type="text" class="form-control @error('Last_Name') is-invalid @enderror" name="Last_Name" value="{{ old('Last_Name') }}" required>
                                @error('Last_Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Birth Date -->
                        <div class="row mb-3">
                            <label for="Birth_Date" class="col-md-4 col-form-label text-md-end">{{ __('Birth Date') }}</label>
                            <div class="col-md-6">
                                <input id="Birth_Date" type="date" class="form-control @error('Birth_Date') is-invalid @enderror" name="Birth_Date" value="{{ old('Birth_Date') }}" required>
                                @error('Birth_Date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Sex -->
                        <div class="row mb-3">
                            <label for="Sex" class="col-md-4 col-form-label text-md-end">{{ __('Sex') }}</label>
                            <div class="col-md-6">
                                <select id="Sex" class="form-control @error('Sex') is-invalid @enderror" name="Sex" required>
                                    <option value="male" {{ old('Sex') == 'male' ? 'selected' : '' }}>{{ __('Male') }}</option>
                                    <option value="female" {{ old('Sex') == 'female' ? 'selected' : '' }}>{{ __('Female') }}</option>
                                </select>
                                @error('Sex')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Mobile Number -->
                        <div class="row mb-3">
                            <label for="Mobile_Number" class="col-md-4 col-form-label text-md-end">{{ __('Mobile Number') }}</label>
                            <div class="col-md-6">
                                <input id="Mobile_Number" type="text" class="form-control @error('Mobile_Number') is-invalid @enderror" name="Mobile_Number" value="{{ old('Mobile_Number') }}" required>
                                @error('Mobile_Number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       <!-- Password -->
                        <div class="row mb-3">
                            <label for="Password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('Password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <!-- Credential -->
                        <div class="row mb-3">
                            <label for="Credential" class="col-md-4 col-form-label text-md-end">{{ __('Credential') }}</label>
                            <div class="col-md-6">
                                <select id="Credential" class="form-control @error('Credential') is-invalid @enderror" name="Credential">
                                    <option value="user" {{ old('Credential') == 'user' ? 'selected' : '' }}>{{ __('User') }}</option>
                                    <option value="admin" disabled>{{ __('Admin') }}</option>
                                </select>
                                @error('Credential')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="row mb-3">
                            <label for="Address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="Address" type="text" class="form-control @error('Address') is-invalid @enderror" name="Address" value="{{ old('Address') }}">
                                @error('Address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <!-- Terms and Conditions -->
                         <div class="terms-conditions"
                                    <h3><strong>TERMS AND CONDITIONS</strong></h3>
                           
                                         <p> By registering on the website, you agree that all information provided is true and accurate to the best of your knowledge,
                                     and you authorize Manito Government to verify this information. 
                                     You consent to the use of your personal data solely for purposes related to this website and 
                                     confirm that you are a resident of Manito. Your personal data will be safeguarded and
                                      used exclusively for official purposes, and any false or misleading information provided may 
                                      lead to legal action. </p>
                                
                            <div>
                                <input type="checkbox" name="agree" required> I accept the terms and conditions
                            </div>
                        </div>
                      
                         <!-- Buttons -->
                         <div class="row mb-0">
                            <div class="col-md-6 offset-md-3 text-center">
                                <button type="button" class="cancel-button"> {{ __('Cancel') }} </button>
                                <button type="submit" class="register-button">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

