@extends('layouts.layout')

@section('contents')
@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
/* Slideshow container takes full width */

.banners {
    margin: 0;
    padding:0;
    display: flex; /* Use flexbox for alignment */
    align-items: center; /* Center vertically */
    justify-content: center; /* Center horizontally */
    text-align: center;
    
}

.slideshow-container {
    position: relative;
    max-width: 90%; /* Optional: Adjust width */
    aspect-ratio: 16 / 9; /* Maintain aspect ratio */
    overflow: hidden; /* Hide overflowing content */
    display: flex;
    justify-content: center;
    align-items: center;
}


/* Images inside the slideshow */
.mySlides {
    width: 100%;
    aspect-ratio: 16 / 9;
    object-fit: cover; /* Ensures proper scaling */
}

/* Navigation buttons */
.slideshow-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    color: white;
    border: none;
    cursor: pointer;
    padding: 10px 20px;
    z-index: 10;
}

.slideshow-button.left {
    left: 10px;
}

.slideshow-button.right {
    right: 10px;
}

.slideshow-button:hover {
    background-color: rgba(0, 0, 0, 0.8); /* Darker background on hover */
}

/* Optional: Make adjustments for smaller screen sizes */
@media (max-width: 1000px) {
    .slideshow-container {
        max-width: 100%; /* Ensure the container uses full width */
        padding: 0; /* Remove any padding */
        margin: 0; /* Ensure no margin */
    }
}

</style>

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

        <!--banner section-->
        <div class="banners">
    <div class="slideshow-container">
        <img class="mySlides img-16-9" src="{{ asset('img/rider-banner.png') }}">
        <img class="mySlides img-16-9" src="{{ asset('img/municipalhall.jpg') }}">
        <img class="mySlides img-16-9" src="{{ asset('img/rider-banner.png') }}">
        <img class="mySlides img-16-9" src="{{ asset('img/rider-banner.png') }}">

        <button class="slideshow-button left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="slideshow-button right" onclick="plusDivs(1)">&#10095;</button>
    </div>
</div>

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

<script> /* SCRIPT FOR SLIDESHOW */
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
            showDivs(slideIndex += n);
            }

            function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
            }
    </script>
@endsection
