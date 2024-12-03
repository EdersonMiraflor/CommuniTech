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

        <!-- Intro section -->
        <section class="intro-container">
            <div class="intro">
                <h1>Manito Civil Registry Online Services</h1>
                <p>Welcome to Communitech, a dedicated platform for the citizens of Manito. At Communitech, you can easily apply for vital records, including Certificates of Live Birth, Death Certificates, and Marriage Certificates. Our goal is to simplify the process, ensuring you can access these essential documents quickly and conveniently. Thank you for choosing Communitech, where your vital records are just a few clicks away.</p>
                <a href="/home/services" class="btn-apply">Apply Certificate</a>
            </div>
        </section>

        <!-- Team section -->
        <section class="team">
            <div class="team-container">
                <h2 style="margin-top: 230px;">CommuniTECH Team</h2>
                <div class="team-grid">
                    <div class="team-member">
                        <img src="img/romeo.jpg" alt="Project Manager">
                        <p class="name">Romeo Banzuela</p>
                        <p class="role">Project Manager</p>
                    </div>
                    <div class="team-member">
                        <img src="img/princess.jpg" alt="System Analyst">
                        <p class="name">Princess Malanyaon</p>
                        <p class="role">System Analyst</p>
                    </div>
                    <div class="team-member">
                        <img src="img/coleen.png" alt="Front-end Developer">
                        <p class="name">Coleen Lustre</p>
                        <p class="role">Front-end Developer</p>
                    </div>
                    <div class="team-member">
                        <img src="img/eder.png" alt="Back-end Developer">
                        <p class="name">Ederson Miraflor</p>
                        <p class="role">Back-end Developer</p>
                    </div>
                </div>
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

@endsection
