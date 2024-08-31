@extends('layouts.layout2')
@section('contents2')

    <h1>forgot page</h1>
    <br>
<!--Form Section Start-->
<form action="/forgot" method="POST">
    @csrf
    <!--Email-->
    <label for="exampleInputEmail1" class="form-label" style="font-size: 14px;">Email</label>
    <input type="email" name="email" placeholder="Enter E-mail Address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="border: 1px solid black; font-size: 14px; padding: 8px;" required><br>

    <!--Password-->
    <label for="exampleInputPassword1" class="form-label" style="font-size: 14px;">New Password</label>
    <input type="password" name="password" placeholder="Enter New Password" class="form-control" id="exampleInputPassword1" style="border: 1px solid black; font-size: 14px; padding: 8px;" required><br><br>

    <!--Submit-->
    <button type="submit" class="btn w-100" style="background-color: #28a745; color: white; border: 1px solid black; font-size: 14px; padding: 8px;">Update Password</button>
</form>

<!--Form Section End-->
@endsection