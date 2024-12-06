@extends('layouts.layout')
@section('contents')
      
<br><br>
         <!--About Section Start-->
         <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <div class="container">
    <div class="about">
        <!-- Left Content 1 -->
        <div class="left-content1">
            <h1><strong>About Us</strong></h1>
            <p>At CommuniTech, we are dedicated to revolutionizing the way you interact with your local civil registry office in the Municipality of Manito, Albay. Our mission is to provide seamless, efficient, and accessible online services to meet all your civil registry needs.</p>

            <h2><strong>We offer services, including:</strong></h2>
            <ul>
                <li><strong>Birth Certificate Requests</strong></li>
                <li><strong>Marriage Certificate Requests</strong></li>
                <li><strong>Death Certificate Requests</strong></li>
            </ul>
        </div>

        <!-- Right Content -->
        <div class="right-content">
            <img src="{{ asset('img/aboutus.png') }}" alt="CommuniTech" class="about-image">
            <h1 class="image-caption">Welcome to CommuniTECH!</h1>
        </div>

        <!-- Left Content 2 -->
        <div class="left-content2">
            <h2><strong>Why Choose CommuniTECH?</strong></h2>
            <ul>
                <li><strong>Convenience:</strong> No more long lines or waiting times. Access our services from the comfort of your home or office.</li>
                <li><strong>Efficiency:</strong> Our streamlined process ensures quick turnaround times for all your requests.</li>
                <li><strong>Security:</strong> Your personal information is our top priority. We use state-of-the-art security measures to protect your data.</li>
            </ul>

            <h2><strong>Payment Method</strong></h2>
            <p>For your convenience, we exclusively accept payments through <span class="highlight"><strong>GCash</strong></span>. This ensures a secure, quick, and hassle-free transaction process, allowing you to focus on what matters most.</p>
        </div>
    </div>
</div>

<!--Form Section End-->


<!-- Team section -->
<section class="team">
    <div class="team-container">
        <h2>CommuniTECH Team</h2>
        <div class="team-grid">
            <div class="team-member">
                <img src="{{ asset('img/romeo.jpg') }}" alt="Project Manager">
                <p class="name">Romeo Banzuela</p>
                <p class="role">Project Manager</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('img/princess.jpg') }}" alt="System Analyst">
                <p class="name">Princess Malanyaon</p>
                <p class="role">System Analyst</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('img/coleen.png') }}" alt="Front-end Developer">
                <p class="name">Coleen Lustre</p>
                <p class="role">Front-end Developer</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('img/eder.png') }}" alt="Back-end Developer">
                <p class="name">Ederson Miraflor</p>
                <p class="role">Back-end Developer</p>
            </div>
        </div>
    </div>
</section>
<!-- end of Team section -->


@endsection