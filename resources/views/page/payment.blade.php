@extends('layouts.layout')
@section('contents')
@php
    $requestedCertificate = "Birth Certificate"; // Define your variable here
@endphp

<h1 class="text-center form-title">Payment Form</h1>
<br>
<div class="container form-container">
    <div class="form-and-image">
        <!-- Form Section (Left) -->
        <div class="form-section">
            <form action="{{ url('payment') }}" method="POST" enctype="multipart/form-data" class="payment-form">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name . ' ' . Auth::user()->Middle_Name . ' ' . Auth::user()->Last_Name }}"required readonly>
                </div>

                <div class="form-group">
                    <label for="requested_certificate">Requested Certificate</label>
                    <input type="text" name="requested_certificate" id="requested_certificate" class="form-control" value="{{ $requestedCertificate }}" required readonly>
                </div>

                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Enter quantity">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Enter your address">
                </div>

                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter your mobile number">
                </div>

                <div class="form-group">
                    <label for="barangay">Barangay</label>
                    <select id="barangay" name="barangay" class="form-control" required>
                        <option value="">Select</option>
                        <option value="Cabacongan">Cabacongan</option>
                        <option value="Cawayan">Cawayan</option>
                        <option value="Malobago">Malobago</option>
                        <option value="Tinapian">Tinapian</option>
                        <option value="Manumbalay">Manumbalay</option>
                        <option value="Buyo">Buyo</option>
                        <option value="IT-Ba">IT-Ba</option>
                        <option value="Cawit">Cawit</option>
                        <option value="Balasbas">Balasbas</option>
                        <option value="Bamban">Bamban</option>
                        <option value="Pawa">Pawa</option>
                        <option value="Hulugan">Hulugan</option>
                        <option value="Balabagon">Balabagon</option>
                        <option value="Cabit">Cabit</option>
                        <option value="Nagotgot">Nagotgot</option>
                        <option value="Inang Maharang">Inang Maharang</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="proof">Proof Of Payment</label>
                    <input class="form-control" name="proof" type="file" id="proof">
                </div><br>
            @auth
                {{-- Check if the user is admin --}}
                @if (Auth::user()->Credential == 'admin')
                <div class="form-group">
                    <label for="photo">Change Qr Photo</label>
                    <input class="form-control" name="photo" type="file" id="photo">
                </div>
                @endif
            @endauth
                <div class="form-group text-center">
                    <input type="submit" value="Save" class="btn btn-success btn-submit">
                </div>
            </form>
        </div>

        <!-- QR Code Image Section (Right) -->
        <div class="image-section">
            @foreach($payments as $data)
            @if($payments->isNotEmpty())
                @php
                    $data = $payments->first(); // Get the first (and only) record
                @endphp
                <div class="payment-image">
                    <h3 style="text-align: center;">Scan For Payment</h3>
                    <img src="{{ asset($data->photo) }}" width="500" height="500" class="img-responsive" style="padding-bottom: 1px; margin: 50px 50px 50px 50px; 20px; border: 5px solid black;">
                </div>
            @endif
            @endforeach
        </div>
    </div>
</div>

@endsection

<style>
    /* Global Styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f7fc;
        margin: 0;
        padding: 0;
    }

    .form-title {
        color: #2e6ab1;
        font-size: 30px;
        margin-top: 20px;
        margin-bottom: 30px;
    }

    .form-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-and-image {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 30px;
    }

    .form-section, .image-section {
        width: 48%; /* Adjusts both sections to take equal space */
    }

    .payment-form {
        display: flex;
        flex-direction: column;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        font-weight: bold;
        font-size: 14px;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
        margin-top: 5px;
    }

    .form-control:focus {
        outline: none;
        border-color: #4e88fc;
    }

    select.form-control {
        cursor: pointer;
    }

    .btn-submit {
        background-color: #4e88fc;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #377adf;
    }

    .payment-image img {
        border-radius: 8px;
        transition: transform 0.3s ease-in-out;
    }

    .payment-image img:hover {
        transform: scale(1.05);
    }

    .payment-image {
        margin-bottom: 30px;
    }

    /* Ensures responsiveness */
    @media (max-width: 768px) {
        .form-and-image {
            flex-direction: column;
            align-items: center;
        }

        .form-section, .image-section {
            width: 100%; /* Stack sections vertically on smaller screens */
        }
    }
</style>
