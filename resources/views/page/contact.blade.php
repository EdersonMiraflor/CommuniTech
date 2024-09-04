@extends('layouts.layout')
@section('contents')

    <h1>contact page</h1>
    <p>This is Contact Page</p>
<br><br>
<!--Form Section Start-->
<div style="background-color: #e8f7ec;  padding: 80px 100px 80px " class="container">
    <div class="row justify-content-end">
        <div class="col-12 col-md-8 col-lg-6" style="background-color: #ffffff; padding: 20px; border: 1px solid black; border-radius: 8px;">
            <!--Form Content-->
            <form>
                <!--Name-->
                <label for="firstName" class="form-label" style="font-size: 14px;">Name</label>
                <input type="text" placeholder="First Name" class="form-control" id="firstName" style="border: 1px solid black; font-size: 14px; padding: 8px; margin-bottom: 10px;">

                <!--Surname-->
                <label for="lastName" class="form-label" style="font-size: 14px;">Surname</label>
                <input type="text" placeholder="Last Name" class="form-control" id="lastName" style="border: 1px solid black; font-size: 14px; padding: 8px; margin-bottom: 10px;">

                <!--Email-->
                <label for="email" class="form-label" style="font-size: 14px;">Email</label>
                <input type="email" placeholder="Enter Email Address" class="form-control" id="email" style="border: 1px solid black; font-size: 14px; padding: 8px; margin-bottom: 10px;">

                <!--Message-->
                <label for="message" class="form-label" style="font-size: 14px;">Message</label>
                <textarea placeholder="Enter your message" class="form-control" id="message" style="border: 1px solid black; font-size: 14px; padding: 8px; margin-bottom: 20px; height: 100px;"></textarea>

                <!--Submit-->
                <button type="submit" class="btn w-100" style="background-color: #28a745; color: white; border: 1px solid black; font-size: 14px; padding: 8px;">Submit</button>
            </form>
        </div>
    </div>
</div><br><br><br>
<!--Form Section End-->
@endsection