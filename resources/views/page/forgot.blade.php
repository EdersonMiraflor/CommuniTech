@extends('layouts.layout2')
@section('contents2')

    <h1>forgot page</h1>
    <br>
<!--Form Section Start-->
<form>
    <div class="col-12 col-md-8 col-lg-8 mb-3 figure position-absolute" style="right: 550px; bottom: 100px; transform: translateX(78%); background-color: #d4edda; width: 600px; height: 350px; padding: 20px; border: 1px solid black; border-radius: 8px; overflow: auto;">
        <!--Email-->
        <label for="exampleInputEmail1" class="form-label" style="font-size: 14px;">Email</label>
        <input type="email" placeholder="Enter E-mail Address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="border: 1px solid black; font-size: 14px; padding: 8px;"><br>
        <!--Password-->
        <label for="exampleInputPassword1" class="form-label" style="font-size: 14px;">Password</label>
        <input type="password" placeholder="Enter Password" class="form-control" id="exampleInputPassword1" style="border: 1px solid black; font-size: 14px; padding: 8px;"><br><br>
        <!--Submit-->
        <button type="submit" class="btn w-100" style="background-color: #28a745; color: white; border: 1px solid black; font-size: 14px; padding: 8px;">LOG IN</button>
    </div>
</form>
<!--Form Section End-->
@endsection