@extends('layouts.layout')
@section('contents')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<h1 style="padding-top: 40px; text-align:center;">Users History</h1>

<div class="wrapper document-details"  style="">
    <h1>User Id: {{ $useraddress-> User_Id}}</h1>
    <p>Date of Delivery: {{ $useraddress-> Pick_Up_Date}}</p>
    <p>Day of Delivery: {{ $useraddress-> User_Appointment}}</p>
    <p>Certificate Category: {{ $useraddress-> Cert_Type}}</p>
    <p>Certificate Quantity: {{ $useraddress-> Quantity}}</p>
</div>
<a href="/transactionform"> <--- Go Back to Transaction Page ---</a>
@endsection 