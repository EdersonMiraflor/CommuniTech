@extends('layouts.layout')
@section('contents')
    <h1 class="text-danger">index page</h1>
    <p class="text-success">This is Authentication Page</p>
<!--Sample Bootstrap Usage-->
    <img class="position-absolute top-20 start-50 translate-middle" style="width: 5rem;" src="img/Manito-Logo.png" alt="Logo of Manito">
<!--Proper Linking in Pages Usage-->
    <a href="/home/contact" style="text-align:center;">Go to Contact</a><br>
    <a href="/home/transaction" style="text-align:center;">Go to Transaction</a><br>
    <a href="/login" style="text-align:center;">Go to Login</a><br>
    <a href="/home" style="text-align:center;">Go to Home</a>
@endsection