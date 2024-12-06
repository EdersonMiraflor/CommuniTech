@extends('layouts.layout')

@section('contents')
<br><br>
<div class="birth-container"> 
    <h2 class="text-center birth-heading">
        <img src="{{ asset('/img/manito-logo.png') }}" alt="Manito Logo" class="birth-logo"> CERTIFICATE OF DEATH
    </h2>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <form action="/home/services/form103" method="POST">
        @csrf
        <div class="row">
            <!-- Deceased Information -->
            <div class="col-md-12">
                <h4>I. DECEASED INFORMATION</h4>
                <div class="form-group">
                    <label for="deceased_name" class="birth-label">1. Full Name</label>
                    <input type="text" id="deceased_name" name="deceased_name" class="birth-form-control" placeholder="Enter deceased's full name" required>
                </div>

                <div class="form-group">
                    <label for="deceased_sex" class="birth-label">2. Sex</label>
                    <select id="deceased_sex" name="deceased_sex" class="birth-form-control" required>
                        <option value="">Select Sex</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="deceased_birthdate" class="birth-label">3. Date of Birth</label>
                    <input type="date" id="deceased_birthdate" name="deceased_birthdate" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="deceased_birthplace" class="birth-label">4. Place of Birth</label>
                    <input type="text" id="deceased_birthplace" name="deceased_birthplace" class="birth-form-control" placeholder="Enter place of birth" required>
                </div>
            </div>

            <!-- Death Details -->
            <div class="col-md-12">
                <h4>II. DEATH DETAILS</h4>
                <div class="form-group">
                    <label for="death_date" class="birth-label">5. Date of Death</label>
                    <input type="date" id="death_date" name="death_date" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="death_time" class="birth-label">6. Time of Death</label>
                    <input type="time" id="death_time" name="death_time" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="death_place" class="birth-label">7. Place of Death</label>
                    <input type="text" id="death_place" name="death_place" class="birth-form-control" placeholder="Enter place of death" required>
                </div>

                <div class="form-group">
                    <label for="death_cause" class="birth-label">8. Cause of Death</label>
                    <textarea id="death_cause" name="death_cause" class="birth-form-control" placeholder="Enter cause of death" rows="3" required></textarea>
                </div>
            </div>

            <!-- Informant Information -->
            <div class="col-md-12">
                <h4>III. INFORMANT INFORMATION</h4>
                <div class="form-group">
                    <label for="informant_name" class="birth-label">9. Informant's Full Name</label>
                    <input type="text" id="informant_name" name="informant_name" class="birth-form-control" placeholder="Enter informant's full name" required>
                </div>

                <div class="form-group">
                    <label for="informant_relationship" class="birth-label">10. Relationship to Deceased</label>
                    <input type="text" id="informant_relationship" name="informant_relationship" class="birth-form-control" placeholder="Enter relationship to deceased" required>
                </div>

                <div class="form-group">
                    <label for="informant_address" class="birth-label">11. Informant's Address</label>
                    <input type="text" id="informant_address" name="informant_address" class="birth-form-control" placeholder="Enter informant's address" required>
                </div>
            </div>

            <!-- Submit Section -->
            <div class="col-md-12 mt-3">
                <button type="button" class="btn btn-danger" onclick="window.history.back()">Back</button>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>
<br><br>
@endsection
