<!-- resources/views/birth-registration/form102.blade.php -->

@extends('layouts.layout')

@section('contents')
<br><br>
<div class="birth-container"> 
    <h2 class="text-center birth-heading">
        <img src="{{ asset('/img/manito-logo.png') }}" alt="Manito Logo" class="birth-logo"> CERTIFICATE OF LIVE BIRTH
    </h2>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <form action="/home/services/form102" method="POST">
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
                    <label for="child_sex" class="birth-label">4. Sex</label>
                    <select name="child_sex" id="child_sex" class="birth-form-control" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="child_date_of_birth" class="birth-label">5. Date of Birth</label>
                    <input type="date" name="child_date_of_birth" class="birth-form-control" id="child_date_of_birth" required>
                </div>

                <div class="form-group">
                    <label for="child_place_of_birth" class="birth-label">6. Place of Birth (City/Municipality, Province)</label>
                    <input type="text" name="child_place_of_birth" class="birth-form-control" id="child_place_of_birth" required>
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
                    <input type="text" name="mother_middle_name" class="birth-form-control" id="mother_middle_name">
                </div>

                <div class="form-group">
                    <label for="mother_last_name" class="birth-label">9. Last Name</label>
                    <input type="text" name="mother_last_name" class="birth-form-control" id="mother_last_name" required>
                </div>

                <div class="form-group">
                    <label for="mother_date_of_birth" class="birth-label">10. Date of Birth</label>
                    <input type="date" name="mother_date_of_birth" class="birth-form-control" id="mother_date_of_birth" required>
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
            
            <!-- Submit Section -->
            <div class="col-md-12 mt-3">
                <button type="button" class="btn btn-danger" onclick="window.history.back()">Back</button>
                <button type="submit" class="btn btn-success">Next</button>
            </div>
        </div>
    </form>
</div>
<br><br>
@endsection
