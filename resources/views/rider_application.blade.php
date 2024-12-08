@extends('layouts.layout')

@section('contents')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">


<div class="container mt-5">
    <div class="form-container p-4" style="background-color: #e8f7ec; border-radius: 10px;">
    <h2 class="text-center">Rider Application Form</h2>
    <form method="POST" action="">
        @csrf

        <!-- Rider's Full Name -->
        <div class="mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <!-- Contact Number -->
        <div class="mb-3">
            <label for="contact_number" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contact_number" name="contact_number" required>
        </div>

        <!-- Address -->
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
        </div>

        <!-- Vehicle Type -->
        <div class="mb-3">
            <label for="vehicle_type" class="form-label">Vehicle Type</label>
            <select class="form-select" id="vehicle_type" name="vehicle_type" required>
                <option value="">Select Vehicle Type</option>
                <option value="Motorcycle">Motorcycle</option>
                <option value="Bicycle">Bicycle</option>
                <option value="Car">Car</option>
            </select>
        </div>

        <!-- Submit Button -->
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary green-btn">Submit Application</button>
            <a href="" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
    
</div>

</div>
<br><br><br>

@endsection
