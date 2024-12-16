@extends('layouts.layout')

@section('contents')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Sent</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(222, 240, 227);
        }
        .container {
            max-width: 600px;
            margin: 50px auto;  
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(5, 120, 24, 0.1);
            text-align: center;
        }
        h1 {
            color:rgb(9, 123, 53);
            font-size: 28px;
            margin-bottom: 10px;
        
        }
        p {
            color: #555;
            font-size: 18px;
        }
        @media (max-width: 600px) {
            h1 {
                font-size: 20px;
            }
            p {
                font-size: 16px;
            }
        }
        .back-button {
        display: block;
        width: 100%; /* Matches the container width */
        padding: 10px;
        background-color:  #04AA6D;
        color: #fff;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    .back-button:hover {
        background-color:rgb(3, 142, 91);
    }
    </style>
   
        <h1>Your Application as a Rider has been Sent</h1>
        <p>Wait for admin approval. You will just receive an email for your interview.</p>
        <a href="{{ url('/home') }}" class="back-button">Back</a> <!-- Redirect to /home -->
@endsection
