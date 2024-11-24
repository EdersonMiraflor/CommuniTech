@extends('layouts.layout')
@section('contents')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Home</title>
</head>
<body>
    <div>
<!--Sending OTP Code with OTP Form 9
Explanation: 
   -Once the user is done with the otp code and the status of their "is_activated" is 1, it will be directed to this Page
-->
<div class="card-body">
        @if (session('activated'))
            <div class="alert alert-success" role="alert">
                {{ session('activated') }}
            </div>
        @endif
    </div>

    <h1>OTP Home</h2>
    <p>You are logged in as: <strong>{{ auth()->user()->name }}</strong></p>

    <a href="{{ url('/generatePDF') }}" style="text-decoration: none; color: blue;">
            Click here to Download your Certificate
        </a>
</div>
</body>
</html>
@endsection