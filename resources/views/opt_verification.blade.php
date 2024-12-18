@extends('layouts.layout')
@section('contents')

<link rel="stylesheet" href="{{ asset('css/img-auth.css') }}">

<div class="container" style="display: flex; justify-content: center; align-items: center; min-height: 50vh; background-color: #f8f9fa;">
    <div class="row" style="width: 100%; max-width: 600px; background-color: #E8F7EC; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div class="col-md-8" style="margin: 0 auto;">
            <h3 style="margin-top: 20px; text-align: center; color: #333; font-weight: bold;">Email Verification</h3>
            @if(session('activated'))
                <div style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 10px; margin-top: 15px; border-radius: 5px;">
                    {{ session('activated') }}
                </div>
            @endif

            @if (session('message'))
                <div style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 10px; margin-top: 15px; border-radius: 5px;">
                    {{ session('message') }}
                </div>
           @endif

           <!--Sending OTP Code with OTP Form 6
Explanation: 
    -After returning to this page, the user must input the correct otp code in the field sent to the user inputed email.
    -After the user input the correct otp code, it will direct to "verifyotp".
-->
            <form action="{{ route('verifyotp') }}" method="POST" style="margin-top: 20px;">
                @csrf
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="token" style="display: block; font-weight: bold; color: #555;"><center>Enter the OTP verification code sent in your email.</center></label>
                    <input type="text" name="token" class="form-control" placeholder="Enter Code" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
                <center>
                <button type="submit" class="btn btn-primary" style="background-color: #28a745; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Submit</button>
                </center>  
               
            </form>
        </div>
    </div>
</div>  
@endsection
