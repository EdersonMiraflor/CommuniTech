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
{{-- Display SweetAlert2 if there's an error message in the session --}}
@if(session('error'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}',
            confirmButtonText: 'Ok'
        }).then(function() {
            // Optionally redirect to a different page after closing the popup
            window.location.href = '/home/services';  // Or any other route
        });
    </script>
@endif
    <h3>You are logged in as: <strong>{{ auth()->user()->name }}</strong></h3>

    <a href="{{ url('/generatedeath/send') }}" style="text-decoration: none; color: blue;">
            Click here to Download your Certificate
        </a>
</div>
</body>
</html>
@endsection