@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Death Registration</h1>

        <form action="{{ route('death-registration.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="deceased_first_name">Deceased First Name</label>
                <input type="text" name="deceased_first_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="deceased_last_name">Deceased Last Name</label>
                <input type="text" name="deceased_last_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="deceased_dob">Deceased Date of Birth</label>
                <input type="date" name="deceased_dob" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="death_date">Date of Death</label>
                <input type="date" name="death_date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="death_place">Place of Death</label>
                <input type="text" name="death_place" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="cause_of_death">Cause of Death</label>
                <input type="text" name="cause_of_death" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="informant_name">Informant Name</label>
                <input type="text" name="informant_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="informant_relationship">Informant Relationship to Deceased</label>
                <input type="text" name="informant_relationship" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="informant_address">Informant Address</label>
                <input type="text" name="informant_address" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="informant_date_signed">Date Signed by Informant</label>
                <input type="date" name="informant_date_signed" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
