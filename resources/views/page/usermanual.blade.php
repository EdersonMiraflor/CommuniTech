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
        <p>After logging in to your account, you will be directed in the dashboard. Now, click the <b>SERVICES</b>  in the navigation bar.</p>
        <img src="{{ asset('img/step1.png') }}" alt="Step 1 Image">
    </div>
    
    <!-- Step 2 -->
    <div class="step">
        <h3>Step 2</h3>
        <p>Next, there will be three certificates for you to choose from, select the type of certificate(s) you want  to issue (for example, live birth).</p>
        <img src="{{ asset('img/step2.png') }}" alt="Step 2 Image">
    </div>

    <!-- Step 3 -->
    <div class="step">
        <h3>Step 3</h3>
        <p>Please complete all the required fields in the form with the necessary details</p>
        <img src="{{ asset('img/step3.png') }}" alt="Step 3 Image">
    </div>

    <!-- Step 4 -->
    <div class="step">
        <h3>Step 4</h3>
        <p>After filling up the form, please agree to the terms and condition then click <b>SUBMIT</b>.</p>
        <img src="{{ asset('img/step4.png') }}" alt="Step 4 Image">
    </div>

    <!-- Step 5 -->
    <div class="step">
        <h3>Step 5</h3>
        <p>A pop-up will appear, and make sure to click the green button to continue.</p>
        <img src="{{ asset('img/step5.png') }}" alt="Step 5 Image">
    </div>

    <!-- Step 6 -->
    <div class="step">
        <h3>Step 6</h3>
        <p>Proceed to payment by clicking the green button.</p>
        <img src="{{ asset('img/step6.png') }}" alt="Step 6 Image">
    </div>

    <!-- Step 7 -->
    <div class="step">
        <h3>Step 7</h3>
        <p>Accomplish the payment form, scan the QR code, pay through GCASH, and upload the image of your GCASH receipt.</p>
        <img src="{{ asset('img/step7.png') }}" alt="Step 7 Image">
    </div>

    <!-- Step 8 -->
    <div class="step">
        <h3>Step 8</h3>
        <p>You will see a notification of complete online application.</p>
        <img src="{{ asset('img/step8.png') }}" alt="Step 8 Image">
    </div>

    <!-- Step 9 -->
    <div class="step">
        <h3>Step 9</h3>
        <p>Click your profile name on the upper-right corner and select <b>My Account</b>.</p>
        <img src="{{ asset('img/step9.png') }}" alt="Step 9 Image">
    </div>

    <!-- Step 10 -->
    <div class="step">
        <h3>Step 10</h3>
        <p>Click <b>Request History</b>.</p>
        <img src="{{ asset('img/step10.png') }}" alt="Step 10 Image">
    </div>

    <!-- Step 11 -->
    <div class="step">
        <h3>Step 11</h3>
        <p>You will see your payment record here.</p>
        <img src="{{ asset('img/step11.png') }}" alt="Step 11 Image">
    </div>

    <!-- Step 12 -->
    <div class="step">
        <h3>Step 12</h3>
        <p>Wait for the approval of your document application. Then, check your email to get the OTP code sent by the system.</p>
        <img src="{{ asset('img/step12.png') }}" alt="Step 12 Image">
    </div>

    <!-- Step 13 -->
    <div class="step">
        <h3>Step 13</h3>
        <p>As you are redirected back to the website, enter the 6-digit OTP code to open the civil document.</p>
        <img src="{{ asset('img/step13.png') }}" alt="Step 13 Image">
    </div>

    <!-- Step 14 -->
    <div class="step">
        <h3>Step 14</h3>
        <p>The system will verify your OTP code and display the downloadable file.</p>
        <img src="{{ asset('img/step14.png') }}" alt="Step 14 Image">
    </div>

        <!-- Step 15 -->
        <div class="step">
        <h3>Step 15</h3>
        <p>You can now view the file.</p>
        <img src="{{ asset('img/step15.png') }}" alt="Step 15 Image">
    </div>

    <!-- Step 16 -->
    <div class="step">
        <h3>Step 16</h3>
        <p>The system will send you an e-copy of the processed civil document.</p>
        <img src="{{ asset('img/step16.png') }}" alt="Step 16 Image">
    </div>

    <!-- Step 16 -->
    <div class="step">
        <h3>Step 17</h3>
        <p>For the last step, you have the option to pick-up your document or avail the additional feature of our system for delivery services.</p>
        <img src="{{ asset('img/step17.png') }}" alt="Step 17 Image">
    </div>

</div>

@endsection