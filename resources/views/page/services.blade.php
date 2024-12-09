@extends('layouts.layout')

@section('contents')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<div class="service-container" style="background-color: {{ $backgroundColor ?? '#E8F7EC' }};">
    <!-- Birth Services -->
    <div class="service-card">
        <div class="image-container">
            <img src="/img/birth.png" alt="Birth Services" class="service-image">
        </div>
        <h3>BIRTH SERVICES</h3>
        <div class="service-buttons">
            <a href="/home/services/form102" class="btn btn-primary">Birth Registration</a>
            <a href="{{ url('/view-birthhonly-cert') }}" class="btn btn-secondary">View Certificate</a>
            <a href="#" class="btn btn-secondary">Transaction Receipt</a>
        </div>
    </div>

    <!-- Marriage Services -->
    <div class="service-card">
        <div class="image-container">
            <img src="/img/marriage.png" alt="Marriage Services" class="service-image">
        </div>
        <h3>MARRIAGE SERVICES</h3>
        <div class="service-buttons">
            <a href="/home/services/marriageform" class="btn btn-primary">Marriage Registration</a>
            <a href="{{ url('/view-marriageonly-cert') }}" class="btn btn-secondary">View Certificate</a>
            <a href="#" class="btn btn-secondary">Transaction Receipt</a>
        </div>
    </div>

    <!-- Death Services -->
    <div class="service-card">
        <div class="image-container">
            <img src="/img/death.png" alt="Death Services" class="service-image">
        </div>
        <h3>DEATH SERVICES</h3>
        <div class="service-buttons">
            <a href="/home/services/deathform" class="btn btn-primary">Death Registration</a>
            <a href="{{ url('/view-deathonly-cert') }}" class="btn btn-secondary">View Certificate</a>
            <a href="#" class="btn btn-secondary">Transaction Receipt</a>
        </div>
    </div>
</div>
@endsection
