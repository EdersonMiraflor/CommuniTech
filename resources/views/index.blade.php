@extends('layouts.layout2')
@section('content')

<br><br><br><br><br>

<link rel="stylesheet" href="{{ asset('css/img-auth.css') }}">

<div class="container">
    <div class="left-side">
        <h1 class="title">CommuniTECH</h1>
        <h2 class="description">Are you a Citizen of Manito, Albay?</h2>
        <p class="sub-description">Select 3 pictures that are located in Manito, Albay.</p>
        <button class="button" id="verifyButton">Confirm</button>
    </div>
    <div class="right-side">
        <div class="images">
            <img src="img/auth-img/img1.jpg" alt="Image 1" class="image" data-name="correct">
            <img src="img/auth-img/img2.jpg" alt="Image 2" class="image" data-name="wrong">
            <img src="img/auth-img/img3.jpg" alt="Image 3" class="image" data-name="wrong">
            <img src="img/auth-img/nagaso.jpg" alt="Image 4" class="image" data-name="correct">
            <img src="img/auth-img/img5.jpg" alt="Image 5" class="image" data-name="wrong">
            <img src="img/auth-img/img6.jpg" alt="Image 6" class="image" data-name="wrong">
            <img src="img/auth-img/newImg1.jpg" alt="Image 4" class="image" data-name="wrong">
            <img src="img/auth-img/img5.jpg" alt="Image 5" class="image" data-name="wrong">
            <img src="img/auth-img/shoreline.jpg" alt="Image 6" class="image" data-name="correct">
        </div>
    </div>
</div>
<script src="js/img-auth.js"></script>


@endsection