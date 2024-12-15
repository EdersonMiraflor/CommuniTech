@extends('layouts.layout')
@section('contents')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<!-- Left Side Container -->
<div style="background-color: #E8F7EC; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 600px; text-align: center; margin: 100px auto; float: left;">
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

<!-- Right Side Container -->
<div style="background-color: #E8F7EC; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 600px; text-align: center; margin: 100px auto; float: right;">
    <h1 style="font-family: Arial, sans-serif; font-size: 28px; color: #333;">Another Form</h1>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr style="background-color: #d4edda;">
                <th style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif; color: #555;">Name</th>
                <th style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif; color: #555;">Email</th>
                <th style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif; color: #555;">Certificate</th>
                <th style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif; color: #555;">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif;">John Doe</td>
                <td style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif;">john.doe@example.com</td>
                <td style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif;">Birth Certificate</td>
                <td style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif;">Pending</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif;">Jane Smith</td>
                <td style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif;">jane.smith@example.com</td>
                <td style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif;">Marriage Certificate</td>
                <td style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif;">Approved</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif;">Robert Brown</td>
                <td style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif;">robert.brown@example.com</td>
                <td style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif;">Death Certificate</td>
                <td style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif;">Rejected</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Left Side Container -->
<div style="background-color: #E8F7EC; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 600px; text-align: center; margin: 100px auto; float: left;">
    <h1 style="font-family: Arial, sans-serif; font-size: 28px; color: #333;">Scan Form</h1>
    <form action="/otpform" method="POST" style="display: flex; flex-direction: column; gap: 15px;" enctype="multipart/form-data">
        @csrf
        <div style="display: flex; align-items: center;">
            <label for="Email" style="width: 100px; text-align: right; margin-right: 10px; font-family: Arial, sans-serif; color: #555;">Email</label>
            <input type="email" id="Email" name="Email" required style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        <div style="display: flex; align-items: center;">
            <label for="File" style="width: 100px; text-align: right; margin-right: 10px; font-family: Arial, sans-serif; color: #555;">Attach File</label>
            <input type="file" id="File" name="File" required style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        <button type="submit" style="background-color: #28a745; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-family: Arial, sans-serif; font-size: 16px;">Submit</button>
    </form>
</div>

@endsection
