@extends('layouts.layout')
@section('contents')

<br><br>
         <!--Privacy Policy Section Start-->
         <link rel="stylesheet" href="{{ asset('css/main.css') }}">

<body>

<div class="container">
            <div class="privacypolicy">
         <div class="left-content">
    <h1><strong>Privacy Policy</strong></h1>

    <section>
        <p>Welcome to CommuniTECH, the dedicated platform for the citizens of Manito. Our goal is to simplify the process of obtaining vital records. This Privacy Policy outlines how we collect, use, and protect your personal information.</p>

        <h2><strong>Information We Collect</strong></h2>
        <ul>
            <li>Personal information: When you register or apply for a vital record, we collect personal information such as your name, address, date of birth, contact information, and other relevant details.</li>
            <li>Payment information: For processing payments through GCash, we collect payment information, including your GCash account number, payment method, and transaction information.</li>
            <li>Device information: We may collect information about your device, including your IP address, browser type, and operating system to enhance your user experience.</li>
        </ul>

        <h2><strong>How We Use Your Information</strong></h2>
        <ul>
            <li>To process and manage your applications for vital records.</li>
            <li>To provide customer support and address your inquiries.</li>
            <li>To improve our platform and services, including through data analysis.</li>
            <li>To comply with legal and regulatory requirements.</li>
        </ul>

        <h2><strong>Information Sharing and Disclosure</strong></h2>
        <ul>
            <li>We do not sell or rent your personal information to third parties.</li>
            <li>We may share your information with:</li>
                <ul>
                    <li>Manito Civil Registry Office: To process your application for vital records.</li>
                    <li>Payment Processors: To facilitate payments through GCash.</li>
                    <li>Legal Authorities: When required by law or regulation.</li>
                </ul>
        </ul>

        <h2><strong>Data Security</strong></h2>
        <ul>
            <li>We implement appropriate security measures to protect your personal information from unauthorized access, disclosure, alteration, and destruction.</li>
        </ul>

        <h2><strong>Your Rights</strong></h2>
        <ul>
            <li>You have the right to:</li>
                <ul>
                    <li>Access and review your personal information.</li>
                    <li>Request corrections to any inaccuracies in your information.</li>
                    <li>Request the deletion of your personal information, subject to legal and regulatory requirements.</li>
                </ul>
        </ul>

        <h2><strong>Changes to This Privacy Policy</strong></h2>
        <ul>
            <li>We may update this Privacy Policy from time to time to reflect changes in our practices or legal requirements.</li>
            <li>We will notify you of any significant changes by posting the updated policy on our platform and updating the effective date.</li>
        </ul>

        <h2><strong>Contact Us</strong></h2>
        <p>If you have any questions or concerns about this Privacy Policy or our data practices, please contact us at:</p>
        <p>CommuniTECH - Manito Civil Registry Online Services</p>
        <p>Phone: 09123456789</p>
        <p>Address: Manito, Albay</p>

        <p>By using CommuniTECH, you agree to the terms of this Privacy Policy. Thank you for trusting us with your personal information.</p>

        <div class="right-content">
        <img src="{{ asset('img/aboutus.png') }}" alt="CommuniTech" class="about-image">
        <h1 class="image-caption">Welcome to CommuniTECH !</h1>
    </div>
    </section>
</body>

<br><br>


@endsection