@extends('layouts.layout')

@section('contents')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<!-- Contact Page Layout -->
<div class="container contact-page" style="padding: 50px; margin-top: 50px; margin-bottom: 50px; gap: 5px; background-color: #E8F7EC;">
    <div class="row">
        <!-- Left Container: Image and Description -->
        <div class="col-12 col-md-5 left-container" style="text-align: center;">
            <h1 style="font-size: 3rem; color: #22AF4A; font-weight: bold;">Contact Us!</h1>
            <p style="margin-top: 5px; font-size: 16px; align-items: justify;">
                For any inquiries, assistance, or feedback regarding our online services, please reach out to our support team. We are here to help you with any concerns or questions you may have.
            </p>
            <img src="{{ asset('img/contact.png') }}" alt="Contact Us Image" style="width: 60%; height: auto; margin-top: 5px; border-radius: 5px;">
        </div>

        <!-- Right Container: Contact Form -->
        <div class="col-12 col-md-6 right-container" style="background-color: #90D7A4; padding: 20px; border-radius: 8px;">
            <!-- Success Message -->
            @if (session('msg'))
                <div class="alert alert-success fade-out" style="margin-bottom: 20px;">
                    {{ session('msg') }}
                </div>
            @endif

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="alert alert-danger fade-out" style="margin-bottom: 20px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form Content -->
            <form action="/home/contact" method="POST">
                @csrf
                <!-- Name -->
                <label for="firstName" class="form-label" style="font-size: 14px;">First Name</label>
                <input name="First_Name" type="text" placeholder="Enter First Name" class="form-control" id="firstName" value="{{ old('First_Name') }}" style="font-size: 14px; padding: 8px; margin-bottom: 10px;">

                <!-- Surname -->
                <label for="lastName" class="form-label" style="font-size: 14px;">Last Name</label>
                <input name="Last_Name" type="text" placeholder="Enter Last Name" class="form-control" id="lastName" value="{{ old('Last_Name') }}" style="font-size: 14px; padding: 8px; margin-bottom: 10px;">

                <!-- Email -->
                <label for="email" class="form-label" style="font-size: 14px;">Email</label>
                <input name="Email_Address" type="email" placeholder="Enter Email Address" class="form-control" id="email" value="{{ old('Email_Address') }}" style="font-size: 14px; padding: 8px; margin-bottom: 10px;">

                <!-- Message -->
                <label for="message" class="form-label" style="font-size: 14px;">Message</label>
                <textarea name="Query" placeholder="Enter your message" class="form-control" id="message" style="font-size: 14px; padding: 8px; margin-bottom: 20px; height: 100px;">{{ old('Query') }}</textarea>

                <!-- Submit -->
                <button type="submit" class="btn w-100" style="background-color: rgb(12, 160, 106); color: white; font-size: 14px; padding: 8px; border: none; transition: background-color 0.3s ease;">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript to hide messages -->
<script>
    // Hide success and error messages after 5 seconds
    setTimeout(() => {
        const alerts = document.querySelectorAll('.fade-out');
        alerts.forEach(alert => {
            alert.style.transition = 'opacity 0.3s ease-out';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500); // Remove from DOM after fading out
        });
    }, 5000);
</script>

@endsection
