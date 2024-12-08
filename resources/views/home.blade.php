@extends('layouts.layout')

@section('contents')
@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<!-- Home content -->

<!-- Background overlay div with image -->
 
@auth
    {{-- Check if the user is admin or user --}}
    @if (Auth::user()->Credential == 'admin' || Auth::user()->Credential == 'user')
        <div class="background-overlay" style="background-image: url('{{ asset('img/municipalhall.jpg') }}');">
        </div>
<!-- Payment Success message display -->
@if(session('success'))
    <div id="successMessage" class="alert alert-success" style="color: green; text-align: center;">
        {{ session('success') }}
    </div>
@endif
        <!-- Intro section -->
        <section class="intro-container">
            <div class="intro">
                <h1>Manito Civil Registry Online Services</h1>
                <p>Welcome to Communitech, a dedicated platform for the citizens of Manito. At Communitech, you can easily apply for vital records, including Certificates of Live Birth, Death Certificates, and Marriage Certificates. Our goal is to simplify the process, ensuring you can access these essential documents quickly and conveniently. Thank you for choosing Communitech, where your vital records are just a few clicks away.</p>
                <a href="/home/services" class="btn-apply">Apply Certificate</a>
            </div>
        </section>

    @endif
@endauth

@auth
    {{-- Check if the user is rider --}}
    @if (Auth::user()->Credential == 'rider')
        <p>Rider Interface</p>
    @endif
@endauth
<script>
        // Function to hide the success message after 10 seconds
        window.onload = function() {
        var successMessage = document.getElementById('successMessage');
        if (successMessage) {
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 10000); // 10000ms = 10 seconds
        }
    };
</script>
@endsection
