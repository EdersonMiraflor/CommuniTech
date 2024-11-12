@extends('layouts.layout')
@section('contents')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<h1 style="padding-top: 40px; text-align:center;">Users History</h1>

<!--USER FORM ADDRESS 1
Explanation:
    -The variable useraddress in this view stores the value of variable userformadress in FormController at function showuserform
    -After the(->), are the attributes(column) in the database 
    -
-->
<div class="wrapper document-details"  style="">
    <h1>User Id: {{ $useraddress-> User_Id}}</h1>
    <p>Date of Delivery: {{ $useraddress-> Pick_Up_Date}}</p>
    <p>Day of Delivery: {{ $useraddress-> User_Appointment}}</p>
    <p>Certificate Category: {{ $useraddress-> Cert_Type}}</p>
    <p>Certificate Quantity: {{ $useraddress-> Quantity}}</p>
</div>
<a href="/transactionform"> <--- Go Back to Transaction Page ---</a>
@endsection 