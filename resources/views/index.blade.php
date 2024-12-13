@extends('layouts.layout2')
@section('content')

<link rel="stylesheet" href="{{ asset('css/img-auth.css') }}">

<div class="auth-content">
    <!-- Left Side -->
    <div class="auth-left-side">
        <!-- Logo as a background overlay -->
        <img src="{{ asset('/img/manito-logo.png') }}" alt="Manito Logo" class="auth-logo-overlay">
        
        <h1 class="auth-title">CommuniTECHs</h1>
        <h2 class="auth-description">Are you a Citizen of Manito, Albay?</h2>
        <p class="auth-sub-description">Select 3 pictures that are located in Manito, Albay.</p>
        <button class="auth-button" id="verifyButton">Confirm</button>
    </div>

    <!-- Right Side -->
    <div class="auth-right-side">
        <div class="images">
            <img src="#" alt="Image 1" class="image" data-name="correct">
            <img src="#" alt="Image 2" class="image" data-name="wrong">
            <img src="#" alt="Image 3" class="image" data-name="wrong">
            <img src="#" alt="Image 4" class="image" data-name="correct">
            <img src="#" alt="Image 5" class="image" data-name="wrong">
            <img src="#" alt="Image 6" class="image" data-name="wrong">
            <img src="#" alt="Image 7" class="image" data-name="wrong">
            <img src="#" alt="Image 8" class="image" data-name="wrong">
            <img src="#" alt="Image 9" class="image" data-name="correct">
        </div>
    </div>
</div>

<script src="js/img-auth.js"></script>

@endsection
