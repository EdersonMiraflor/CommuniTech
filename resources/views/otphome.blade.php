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
   -Once the user is done with the otp code and the status of their "is_actiaved" is 1, it will be directed to this Page
-->
    <h1>OTP Home</h2>
    <div class="card-body">
        @if (session('activated'))
            <div class="alert alert-success" role="alert">
                {{ session('activated') }}
            </div>
        @endif

        {{_('You are logged in!') }}
    </div>

    </div>
</body>
</html>
@endsection