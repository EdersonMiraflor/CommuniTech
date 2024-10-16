<!-- resources/views/birth-registration/form102.blade.php -->

@extends('layouts.layout')

@section('contents')
<div class="birth-container"> 
<h2 class="text-center birth-heading">
    <img src="{{ asset('/img/manito-logo.png') }}" alt="Manito Logo" class="birth-logo"> CERTIFICATE OF LIVE BIRTH
</h2>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @csrf

    <div class="row">
        <!-- Child's Information -->
        <div class="col-md-12">
            <h4>I. CHILD'S INFORMATION</h4>

            <div class="form-group">
                <label for="child_first_name" class="birth-label">1. First Name</label> <!-- Added birth-label class -->
                <input type="text" name="child_first_name" class="birth-form-control" id="child_first_name" required> <!-- Changed class to birth-form-control -->
            </div>

            <div class="form-group">
                <label for="child_middle_name" class="birth-label">2. Middle Name</label>
                <input type="text" name="child_middle_name" class="birth-form-control" id="child_middle_name" required>
            </div>

            <div class="form-group">
                <label for="child_last_name" class="birth-label">3. Last Name</label>
                <input type="text" name="child_last_name" class="birth-form-control" id="child_last_name" required>
            </div>

            <div class="form-group">
                <label for="sex" class="birth-label">4. Sex</label>
                <select name="sex" id="sex" class="birth-form-control" required> <!-- Changed class to birth-form-control -->
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
        <div class="col-md-12">
            <h4>II. MOTHER'S INFORMATION</h4>

            <div class="form-group">
                <label for="mother_first_name" class="birth-label">7. First Name</label>
                <input type="text" name="mother_first_name" class="birth-form-control" id="mother_first_name" required>
            </div>

            <div class="form-group">
                <label for="mother_middle_name" class="birth-label">8. Middle Name</label>
                <input type="text" name="mother_middle_name" class="birth-form-control" id="mother_middle_name" required>
            </div>

            <div class="form-group">
                <label for="mother_last_name" class="birth-label">9. Last Name</label>
                <input type="text" name="mother_last_name" class="birth-form-control" id="mother_last_name" required>
            </div>

            <div class="form-group">
                <label for="mother_birth_date" class="birth-label">10. Date of Birth</label>
                <input type="date" name="mother_birth_date" class="birth-form-control" id="mother_birth_date" required>
            </div>

            <div class="form-group">
                <label for="mother_citizenship" class="birth-label">11. Citizenship</label>
                <input type="text" name="mother_citizenship" class="birth-form-control" id="mother_citizenship" required>
            </div>

            <div class="form-group">
                <label for="mother_religion" class="birth-label">12. Religion</label>
                <input type="text" name="mother_religion" class="birth-form-control" id="mother_religion">
            </div>

            <div class="form-group">
                <label for="mother_occupation" class="birth-label">13. Occupation</label>
                <input type="text" name="mother_occupation" class="birth-form-control" id="mother_occupation">
            </div>

            <div class="form-group">
                <label for="mother_residence" class="birth-label">14. Residence</label>
                <input type="text" name="mother_residence" class="birth-form-control" id="mother_residence" required>
            </div>
        </div>

        <!-- Father's Information -->
        <div class="col-md-12">
            <h4>III. FATHER'S INFORMATION</h4>

            <div class="form-group">
                <label for="father_first_name" class="birth-label">15. First Name</label>
                <input type="text" name="father_first_name" class="birth-form-control" id="father_first_name" required>
            </div>

            <div class="form-group">
                <label for="father_middle_name" class="birth-label">16. Middle Name</label>
                <input type="text" name="father_middle_name" class="birth-form-control" id="father_middle_name">
            </div>

            <div class="form-group">
                <label for="father_last_name" class="birth-label">17. Last Name</label>
                <input type="text" name="father_last_name" class="birth-form-control" id="father_last_name" required>
            </div>

            <div class="form-group">
                <label for="father_birth_date" class="birth-label">18. Date of Birth</label>
                <input type="date" name="father_birth_date" class="birth-form-control" id="father_birth_date" required>
            </div>

            <div class="form-group">
                <label for="father_citizenship" class="birth-label">19. Citizenship</label>
                <input type="text" name="father_citizenship" class="birth-form-control" id="father_citizenship" required>
            </div>

            <div class="form-group">
                <label for="father_religion" class="birth-label">20. Religion</label>
                <input type="text" name="father_religion" class="birth-form-control" id="father_religion">
            </div>

            <div class="form-group">
                <label for="father_occupation" class="birth-label">21. Occupation</label>
                <input type="text" name="father_occupation" class="birth-form-control" id="father_occupation">
            </div>

            <div class="form-group">
                <label for="father_residence" class="birth-label">22. Residence</label>
                <input type="text" name="father_residence" class="birth-form-control" id="father_residence" required>
            </div>
        </div>

        <!-- Informant's Information -->
        <div class="col-md-12">
            <h4>IV. INFORMANT'S INFORMATION</h4>

            <div class="form-group">
                <label for="informant_name" class="birth-label">23. Name</label>
                <input type="text" name="informant_name" class="birth-form-control" id="informant_name" required>
            </div>

            <div class="form-group">
                <label for="informant_relationship" class="birth-label">24. Relationship to Child</label>
                <input type="text" name="informant_relationship" class="birth-form-control" id="informant_relationship" required>
            </div>

            <div class="form-group">
                <label for="informant_address" class="birth-label">25. Address</label>
                <input type="text" name="informant_address" class="birth-form-control" id="informant_address" required>
            </div>

            <div class="form-group">
                <label for="informant_date_signed" class="birth-label">26. Date Signed</label>
                <input type="date" name="informant_date_signed" class="birth-form-control" id="informant_date_signed" required>
            </div>
        </div>

        <!-- Attendant Information -->
        <div class="col-md-12">
            <h4>V. ATTENDANT'S INFORMATION</h4>

            <div class="form-group">
                <label for="attendant_name" class="birth-label">27. Name of Attendant</label>
                <input type="text" name="attendant_name" class="birth-form-control" id="attendant_name" required>
            </div>

            <div class="form-group">
                <label for="attendant_title" class="birth-label">28. Title</label>
                <input type="text" name="attendant_title" class="birth-form-control" id="attendant_title" required>
            </div>

            <div class="form-group">
                <label for="attendant_address" class="birth-label">29. Address</label>
                <input type="text" name="attendant_address" class="birth-form-control" id="attendant_address" required>
            </div>

            <div class="form-group">
                <label for="attendant_date_signed" class="birth-label">30. Date Signed</label>
                <input type="date" name="attendant_date_signed" class="birth-form-control" id="attendant_date_signed" required>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success mt-3 birth-submit">Submit</button> <!-- Added birth-submit class -->
</div>
@endsection
