@extends('layouts.layout')

@section('contents')
<style>
    .service-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: 20px;
    }

    .service-card {
        background-color: #BCE7C8;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 300px;
        margin: 30px;
    }

    .image-container {
        margin-bottom: 15px;
    }

    .service-image {
        width: 100%; /* Make image responsive */
        max-width: 220px; /* Limit image size */
        height: auto;
        margin-bottom: 10px;
    }

    h3 {
        font-size: 1.2em;
        margin-bottom: 15px;
    }

    .service-buttons {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .service-buttons .btn {
        display: inline-block;
        background-color: #fff;
        border: 1px solid #000;
        padding: 10px;
        text-align: center;
        color: #000;
        text-decoration: none;
        border-radius: 5px;
        font-size: 0.9em;
    }

    .service-buttons .btn-primary {
        background-color: #E8F7EC;
        border-color: #000;
    }

    .service-buttons .btn-secondary {
        background-color: #E8F7EC;
        border-color: #000;
    }

    .service-buttons .btn-primary:hover {
        background-color: #90D7A4; /* Slightly darker shade of the original background color */
        border-color: #000; /* Slightly darker shade of the original border color */
    }

    .service-buttons .btn-secondary:hover {
        background-color: #90D7A4; /* Slightly darker shade of the original background color */
        border-color: #000; /* Slightly darker shade of the original border color */
    }

    @media (max-width: 768px) {
        .service-container {
            flex-direction: column;
            align-items: center;
        }

        .service-card {
            width: 90%; /* Adjust card width on smaller screens */
            margin: 10px 0;
        }

        h3 {
            font-size: 1.1em;
        }
    }
    
    @media (max-width: 480px) {
        .service-card {
            width: 100%; /* Full width on very small screens */
        }

        h3 {
            font-size: 1em;
        }
    }
</style>

<div class="service-container">
    <!-- Birth Services -->
    <div class="service-card">
        <div class="image-container">
            <img src="{{ asset('img/birth.png') }}" alt="Birth Services" class="service-image">
        </div>
        <h3>BIRTH SERVICES</h3>
        <div class="service-buttons">
            <a href="{{ route('birth.registration') }}" class="btn btn-primary">Birth Registration</a>
            <a href="{{ route('birth.certificate') }}" class="btn btn-secondary">View Certificate</a>
            <a href="{{ route('birth.receipt') }}" class="btn btn-secondary">Transaction Receipt</a>
        </div>
    </div>

    <!-- Marriage Services -->
    <div class="service-card">
        <div class="image-container">
            <img src="{{ asset('img/marriage.png') }}" alt="Marriage Services" class="service-image">
        </div>
        <h3>MARRIAGE SERVICES</h3>
        <div class="service-buttons">
            <a href="{{ route('marriage.registration') }}" class="btn btn-primary">Marriage Registration</a>
            <a href="{{ route('marriage.certificate') }}" class="btn btn-secondary">View Certificate</a>
            <a href="{{ route('marriage.receipt') }}" class="btn btn-secondary">Transaction Receipt</a>
        </div>
    </div>

    <!-- Death Services -->
    <div class="service-card">
        <div class="image-container">
            <img src="{{ asset('img/death.png') }}" alt="Death Services" class="service-image">
        </div>
        <h3>DEATH SERVICES</h3>
        <div class="service-buttons">
            <a href="{{ route('death.registration') }}" class="btn btn-primary">Death Registration</a>
            <a href="{{ route('death.certificate') }}" class="btn btn-secondary">View Certificate</a>
            <a href="{{ route('death.receipt') }}" class="btn btn-secondary">Transaction Receipt</a>
        </div>
    </div>
</div>
@endsection
