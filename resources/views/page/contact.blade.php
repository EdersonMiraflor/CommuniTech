@extends('layouts.layout')
@section('contents')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<!-- Contact Page Layout -->
<div class="container contact-page" style="padding: 50px; margin-top: 50px; margin-bottom: 50px; gap: 5px; background-color: #E8F7EC;">
    <div class="row">
        <!-- Left Container: Image and Description -->
        <div class="col-12 col-md-5 left-container" style="text-align: center;">
            <h1 style="font-size: 3rem; color: #22AF4A; font-weight: bold;"> Contact Us! </h1>
        <p style="margin-top: 5px; font-size: 16px; align-items: justify;">For any inquiries, assistance, or feedback regarding the Manito Civil Registry online services, please reach out to our support team. We are here to help you with any concerns or questions you may have. </p>
            <img src="{{ asset('img/contact.png') }}" alt="Contact Us Image" style="width: 60%; height: auto; margin-top: 5px; border-radius: 5px;">
        </div>

        <!-- Right Container: Contact Form -->
        <div class="col-12 col-md-6 right-container" style="background-color: #ffffff; padding: 20px; border: 1px solid black; border-radius: 8px;">
            <!-- Form Content -->
            <form action="/home/contact" method="POST">
                @csrf
                <!-- Name -->
                <label for="firstName" class="form-label" style="font-size: 14px;">Name</label>
                <input name="First_Name" type="text" placeholder="First Name" class="form-control" id="firstName" style="border: 1px solid black; font-size: 14px; padding: 8px; margin-bottom: 10px;">

                <!-- Surname -->
                <label for="lastName" class="form-label" style="font-size: 14px;">Surname</label>
                <input name="Last_Name" type="text" placeholder="Last Name" class="form-control" id="lastName" style="border: 1px solid black; font-size: 14px; padding: 8px; margin-bottom: 10px;">

                <!-- Email -->
                <label for="email" class="form-label" style="font-size: 14px;">Email</label>
                <input name="Email_Address" type="email" placeholder="Enter Email Address" class="form-control" id="email" style="border: 1px solid black; font-size: 14px; padding: 8px; margin-bottom: 10px;">

                <!-- Message -->
                <label for="message" class="form-label" style="font-size: 14px;">Message</label>
                <textarea name="Query" placeholder="Enter your message" class="form-control" id="message" style="border: 1px solid black; font-size: 14px; padding: 8px; margin-bottom: 20px; height: 100px;"></textarea>

                <!-- Submit -->
                <button type="submit" class="btn w-100" style="background-color: #28a745; color: white; border: 1px solid black; font-size: 14px; padding: 8px;">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection