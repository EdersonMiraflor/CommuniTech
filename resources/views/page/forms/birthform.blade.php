@extends('layouts.layout')

@section('contents')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<div class="container birth-form-page" style="padding: 20px; margin-top: 50px; margin-bottom: 50px; position: relative; text-align: center;">
    <!-- Background Image -->
    <div class="background-image-container" style="position: relative; overflow: hidden;">
        <img src="{{ asset('img/1.png') }}" alt="Birth Certificate" style="width: 100%; height: auto; opacity: 0.8;">
        
        <form action="/home/services/form102/birthform" method="POST" id="birthForm">
            @csrf
            <div class="row">
                <!-- Child's Information -->
                <div class="col-md-12">
                   

                    <div class="form-group">
                        <label for="child_first_name" class="birth-label">1. First Name</label>
                        <input type="text" name="child_first_name" class="birth-form-control" id="child_first_name" value="{{ old('child_first_name', $RequestData->child_first_name ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="child_middle_name" class="birth-label">2. Middle Name</label>
                        <input type="text" name="child_middle_name" class="birth-form-control" id="child_middle_name" value="{{ old('child_middle_name', $RequestData->child_middle_name ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label for="child_last_name" class="birth-label">3. Last Name</label>
                        <input type="text" name="child_last_name" class="birth-form-control" id="child_last_name" value="{{ old('child_last_name', $RequestData->child_last_name ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="sex" class="birth-label">4. Sex</label>
                        <select name="sex" id="sex" class="birth-form-control" required>
                            <option value="male" {{ (old('sex', $RequestData->child_sex ?? '') == 'male') ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ (old('sex', $RequestData->child_sex ?? '') == 'female') ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="birth_date" class="birth-label">5. Date of Birth</label>
                        <input type="date" name="birth_date" class="birth-form-control" id="birth_date" value="{{ old('birth_date', $RequestData->child_date_of_birth ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="birth_place" class="birth-label">6. Place of Birth (City/Municipality, Province)</label>
                        <input type="text" name="birth_place" class="birth-form-control" id="birth_place" value="{{ old('birth_place', $RequestData->child_place_of_birth ?? '') }}" required>
                    </div>
                </div>

                <!-- Mother's Information -->
                <div class="col-md-12 mt-4">
                    <h4>II. MOTHER'S INFORMATION</h4>

                    <div class="form-group">
                        <label for="mother_first_name" class="birth-label">1. First Name</label>
                        <input type="text" name="mother_first_name" class="birth-form-control" id="mother_first_name" value="{{ old('mother_first_name', $RequestData->mother_first_name ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="mother_middle_name" class="birth-label">2. Middle Name</label>
                        <input type="text" name="mother_middle_name" class="birth-form-control" id="mother_middle_name" value="{{ old('mother_middle_name', $RequestData->mother_middle_name ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label for="mother_last_name" class="birth-label">3. Last Name</label>
                        <input type="text" name="mother_last_name" class="birth-form-control" id="mother_last_name" value="{{ old('mother_last_name', $RequestData->mother_last_name ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="mother_dob" class="birth-label">4. Date of Birth</label>
                        <input type="date" name="mother_dob" class="birth-form-control" id="mother_dob" value="{{ old('mother_dob', $RequestData->mother_date_of_birth ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="mother_citizenship" class="birth-label">5. Citizenship</label>
                        <input type="text" name="mother_citizenship" class="birth-form-control" id="mother_citizenship" value="{{ old('mother_citizenship', $RequestData->mother_citizenship ?? '') }}" required>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="col-md-12 mt-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
