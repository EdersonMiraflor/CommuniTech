@extends('layouts.layout')
@section('contents')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Home</title>

    <style>
/* General Body Styling */
.otphome body {
    font-family: 'Arial', sans-serif;
    background-color: #e8f7ec;
    color: #333;
    margin: 0;
    padding: 0;
}


/* Alert Styling */
.otphome .alert {
    font-size: 1rem;
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 15px;
}
.otphome .alert-success {
    background-color: #e8f7ec;
    border: 1px solid #28a745;
    color: #28a745;
}

/* Links Styling */
.otphome a {
    font-size: 1rem;
    font-weight: bold;
    color: #04aa6d;
    text-decoration: none;
    transition: color 0.3s, transform 0.3s;
    display: inline-block;
    margin-bottom: 10px;
}
.otphome a:hover {
    color: #28a745;
    text-decoration: underline;
    transform: scale(1.05);
}

/* Certificate Link Styling */
.otphome a[href*="generate"] {
    background-color: #e8f7ec;
    padding: 10px 15px;
    border-radius: 5px;
    border: 1px solid #28a745;
    text-align: center;
    display: inline-block;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
.otphome a[href*="generate"]:hover {
    background-color: #28a745;
    color: #ffffff;
}

/* User Info Styling */
.otphome h3 {
    font-size: 1.5rem;
    color: #28a745;
    text-align: center;
    margin-bottom: 20px;
}

/* Paragraph Styling */
.otphome p {
    font-size: 1rem;
    color: #555;
    text-align: center;
}

/* Button Styling */
.otphome button {
    background-color: #28a745;
    color: #ffffff;
    font-size: 1rem;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s;
}
.otphome button:hover {
    background-color: #04aa6d;
}

/* SweetAlert2 Custom Styling */
.otphome .swal2-popup {
    border: 2px solid #28a745 !important;
    border-radius: 10px !important;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2) !important;
}
.otphome .swal2-title {
    color: #28a745 !important;
}
.otphome .swal2-confirm {
    background-color: #28a745 !important;
    color: #ffffff !important;
}
.otphome .swal2-confirm:hover {
    background-color: #04aa6d !important;
}

/* Responsive Design */
@media (max-width: 768px) {
    .otphome .card-body {
        padding: 15px;
    }
    .otphome h3 {
        font-size: 1.2rem;
    }
    .otphome a {
        font-size: 0.9rem;
    }
}


    </style>

</head>
<body>
    <div>
<!--Sending OTP Code with OTP Form 9
Explanation: 
   -Once the user is done with the otp code and the status of their "is_activated" is 1, it will be directed to this Page
-->

<div class="otphome">



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
                <a href="{{ url('generatebirth') }}" style="text-decoration: none; color: #28a745;">
                    Click here to Download your PDF Birth Content
                </a><br>
            @elseif ($certificate->certificate_type == 'Marriage Certificate')
                <a href="{{ url('generatemarriage') }}" style="text-decoration: none; color: #28a745;">
                    Click here to Download your PDF Marriage Content
                </a><br>
            @elseif ($certificate->certificate_type == 'Death Certificate')
                <a href="{{ url('generatedeath') }}" style="text-decoration: none; color: #28a745;">
                    Click here to Download your PDF Death Content
                </a>
            @endif
        @else
            <p>No certificate type found for your account.</p>
        @endif
        
    
        @if($latestScan = \App\Models\Scan::where('email', Auth::user()->email)->latest()->first())
            <!-- Display the link and latest scan details -->
            <a href="{{ url('scans') }}" style="text-decoration: none; color: #28a745;">
                View My Latest Scan
            </a>
        @else
            <!-- Display a message if no record exists -->
            <p>No scans available for this user.</p>
        @endif



</div>

</div>
</body>
</html>
@endsection