@extends('layouts.layout')

@section('contents')
@php
    $requestedCertificate = "Birth Certificate"; // Define the variable if needed
@endphp

<h1 class="text-center form-title">Payment Form</h1>
<br>
<div class="container form-container">
    <div class="form-and-image">
        <!-- Left Section: User Form -->
        <div class="form-section" style="margin-top: 100px;">
            <form action="{{ url('payment') }}" method="POST" enctype="multipart/form-data" class="payment-form">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user() ? Auth::user()->name . ' ' . (Auth::user()->Middle_Name ?? '') . ' ' . (Auth::user()->Last_Name ?? '') : '' }}" readonly>
                </div>

                <div class="form-group">
                    <label for="requested_certificate">Requested Certificate</label>
                    <input type="text" name="requested_certificate" id="requested_certificate" class="form-control" value="{{ $requestedCertificate ?? '' }}" readonly>
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

                <div class="form-group text-center">
                    <input type="submit" value="Save" class="btn btn-success btn-submit">
                </div>
            </form>
        </div>

        <!-- Right Section: Payment QR and Admin Options -->
        <div class="image-section">
            @auth
                @if ($payments->isNotEmpty())
                    @php
                        $data = $payments->first(); // Get the first record
                    @endphp
                    <div class="payment-image">
                        <h3 style="text-align: center; font-family: 'Pacifico', cursive; color: #2e6ab1;">Scan For Payment</h3>
                        <img src="{{ asset($data->photo) }}" width="500" height="500" class="img-responsive" style="padding-bottom: 1px; margin: 50px; border: 5px solid #ff6f61; border-radius: 20px;">
                    </div>
                @endif

                @if (Auth::user()->Credential === 'admin')
                <form action="{{ url('payment') }}" method="POST" enctype="multipart/form-data" class="admin-form">
                    @csrf
                    <div class="form-group">
                        <label for="photo">Change QR Photo</label>
                        <input class="form-control" name="photo" type="file" id="photo">
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" value="Change" class="btn btn-warning btn-submit">
                    </div>
                </form>
                @endif
            @endauth
        </div>
    </div>
</div>
@endsection

<style>
/* Updated CSS with cute design elements */
body {
    font-family: 'Poppins', sans-serif;
    background-color: #f8f9fc;
    margin: 0;
    padding: 0;
}

.form-title {
    color: #6f42c1;
    font-size: 32px;
    font-family: 'Pacifico', cursive;
    margin-top: 30px;
    margin-bottom: 30px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
}

.form-container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 40px;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    border: 1px solid #f2f2f2;
    text-align: center;
}

.form-and-image {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 30px;
}

.form-section, .image-section {
    width: 48%;
}

.form-section .form-control {
    border-radius: 20px;
    border: 2px solid #ff6f61;
    padding: 10px;
    margin-bottom: 20px;
    font-size: 16px;
    transition: all 0.3s ease-in-out;
}

.form-section .form-control:focus {
    border-color: #6f42c1;
    box-shadow: 0 0 8px rgba(111, 66, 193, 0.6);
}

.btn-submit {
    border-radius: 25px;
    padding: 10px 30px;
    font-size: 16px;
    transition: all 0.3s ease;
}

.btn-submit:hover {
    background-color: #6f42c1;
    color: #fff;
    transform: scale(1.05);
}

.payment-image img {
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.payment-image img:hover {
    transform: scale(1.05);
}

.admin-form .form-group {
    margin-top: 20px;
}

.admin-form input[type="submit"] {
    background-color: #ff6f61;
    color: white;
    border-radius: 25px;
}

.admin-form input[type="submit"]:hover {
    background-color: #f44336;
}

@media (max-width: 768px) {
    .form-and-image {
        flex-direction: column;
        align-items: center;
    }
    .form-section, .image-section {
        width: 100%;
    }
}
</style>
