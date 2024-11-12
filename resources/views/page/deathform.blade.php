@extends('layouts.layout')

@section('contents')
<br><br>
<div class="birth-container"> 
<h2 class="text-center birth-heading">
    <img src="{{ asset('/img/manito-logo.png') }}" alt="Manito Logo" class="birth-logo"> CERTIFICATE OF DEATH
</h2>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @csrf

    <div class="row">
        <!-- Child's Information -->
        <div class="col-md-12">
            <h4>I. Deceased Information</h4>
        <label for="deceased-name" class="birth-label">Full Name:</label>
        <input type="text" id="deceased-name" name="deceased_name" class="birth-form-control" placeholder="Enter deceased's full name" required />

        <label for="deceased-sex" class="birth-label">Sex:</label>
        <select id="deceased-sex" name="deceased_sex" class="birth-form-control" required>
            <option value="">Select Sex</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <label for="deceased-birthdate" class="birth-label">Date of Birth:</label>
        <input type="date" id="deceased-birthdate" name="deceased_birthdate" class="birth-form-control" required />

        <label for="deceased-birthplace" class="birth-label">Place of Birth:</label>
        <input type="text" id="deceased-birthplace" name="deceased_birthplace" class="birth-form-control" placeholder="Enter place of birth" required />

        <!-- Section: Death Details -->
        <h2 class="birth-heading">Death Details</h2>
        <label for="death-date" class="birth-label">Date of Death:</label>
        <input type="date" id="death-date" name="death_date" class="birth-form-control" required />

        <label for="death-time" class="birth-label">Time of Death:</label>
        <input type="time" id="death-time" name="death_time" class="birth-form-control" required />

        <label for="death-place" class="birth-label">Place of Death:</label>
        <input type="text" id="death-place" name="death_place" class="birth-form-control" placeholder="Enter place of death" required />

        <label for="death-cause" class="birth-label">Cause of Death:</label>
        <textarea id="death-cause" name="death_cause" class="birth-form-control" placeholder="Enter cause of death" rows="3" required></textarea>

        <!-- Section: Informant Information -->
        <h2 class="birth-heading">Informant Information</h2>
        <label for="informant-name" class="birth-label">Informant's Full Name:</label>
        <input type="text" id="informant-name" name="informant_name" class="birth-form-control" placeholder="Enter informant's full name" required />

        <label for="informant-relationship" class="birth-label">Relationship to Deceased:</label>
        <input type="text" id="informant-relationship" name="informant_relationship" class="birth-form-control" placeholder="Enter relationship to deceased" required />

        <label for="informant-address" class="birth-label">Informant's Address:</label>
        <input type="text" id="informant-address" name="informant_address" class="birth-form-control" placeholder="Enter informant's address" required />
     </form>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-danger mt-3">Back</button>
        <button type="submit" class="btn btn-success mt-3">Next</button> 
</div>
@endsection
