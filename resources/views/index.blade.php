
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