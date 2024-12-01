@extends('layouts.layout')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
        }
        .success {
            color: green;
            font-size: 16px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Rider Signup</h1>

        <!-- Display Success Message -->
        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/rider-signup" method="POST">
            @csrf

            <!-- Name -->
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>

            <!-- Email -->
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>

            <!-- Phone -->
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required>

            <!-- Vehicle -->
            <label for="vehicle">Vehicle Type</label>
            <select id="vehicle" name="vehicle" required>
                <option value="" disabled selected>Select your vehicle</option>
                <option value="Motorcycle">Motorcycle</option>
                <option value="Bicycle">Bicycle</option>
                <option value="Car">Car</option>
            </select>

            <!-- Password -->
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <!-- Confirm Password -->
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>

            <!-- Submit Button -->
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>

@endsection
