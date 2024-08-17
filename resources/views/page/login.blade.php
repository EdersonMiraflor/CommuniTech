@extends('layouts.layout')
@section('contents')

    <h1>contact page</h1>
    <p>This is Login Page</p>
    <br>
<!--Form Section Start-->
<form>
    <div class="col-15 col-md-6 col-lg-6 mb-3 figure position-absolute" style="right: 500px; bottom: 100px; transform: translateX(78%); background-color: #d4edda; width: 400px; height: 300px; padding: 20px; border: 1px solid black; border-radius: 8px;">
        <!--Email-->
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" placeholder="Enter E-mail Address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="border: 1px solid black; color: #808080; font-size: 13px;">
        <!--Password-->
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" placeholder="Enter Password" class="form-control" id="exampleInputPassword1" style="border: 1px solid black; color: #808080; font-size: 13px;"><br><br>
        <!--Submit-->
        <button type="submit" class="btn w-100" style="background-color: #28a745; color: white; border: 1px solid black;">LOG IN</button>
    </div>
    <br>
</form>
<!--Form Section End-->
@endsection