@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Death Registration</h1>
        
        <!-- Ensure the form is targeting the correct route with the id parameter passed via query string -->
        <form action="{{ route('death-registration.update') }}?id={{ $deathRegistration->id }}" method="POST">
            @csrf
            @method('PUT')  <!-- This is required for updating with the PUT method -->

            <div class="form-group">
                <label for="deceased_first_name">Deceased First Name</label>
                <input type="text" name="deceased_first_name" class="form-control" value="{{ $deathRegistration->deceased_first_name }}" required>
            </div>

            <div class="form-group">
                <label for="deceased_last_name">Deceased Last Name</label>
                <input type="text" name="deceased_last_name" class="form-control" value="{{ $deathRegistration->deceased_last_name }}" required>
            </div>

            <div class="form-group">
                <label for="deceased_dob">Deceased Date of Birth</label>
                <input type="date" name="deceased_dob" class="form-control" value="{{ $deathRegistration->deceased_dob }}" required>
            </div>

            <div class="form-group">
                <label for="date_of_death">Date of Death</label>
                <input type="date" name="date_of_death" class="form-control" value="{{ $deathRegistration->date_of_death }}" required>
            </div>

            <div class="form-group">
                <label for="place_of_death">Place of Death</label>
                <input type="text" name="place_of_death" class="form-control" value="{{ $deathRegistration->place_of_death }}" required>
            </div>

            <div class="form-group">
                <label for="cause_of_death">Cause of Death</label>
                <input type="text" name="cause_of_death" class="form-control" value="{{ $deathRegistration->cause_of_death }}" required>
            </div>

            <div class="form-group">
                <label for="informant_name">Informant Name</label>
                <input type="text" name="informant_name" class="form-control" value="{{ $deathRegistration->informant_name }}" required>
            </div>

            <div class="form-group">
                <label for="informant_relationship">Informant Relationship to Deceased</label>
                <input type="text" name="informant_relationship" class="form-control" value="{{ $deathRegistration->informant_relationship }}" required>
            </div>

            <div class="form-group">
                <label for="informant_address">Informant Address</label>
                <input type="text" name="informant_address" class="form-control" value="{{ $deathRegistration->informant_address }}" required>
            </div>

            <div class="form-group">
                <label for="informant_date_signed">Date Signed by Informant</label>
                <input type="date" name="informant_date_signed" class="form-control" value="{{ $deathRegistration->informant_date_signed }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
