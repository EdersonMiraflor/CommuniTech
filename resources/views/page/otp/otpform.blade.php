@extends('layouts.layout')
@section('contents')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <div style="background-color: #E8F7EC; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 600px; text-align: center; margin-top: 100px; margin-bottom: 100px; margin-left: 250px;">
        <!-- Sending OTP Code with OTP Form 1 -->
        <h1 style="font-family: Arial, sans-serif; font-size: 28px; color: #333;">OTP Form</h1>
        <form action="/otpform" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
            @csrf
            <div style="display: flex; align-items: center;">
                <label for="Name" style="width: 100px; text-align: right; margin-right: 10px; font-family: Arial, sans-serif; color: #555;">Username</label>
                <input type="text" id="Name" name="Name" required style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div style="display: flex; align-items: center;">
                <label for="Email" style="width: 100px; text-align: right; margin-right: 10px; font-family: Arial, sans-serif; color: #555;">Email</label>
                <input type="email" id="Email" name="Email" required style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <button type="submit" style="background-color: #28a745; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-family: Arial, sans-serif; font-size: 16px;">Submit</button>
        </form>
    </div>

@endsection