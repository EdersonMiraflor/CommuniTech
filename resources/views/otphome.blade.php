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
{{-- Display User Information --}}
        <h3>You are logged in as: <strong>{{ auth()->user()->name }}</strong></h3>

        {{-- Fetch certificate_type directly from the database --}}
        @php
            use App\Models\PdfRequester;
            $certificate = PdfRequester::where('User_Id', auth()->id())->latest()->first();
        @endphp

        {{-- Conditional Links based on certificate_type --}}
        @if ($certificate)
            @if ($certificate->certificate_type == 'Birth Certificate')
                <a href="{{ url('generatebirth') }}" style="text-decoration: none; color: blue;">
                    Click here to Download your PDF Birth Content
                </a><br>
            @elseif ($certificate->certificate_type == 'Marriage Certificate')
                <a href="{{ url('generatemarriage') }}" style="text-decoration: none; color: blue;">
                    Click here to Download your PDF Marriage Content
                </a><br>
            @elseif ($certificate->certificate_type == 'Death Certificate')
                <a href="{{ url('generatedeath') }}" style="text-decoration: none; color: blue;">
                    Click here to Download your PDF Death Content
                </a>
            @endif
        @else
            <p>No certificate type found for your account.</p>
        @endif

</div>
</body>
</html>
@endsection