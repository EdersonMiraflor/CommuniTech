@extends('layouts.layout')

@section('contents')
@csrf
<style>
   /* Back button */
.back-button {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

/* Button styles */
.onlymarriagebottom {
    position: absolute;
    background-color: #04AA6D;
    color: white;
    padding: 10px 0; /* Add padding to the top and bottom */
    border: none;
    border-radius: 5px;
    text-align: center;
    font-size: 18px;
    text-decoration: none;
    transition: background-color 0.3s ease;
    width: 100%; /* Matches the full width of the image */
    display: block; /* Ensures it stretches across */
}

.onlymarriagebottom:hover {
    background-color: #bce7c8;
    color: white;
}



/* Button at the bottom */
.onlymarriagebottom {
    top: 4360px; /* Adjust as needed */
    left: 1210px;
    transform: translateX(-50%);
}
    </style>
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<div class="deathbg-image">
        <img src="{{ asset('img/Certificate-of-Death/page-0.jpg') }}" alt="Certificate of Death">
        <img src="{{ asset('img/Certificate-of-Death/page-1.jpg') }}" alt="Certificate of Death">
        
        
    </div>

    
        <!-- Back Button -->
<a href="javascript:history.back()" class="btn btn-success back-button">BACK</a>
  
    @endsection

    <!--

<a href="{{ url('/view-death-cert') }}" class="onlymarriagetop"> << PREVIOUS PAGE</a>
        <a href="{{ url('/another-link') }}" class="onlymarriagebottom"><< PREVIOUS PAGE</a>

-->

