@extends('layouts.layout')
@section('contents')

<h1>Login page</h1>
<p>This is Login Page</p>
<br>
@if(session('msg3'))
        <div class="alert alert-success">
            {{ session('msg3') }}
        </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
            <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

<!--Form Section Start-->
<form method="POST" action="/login">
    @csrf
    <div class="col-12 col-md-8 col-lg-8 mb-3 figure position-absolute" style="right: 550px; bottom: 100px; transform: translateX(78%); background-color: #d4edda; width: 600px; height: 350px; padding: 20px; border: 1px solid black; border-radius: 8px; overflow: auto;">
        <!--Email-->
        <label for="email" class="form-label" style="font-size: 14px;">Email</label>
        <input type="email" name="email" placeholder="Enter E-mail Address" class="form-control" id="email" aria-describedby="emailHelp" style="border: 1px solid black; font-size: 14px; padding: 8px;" value="{{ old('email') }}"><br>
        <!-- Display Email Error -->
            @if ($errors->has('email'))
                    <div class="alert alert-danger" style="font-size: 14px;">
                        {{ $errors->first('email') }}
                    </div>
                @endif
        <!--Password-->
        <label for="password" class="form-label" style="font-size: 14px;">Password</label>
        <input type="password" name="password" placeholder="Enter Password" class="form-control" id="password" style="border: 1px solid black; font-size: 14px; padding: 8px;"><br><br>
        <!-- Display Password Error -->
            @if ($errors->has('password'))
                    <div class="alert alert-danger" style="font-size: 14px;">
                        {{ $errors->first('password') }}
                    </div>
                @endif
        <!--Submit-->
        <button type="submit" class="btn w-100" style="background-color: #28a745; color: white; border: 1px solid black; font-size: 14px; padding: 8px;">LOG IN</button>

        <!-- Links -->
        <div style="display: flex; justify-content: space-between; margin-top: 20px;">
            <a href="/forgot" style="color: black; text-decoration: underline;">Forgot password?</a>
            <a href="/signup" style="color: black; text-decoration: underline;">No Account Yet? Register</a>
        </div>
    </div>
</form>
<!--Form Section End-->
@endsection
