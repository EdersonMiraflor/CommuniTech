@extends('layouts.layout')
@section('contents')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h3 class="mt-5 text-center text-warning">Email Verification</h3>
            @if(session('activated'))
                <div class="alert alert-success" role="alert">
                    {{ session('activated') }}
                </div>
            @endif

            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
           @endif
<!--Sending OTP Code with OTP Form 6
Explanation: 
    -After returning to this page, the user must input the correct otp code in the field sent to the user inputed email.
    -After the user input the correct otp code, it will direct to "verifyotp".
-->
            <form action="{{ route('verifyotp') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Enter OTP</label>
                    <input type="number" name="token" class="form-control" placeholder="Enter Code">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>  
@endsection