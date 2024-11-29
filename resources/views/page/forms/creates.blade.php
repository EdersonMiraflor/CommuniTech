@extends('layouts.layout')

@section('contents')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<h1 style="padding-top: 40px; text-align:center;">Create Birth Registration</h1>

<!-- Display validation errors if any -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Form to Create a Birth Registration -->
<form action="{{ route('birth-registration.store') }}" method="POST">
    @csrf

    <!-- Child's Information -->
    <h3>Child's Information</h3>
    <label for="child_first_name">First Name:</label>
    <input type="text" name="child_first_name" id="child_first_name" value="{{ old('child_first_name') }}" required>

    <label for="child_middle_name">Middle Name:</label>
    <input type="text" name="child_middle_name" id="child_middle_name" value="{{ old('child_middle_name') }}">

    <label for="child_last_name">Last Name:</label>
    <input type="text" name="child_last_name" id="child_last_name" value="{{ old('child_last_name') }}" required>

    <label for="child_sex">Sex:</label>
    <select name="child_sex" id="child_sex" required>
        <option value="">Select</option>
        <option value="Male" {{ old('child_sex') == 'Male' ? 'selected' : '' }}>Male</option>
        <option value="Female" {{ old('child_sex') == 'Female' ? 'selected' : '' }}>Female</option>
    </select>

    <label for="child_dob">Date of Birth:</label>
    <input type="date" name="child_dob" id="child_dob" value="{{ old('child_dob') }}" required>

    <label for="child_place_of_birth">Place of Birth (City/Municipality, Province):</label>
    <input type="text" name="child_place_of_birth" id="child_place_of_birth" value="{{ old('child_place_of_birth') }}" required>

    <!-- Mother's Information -->
    <h3>Mother's Information</h3>
    <label for="mother_first_name">First Name:</label>
    <input type="text" name="mother_first_name" id="mother_first_name" value="{{ old('mother_first_name') }}" required>

    <label for="mother_middle_name">Middle Name:</label>
    <input type="text" name="mother_middle_name" id="mother_middle_name" value="{{ old('mother_middle_name') }}">

    <label for="mother_last_name">Last Name:</label>
    <input type="text" name="mother_last_name" id="mother_last_name" value="{{ old('mother_last_name') }}" required>

    <label for="mother_dob">Date of Birth:</label>
    <input type="date" name="mother_dob" id="mother_dob" value="{{ old('mother_dob') }}" required>

    <label for="mother_citizenship">Citizenship:</label>
    <input type="text" name="mother_citizenship" id="mother_citizenship" value="{{ old('mother_citizenship') }}" required>

    <label for="mother_religion">Religion:</label>
    <input type="text" name="mother_religion" id="mother_religion" value="{{ old('mother_religion') }}">

    <label for="mother_occupation">Occupation:</label>
    <input type="text" name="mother_occupation" id="mother_occupation" value="{{ old('mother_occupation') }}">

    <label for="mother_residence">Residence:</label>
    <input type="text" name="mother_residence" id="mother_residence" value="{{ old('mother_residence') }}">

    <!-- Father's Information -->
    <h3>Father's Information</h3>
    <label for="father_first_name">First Name:</label>
    <input type="text" name="father_first_name" id="father_first_name" value="{{ old('father_first_name') }}" required>

    <label for="father_middle_name">Middle Name:</label>
    <input type="text" name="father_middle_name" id="father_middle_name" value="{{ old('father_middle_name') }}">

    <label for="father_last_name">Last Name:</label>
    <input type="text" name="father_last_name" id="father_last_name" value="{{ old('father_last_name') }}" required>

    <label for="father_dob">Date of Birth:</label>
    <input type="date" name="father_dob" id="father_dob" value="{{ old('father_dob') }}" required>

    <label for="father_citizenship">Citizenship:</label>
    <input type="text" name="father_citizenship" id="father_citizenship" value="{{ old('father_citizenship') }}" required>

    <label for="father_religion">Religion:</label>
    <input type="text" name="father_religion" id="father_religion" value="{{ old('father_religion') }}">

    <label for="father_occupation">Occupation:</label>
    <input type="text" name="father_occupation" id="father_occupation" value="{{ old('father_occupation') }}">

    <label for="father_residence">Residence:</label>
    <input type="text" name="father_residence" id="father_residence" value="{{ old('father_residence') }}">

    <!-- Informant's Information -->
    <h3>Informant's Information</h3>
    <label for="informant_name">Name:</label>
    <input type="text" name="informant_name" id="informant_name" value="{{ old('informant_name') }}" required>

    <label for="informant_relationship">Relationship to Child:</label>
    <input type="text" name="informant_relationship" id="informant_relationship" value="{{ old('informant_relationship') }}" required>

    <label for="informant_address">Address:</label>
    <input type="text" name="informant_address" id="informant_address" value="{{ old('informant_address') }}" required>

    <label for="informant_date_signed">Date Signed:</label>
    <input type="date" name="informant_date_signed" id="informant_date_signed" value="{{ old('informant_date_signed') }}" required>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
