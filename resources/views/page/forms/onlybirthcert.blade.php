@extends('layouts.layout')

@section('contents')
@csrf
<style>
        .onlymarriagetop,
.onlymarriagebottom {
    position: absolute;
    background-color: #04AA6D;
    color: white;
    padding: 6px 20px;
    border: none;
    border-radius: 5px;
    text-align: center;
    font-size: 18px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.onlymarriagetop:hover,
.onlymarriagebottom:hover {
    background-color: #bce7c8;
    color: white;
}

/* Button at the top */
.onlymarriagetop {
    top: 170px; /* Adjust as needed */
    left: 300px;
    transform: translateX(-50%);
    
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
        <img src="{{ asset('img/Certificate-of-Live-Birth/page-0.jpg') }}" alt="Certificate of Death">
        <img src="{{ asset('img/Certificate-of-Live-Birth/page-1.jpg') }}" alt="Certificate of Death">
        
        <a href="{{ url('/view-death-cert') }}" class="onlymarriagetop"> << PREVIOUS PAGE</a>
        <a href="{{ url('/another-link') }}" class="onlymarriagebottom"><< PREVIOUS PAGE</a>
    </div>
    @endsection