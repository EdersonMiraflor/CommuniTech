@extends('layouts.layout2')
@section('content')

<link rel="stylesheet" href="{{ asset('css/img-auth.css') }}">

<div class="content">
    <!-- Left Side -->
    <div class="left-side">
        <!-- Logo as a background overlay -->
        <img src="{{ asset('/img/manito-logo.png') }}" alt="Manito Logo" class="logo-overlay">
        
        <h1 class="title">CommuniTECH</h1>
        <h2 class="description">Are you a Citizen of Manito, Albay?</h2>
        <p class="sub-description">Select 3 pictures that are located in Manito, Albay.</p>
        <button class="button" id="verifyButton">Confirm</button>
    </div>

    <!-- Right Side -->
    <div class="right-side">
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
