@extends('layouts.layout')
@section('contents')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home Page') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<h1 class="text-danger">home page</h1>
    <p class="text-success">This is Authentication Page</p>
<!--Sample Bootstrap Usage-->
    <img class="position-absolute top-20 start-50 translate-middle" style="width: 5rem;" src="img/Manito-Logo.png" alt="Logo of Manito">
<!--Proper Linking in Pages Usage-->
    <a href="/home/contact" style="text-align:center;">Go to Contact</a><br>
    <a href="/home/transaction" style="text-align:center;">Go to Transaction</a><br>
    <a href="/login" style="text-align:center;">Go to Login</a><br>
    <a href="/home" style="text-align:center;">Go to Home</a>
@endsection
