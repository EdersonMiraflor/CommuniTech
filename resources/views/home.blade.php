@extends('layouts.layout')

@section('contents')


@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif

<!-- Home content -->

    <!-- Background with overlay to mimic opacity effect -->
    <div class="background-overlay" style="background-image: url('{{ asset('img/manitohall.jpg') }}');"></div>
    <section class="intro">
        <h1>Manito Civil Registry Online Services</h1>
        <p>Welcome to Communitech, a dedicated platform for the citizens of Manito. At Communitech, you can easily apply for vital records, including Certificates of Live Birth, Death Certificates, and Marriage Certificates. Our goal is to simplify the process, ensuring you can access these essential documents quickly and conveniently. Thank you for choosing Communitech, where your vital records are just a few clicks away.</p>
        <a href="#" class="btn-apply">Apply Certificate</a>
    </section>
</div>

<!-- Team Section -->
<section class="team">
    <h2>CommuniTECH Team</h2>
    <div class="team-grid">
        <!-- Team members' information -->
        <div class="team-member">
            <img src="{{ asset('img/romeo.jpg') }}" alt="Project Manager">
            <p class="name">Romeo Banzuela</p>
            <p class="role">Project Manager</p>
        </div>
        <div class="team-member">
            <img src="{{ asset('imag/princess.jpg') }}" alt="System Analyst">
            <p class="name">Princess Malanyaon</p>
            <p class="role">System Analyst</p>
        </div>
        <div class="team-member">
            <img src="{{ asset('img/coleen.png') }}" alt="Front-end Developer">
            <p class="name">Coleen Lustre</p>
            <p class="role">Front-end Developer</p>
        </div>
        <div class="team-member">
            <img src="{{ asset('imag/ederson.jpg') }}" alt="Back-end Developer">
            <p class="name">Ederson Miraflor</p>
            <p class="role">Back-end Developer</p>
        </div>
    
</section>
@endsection