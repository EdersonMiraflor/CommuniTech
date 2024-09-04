
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
  
@extends('layouts.layout2')
@section('content')

<br><br><br><br><br>
<h1 class="text">To Ensure You are From Manito</h1>
    <h1 class="text">Please Select A Place that Belongs to Manito Albay</h1>
    <div class="images">
        <img src="img/auth-img/img1.jpg" alt="Image 1" class="image" data-name="correct">
        <img src="img/auth-img/img2.jpg" alt="Image 2" class="image" data-name="wrong">
        <img src="img/auth-img/img3.jpg" alt="Image 3" class="image" data-name="wrong">
        <img src="img/auth-img/img4.jpg" alt="Image 4" class="image" data-name="wrong">
        <img src="img/auth-img/img5.jpg" alt="Image 5" class="image" data-name="wrong">
        <img src="img/auth-img/img6.jpg" alt="Image 6" class="image" data-name="wrong">
    </div>
<button class="button" id="verifyButton">Verify</button>
<script src="js/main.js"></script>
@endsection