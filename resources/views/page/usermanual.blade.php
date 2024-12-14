@extends('layouts.layout')
@section('contents')

<br><br>

<head>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

<div class="user-manual-container" style="margin-bottom:70px;">
    <h1>Procedures</h1>
    
    <!-- Step 1 -->
    <div class="step">
        <h3>Step 1</h3>
        <p>After logging in to your account, you will be directed in the dashboard. Now, click the “SERVICES”  in the navigation bar, it’s located between the home and transactions tab.</p>
        <img src="{{ asset('images/step1.png') }}" alt="Step 1 Image">
    </div>
    
    <!-- Step 2 -->
    <div class="step">
        <h3>Step 2</h3>
        <p>Next, there will be three certificates for you to choose from, select the type of certificate(s) you want  to issue (live birth, death, marriage).</p>
        <img src="{{ asset('images/step2.png') }}" alt="Step 2 Image">
    </div>

    <!-- Step 3 -->
    <div class="step">
        <h3>Step 3</h3>
        <p>Now fill in the form and each of its needed details, then after filling up all the form, agree to the 
        terms and condition then click ‘REGISTER’.</p>
        <img src="{{ asset('images/step3.png') }}" alt="Step 3 Image">
    </div>

    <!-- Step 4 -->
    <div class="step">
        <h3>Step 4</h3>
        <p>After that, you are required to pay through G-Cash, in order for the admins to process your request(s).</p>
        <img src="{{ asset('images/step4.png') }}" alt="Step 4 Image">
    </div>

    <!-- Step 5 -->
    <div class="step">
        <h3>Step 5</h3>
        <p>Then your request(s) will be in pending status while you wait(might take long) for admin approval. You can check your transaction history to track whether you’ve received the approval from the admin.</p>
        <img src="{{ asset('images/step5.png') }}" alt="Step 5 Image">
    </div>

    <!-- Step 6 -->
    <div class="step">
        <h3>Step 6</h3>
        <p>Once the admin approves your request, you will receive a QR code and the date for your appointment at the civil registry office. You can then go to the civil registry office for your print-out requested form.</p>
        <p>Note: Remember to save the QR code on your device or print the provided appointment slip as you will need to show it at the civil registry office to authenticate (scan) that you are the one who made the request.</p>
        <img src="{{ asset('images/step6.png') }}" alt="Step 6 Image">
    </div>
</div>

@endsection