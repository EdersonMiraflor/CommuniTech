    @extends('layouts.layout')

    @section('contents')

    <br>
    <div class="container form-container" style="margin-bottom: 50px">
        <h1 class="text-center form-title"><b>Payment</b></h1>
        <div class="form-and-image">

            <!-- Left Section: User Form -->
            <div class="form-section">
            <form action="{{ route('store.record') }}" method="POST" enctype="multipart/form-data" class="payment-form">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" 
                            value="{{ Auth::user() ? Auth::user()->name . ' ' . (Auth::user()->Middle_Name ?? '') . ' ' . (Auth::user()->Last_Name ?? '') : '' }}" 
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="requested_certificate">Requested Certificate</label>
                        <input type="text" name="requested_certificate" id="requested_certificate" class="form-control" value="{{ $requestedCertificate ?? '' }}" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
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
                            <!-- Barangay Options -->
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
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <input type="submit" value="Save" class="btn btn-success btn-submit">
                    </div>
                </form>
            </div>
            @if(session('flash_message'))
            @if(session('flash_message'))
<!-- Overlay -->
<div id="overlay" style="
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3); /* Semi-transparent black */
    z-index: 9998; /* Below the flash message but above the content */
"></div>

<!-- Flash Message -->
<div id="flashMessage" style="
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    color: black;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    z-index: 9999; /* Above the overlay */
">
    <p>{{ session('flash_message') }}</p>
</div>
@endif
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const overlay = document.getElementById('overlay');
        const flashMessage = document.getElementById('flashMessage');
        
        if (overlay && flashMessage) {
            // Set timeout to remove overlay and flash message after 20 seconds
            setTimeout(() => {
                overlay.remove(); // Remove overlay
                flashMessage.remove(); // Remove flash message
            }, 20000); // 20000 milliseconds = 20 seconds
        }
    });
    // Make the flash message disappear after 20 seconds
    setTimeout(function() {
        const flashMessage = document.getElementById('flashMessage');
        if (flashMessage) {
            flashMessage.style.transition = "opacity 1s ease";
            flashMessage.style.opacity = "0";
            setTimeout(() => flashMessage.remove(), 1000); // Remove the element after fading out
        }
    }, 10000); // 20 seconds
</script>
@endif
            <!-- User Form End -->

            <div class="image-section">
        @auth
            <!-- Check if there's a QR Code record -->
            @if ($qrscan)
                <div class="payment-image">
                    <h3 class="text-center" style="font-family: Arial, sans-serif; color: #28a745;">Scan For Payment</h3>
                    <img src="{{ asset('storage/uploads/qrcode/' . $qrscan->photo) }}" width="50%" class="img-responsive" 
    style="margin: 50px; border: 5px solid rgb(74, 172, 49); border-radius: 20px;">
                </div>
            @else
                <div class="no-qr-message">
                    <h3 class="text-center" style="font-family: Arial, sans-serif; color: #28a745;">No QR Code Found</h3>
                    <p class="text-center" style="font-family: Arial, sans-serif; color: #6c757d;">Please insert a QR Code by clicking Choose File below.</p>
                </div>
            @endif


            <!-- Admin Options -->
            @if (Auth::user()->Credential === 'admin')
                @if (session('error_message'))
                    <div class="alert alert-danger">
                        {{ session('error_message') }}
                    </div>
                @endif
                <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data" class="admin-form">
                    @csrf
                    <div class="form-group">
                        <label for="photo">Change QR Photo</label>
                        <input class="form-control" name="photo" type="file" id="photo">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Change QR Code</button>
                    </div>
                </form>
            @endif
        @endauth
    </div>


        </div>
    </div>

    @endsection

    <style>
        /* Base Styles */
    body {
        background-color: #f8f9fc;
        margin: 0;
        padding: 0;
    }

    .form-title {
        color: #28a745;
        font-size: 32px;
        font-family: Arial, Helvetica, sans-serif;
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
        gap: 30px;
    }

    .form-section, .image-section {
        width: 48%;
    }

    .payment-image img,
    .no-qr-message img {
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .payment-image img:hover,
    .no-qr-message img:hover {
        transform: scale(1.05);
    }

    .no-qr-message {
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
    }

    .btn-submit {
        border-radius: 25px;
        padding: 10px 30px;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .btn-submit:hover {
        background-color: rgb(67, 181, 93);
        color: #fff;
        transform: scale(1.05);
    }

    /* Responsive layout */
    @media (max-width: 768px) {
        .form-and-image {
            flex-direction: column; /* Stack the form and image vertically */
            gap: 20px;
        }

        .form-section, .image-section {
            width: 100%; /* Make both sections take full width on small screens */
        }

        .form-title {
            font-size: 28px; /* Adjust title font size for smaller screens */
        }

        .payment-image img,
        .no-qr-message img {
            width: 90%; /* Ensure the image fits within the container */
        }
    }

    @media (max-width: 480px) {
        .form-title {
            font-size: 24px; /* Make the title smaller on very small screens */
        }

        .form-container {
            padding: 20px; /* Adjust padding for smaller screens */
        }

        .btn-submit {
            font-size: 14px; /* Adjust button size for small screens */
            padding: 8px 20px;
        }
    }

    </style>