@extends('layouts.layout')

@section('contents')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<div class="container birth-form-page" style="padding: 20px; margin-top: 50px; margin-bottom: 50px; position: relative; text-align: center;">
    <!-- Background Image -->
    <div class="background-image-container" style="position: relative; overflow: hidden;">
        <img src="{{ asset('img/1.png') }}" alt="Birth Certificate" style="width: 100%; height: auto; opacity: 0.8;">
        
        <form action="/birthform" method="POST" id="birthForm">
            @csrf
            <div class="row">
                <!-- Child's Information -->
                <div class="col-md-12">
                    <h4>I. CHILD'S INFORMATION</h4>

                    <div class="form-group">
                        <label for="child_first_name" class="birth-label">1. First Name</label>
                        <input type="text" name="child_first_name" class="birth-form-control" id="child_first_name" required>
                    </div>

                    <div class="form-group">
                        <label for="child_middle_name" class="birth-label">2. Middle Name</label>
                        <input type="text" name="child_middle_name" class="birth-form-control" id="child_middle_name">
                    </div>

                    <div class="form-group">
                        <label for="child_last_name" class="birth-label">3. Last Name</label>
                        <input type="text" name="child_last_name" class="birth-form-control" id="child_last_name" required>
                    </div>

                    <div class="form-group">
                        <label for="sex" class="birth-label">4. Sex</label>
                        <select name="sex" id="sex" class="birth-form-control" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="birth_date" class="birth-label">5. Date of Birth</label>
                        <input type="date" name="birth_date" class="birth-form-control" id="birth_date" required>
                    </div>

                    <div class="form-group">
                        <label for="birth_place" class="birth-label">6. Place of Birth (City/Municipality, Province)</label>
                        <input type="text" name="birth_place" class="birth-form-control" id="birth_place" required>
                    </div>
                </div>

                <!-- Mother's Information -->
                <div class="col-md-12 mt-4">
                    <h4>II. MOTHER'S INFORMATION</h4>

                    <div class="form-group">
                        <label for="mother_first_name" class="birth-label">1. First Name</label>
                        <input type="text" name="mother_first_name" class="birth-form-control" id="mother_first_name" required>
                    </div>

                    <div class="form-group">
                        <label for="mother_middle_name" class="birth-label">2. Middle Name</label>
                        <input type="text" name="mother_middle_name" class="birth-form-control" id="mother_middle_name">
                    </div>

                    <div class="form-group">
                        <label for="mother_last_name" class="birth-label">3. Last Name</label>
                        <input type="text" name="mother_last_name" class="birth-form-control" id="mother_last_name" required>
                    </div>

                    <div class="form-group">
                        <label for="mother_dob" class="birth-label">4. Date of Birth</label>
                        <input type="date" name="mother_dob" class="birth-form-control" id="mother_dob" required>
                    </div>

                    <div class="form-group">
                        <label for="mother_citizenship" class="birth-label">5. Citizenship</label>
                        <input type="text" name="mother_citizenship" class="birth-form-control" id="mother_citizenship" required>
                    </div>
                </div>

                <!-- Father's Information -->
                <div class="col-md-12 mt-4">
                    <h4>III. FATHER'S INFORMATION</h4>

                    <div class="form-group">
                        <label for="father_first_name" class="birth-label">1. First Name</label>
                        <input type="text" name="father_first_name" class="birth-form-control" id="father_first_name" required>
                    </div>

                    <div class="form-group">
                        <label for="father_middle_name" class="birth-label">2. Middle Name</label>
                        <input type="text" name="father_middle_name" class="birth-form-control" id="father_middle_name">
                    </div>

                    <div class="form-group">
                        <label for="father_last_name" class="birth-label">3. Last Name</label>
                        <input type="text" name="father_last_name" class="birth-form-control" id="father_last_name" required>
                    </div>

                    <div class="form-group">
                        <label for="father_dob" class="birth-label">4. Date of Birth</label>
                        <input type="date" name="father_dob" class="birth-form-control" id="father_dob" required>
                    </div>

                    <div class="form-group">
                        <label for="father_citizenship" class="birth-label">5. Citizenship</label>
                        <input type="text" name="father_citizenship" class="birth-form-control" id="father_citizenship" required>
                    </div>
                </div>

                <!-- Informant's Information -->
                <div class="col-md-12 mt-4">
                    <h4>IV. INFORMANT'S INFORMATION</h4>

                    <div class="form-group">
                        <label for="informant_name" class="birth-label">1. Name</label>
                        <input type="text" name="informant_name" class="birth-form-control" id="informant_name" required>
                    </div>

                    <div class="form-group">
                        <label for="informant_relationship" class="birth-label">2. Relationship to the Child</label>
                        <input type="text" name="informant_relationship" class="birth-form-control" id="informant_relationship" required>
                    </div>

                    <div class="form-group">
                        <label for="informant_address" class="birth-label">3. Address</label>
                        <input type="text" name="informant_address" class="birth-form-control" id="informant_address" required>
                    </div>

                    <div class="form-group">
                        <label for="informant_date_signed" class="birth-label">4. Date Signed</label>
                        <input type="date" name="informant_date_signed" class="birth-form-control" id="informant_date_signed" required>
                    </div>
                </div>

                <!-- Attendant's Information -->
                <div class="col-md-12 mt-4">
                    <h4>V. ATTENDANT'S INFORMATION</h4>

                    <div class="form-group">
                        <label for="attendant_name" class="birth-label">1. Name</label>
                        <input type="text" name="attendant_name" class="birth-form-control" id="attendant_name" required>
                    </div>

                    <div class="form-group">
                        <label for="attendant_date_signed" class="birth-label">2. Date Signed</label>
                        <input type="date" name="attendant_date_signed" class="birth-form-control" id="attendant_date_signed" required>
                    </div>
                </div>
            </div>

            <!-- Submit Button (Next) -->
            <div class="col-md-12 mt-3">
                <button type="submit" class="btn btn-success">Next</button>
            </div>
        </form>
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    </div>
</div>

@endsection
