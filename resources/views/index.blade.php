@extends('layouts.layout2')
@section('content')

<br><br><br><br><br>
<div class="container" style="display: flex; justify-content: space-between; align-items: center; padding: 20px;">
    <div class="left-side" style="flex: 1; display: flex; flex-direction: column; align-items: center; text-align: center;">
        <h1 class="title" style="font-size: 3rem; font-weight: bold; margin-bottom: 10px; margin-top: 0px">CommuniTECH</h1>
        <h2 class="description" style="font-size: 24px; margin-bottom: 5px;">Are you a Citizen of Manito, Albay?</h2>
        <p class="sub-description" style="font-size: 18px; color: black; margin-bottom: 20px;">* Select 3 pictures that are located in Manito, Albay.</p>
        <button class="cancel-button" style="width: 100px; padding: 10px; margin: 5px; border: none; border-radius: 5px; font-size: 16px; background-color: #f44336; color: white;">CANCEL</button>
        <button class="confirm-button" style="width: 100px; padding: 10px; margin: 5px; border: none; border-radius: 5px; font-size: 16px; background-color: #4CAF50; color: white;">CONFIRM</button>
    </div>
    <div class="right-side" style="flex: 1.5; text-align: center;">
        <div class="images" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 5px; margin-top: 20px;">
            <img src="img/auth-img/img1.jpg" alt="Image 1" class="image" data-name="correct" style="width: 200px; height: 150px; object-fit: cover; cursor: pointer;">
            <img src="img/auth-img/img2.jpg" alt="Image 2" class="image" data-name="wrong" style="width: 200px; height: 150px; object-fit: cover; cursor: pointer;">
            <img src="img/auth-img/img3.jpg" alt="Image 3" class="image" data-name="wrong" style="width: 200px; height: 150px; object-fit: cover; cursor: pointer;">
            <img src="img/auth-img/nagaso.jpg" alt="Image 4" class="image" data-name="correct" style="width: 200px; height: 150px; object-fit: cover; cursor: pointer;">
            <img src="img/auth-img/img5.jpg" alt="Image 5" class="image" data-name="wrong" style="width: 200px; height: 150px; object-fit: cover; cursor: pointer;">
            <img src="img/auth-img/shoreline.jpg" alt="Image 6" class="image" data-name="correct" style="width: 200px; height: 150px; object-fit: cover; cursor: pointer;">
        </div>
        <button class="button" id="verifyButton" style="margin-top: 20px; padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">Verify</button>
    </div>
</div>
<script src="js/img-auth.js"></script>


@endsection