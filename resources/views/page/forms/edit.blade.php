@extends('layouts.layout')

@section('contents')
    <h1>Edit Birth Registration</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('birth-registration.update', $birthRegistration->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- CHILD'S INFORMATION -->
        <h3>Child's Information</h3>
        <div class="form-group">
            <label for="child_first_name">First Name</label>
            <input type="text" class="form-control" id="child_first_name" name="child_first_name" value="{{ old('child_first_name', $birthRegistration->child_first_name) }}" required>
        </div>

        <div class="form-group">
            <label for="child_middle_name">Middle Name</label>
            <input type="text" class="form-control" id="child_middle_name" name="child_middle_name" value="{{ old('child_middle_name', $birthRegistration->child_middle_name) }}">
        </div>

        <div class="form-group">
            <label for="child_last_name">Last Name</label>
            <input type="text" class="form-control" id="child_last_name" name="child_last_name" value="{{ old('child_last_name', $birthRegistration->child_last_name) }}" required>
        </div>

        <div class="form-group">
            <label for="child_dob">Date of Birth</label>
            <input type="text" class="form-control" id="child_dob" name="child_dob" value="{{ old('child_dob', $birthRegistration->child_dob) }}" required placeholder="dd/mm/yyyy">
        </div>

        <div class="form-group">
            <label for="child_place_of_birth">Place of Birth</label>
            <input type="text" class="form-control" id="child_place_of_birth" name="child_place_of_birth" value="{{ old('child_place_of_birth', $birthRegistration->child_place_of_birth) }}" required>
        </div>

        <!-- MOTHER'S INFORMATION -->
        <h3>Mother's Information</h3>
        <div class="form-group">
            <label for="mother_first_name">First Name</label>
            <input type="text" class="form-control" id="mother_first_name" name="mother_first_name" value="{{ old('mother_first_name', $birthRegistration->mother_first_name) }}" required>
        </div>

        <div class="form-group">
            <label for="mother_middle_name">Middle Name</label>
            <input type="text" class="form-control" id="mother_middle_name" name="mother_middle_name" value="{{ old('mother_middle_name', $birthRegistration->mother_middle_name) }}">
        </div>

        <div class="form-group">
            <label for="mother_last_name">Last Name</label>
            <input type="text" class="form-control" id="mother_last_name" name="mother_last_name" value="{{ old('mother_last_name', $birthRegistration->mother_last_name) }}" required>
        </div>

        <div class="form-group">
            <label for="mother_dob">Date of Birth</label>
            <input type="text" class="form-control" id="mother_dob" name="mother_dob" value="{{ old('mother_dob', $birthRegistration->mother_dob) }}" required placeholder="dd/mm/yyyy">
        </div>

        <div class="form-group">
            <label for="mother_citizenship">Citizenship</label>
            <input type="text" class="form-control" id="mother_citizenship" name="mother_citizenship" value="{{ old('mother_citizenship', $birthRegistration->mother_citizenship) }}" required>
        </div>

        <div class="form-group">
            <label for="mother_religion">Religion</label>
            <input type="text" class="form-control" id="mother_religion" name="mother_religion" value="{{ old('mother_religion', $birthRegistration->mother_religion) }}">
        </div>

        <div class="form-group">
            <label for="mother_occupation">Occupation</label>
            <input type="text" class="form-control" id="mother_occupation" name="mother_occupation" value="{{ old('mother_occupation', $birthRegistration->mother_occupation) }}">
        </div>

        <div class="form-group">
            <label for="mother_residence">Residence</label>
            <input type="text" class="form-control" id="mother_residence" name="mother_residence" value="{{ old('mother_residence', $birthRegistration->mother_residence) }}">
        </div>

        <!-- FATHER'S INFORMATION -->
        <h3>Father's Information</h3>
        <div class="form-group">
            <label for="father_first_name">First Name</label>
            <input type="text" class="form-control" id="father_first_name" name="father_first_name" value="{{ old('father_first_name', $birthRegistration->father_first_name) }}" required>
        </div>

        <div class="form-group">
            <label for="father_middle_name">Middle Name</label>
            <input type="text" class="form-control" id="father_middle_name" name="father_middle_name" value="{{ old('father_middle_name', $birthRegistration->father_middle_name) }}">
        </div>

        <div class="form-group">
            <label for="father_last_name">Last Name</label>
            <input type="text" class="form-control" id="father_last_name" name="father_last_name" value="{{ old('father_last_name', $birthRegistration->father_last_name) }}" required>
        </div>

        <div class="form-group">
            <label for="father_dob">Date of Birth</label>
            <input type="text" class="form-control" id="father_dob" name="father_dob" value="{{ old('father_dob', $birthRegistration->father_dob) }}" required placeholder="dd/mm/yyyy">
        </div>

        <div class="form-group">
            <label for="father_citizenship">Citizenship</label>
            <input type="text" class="form-control" id="father_citizenship" name="father_citizenship" value="{{ old('father_citizenship', $birthRegistration->father_citizenship) }}" required>
        </div>

        <div class="form-group">
            <label for="father_religion">Religion</label>
            <input type="text" class="form-control" id="father_religion" name="father_religion" value="{{ old('father_religion', $birthRegistration->father_religion) }}">
        </div>

        <div class="form-group">
            <label for="father_occupation">Occupation</label>
            <input type="text" class="form-control" id="father_occupation" name="father_occupation" value="{{ old('father_occupation', $birthRegistration->father_occupation) }}">
        </div>

        <div class="form-group">
            <label for="father_residence">Residence</label>
            <input type="text" class="form-control" id="father_residence" name="father_residence" value="{{ old('father_residence', $birthRegistration->father_residence) }}">
        </div>

        <!-- INFORMANT'S INFORMATION -->
        <h3>Informant's Information</h3>
        <div class="form-group">
            <label for="informant_name">Name</label>
            <input type="text" class="form-control" id="informant_name" name="informant_name" value="{{ old('informant_name', $birthRegistration->informant_name) }}" required>
        </div>

        <div class="form-group">
            <label for="informant_relationship">Relationship to Child</label>
            <input type="text" class="form-control" id="informant_relationship" name="informant_relationship" value="{{ old('informant_relationship', $birthRegistration->informant_relationship) }}" required>
        </div>

        <div class="form-group">
            <label for="informant_address">Address</label>
            <input type="text" class="form-control" id="informant_address" name="informant_address" value="{{ old('informant_address', $birthRegistration->informant_address) }}" required>
        </div>

        <div class="form-group">
            <label for="informant_date_signed">Date Signed</label>
            <input type="text" class="form-control" id="informant_date_signed" name="informant_date_signed" value="{{ old('informant_date_signed', $birthRegistration->informant_date_signed) }}" required placeholder="dd/mm/yyyy">
        </div>

        <!-- ATTENDANT'S INFORMATION -->
        <h3>Attendant's Information</h3>
        <div class="form-group">
            <label for="attendant_name">Name of Attendant</label>
            <input type="text" class="form-control" id="attendant_name" name="attendant_name" value="{{ old('attendant_name', $birthRegistration->attendant_name) }}" required>
        </div>

        <div class="form-group">
            <label for="attendant_title">Title</label>
            <input type="text" class="form-control" id="attendant_title" name="attendant_title" value="{{ old('attendant_title', $birthRegistration->attendant_title) }}">
        </div>

        <div class="form-group">
            <label for="attendant_address">Address</label>
            <input type="text" class="form-control" id="attendant_address" name="attendant_address" value="{{ old('attendant_address', $birthRegistration->attendant_address) }}">
        </div>

        <div class="form-group">
            <label for="attendant_date_signed">Date Signed</label>
            <input type="text" class="form-control" id="attendant_date_signed" name="attendant_date_signed" value="{{ old('attendant_date_signed', $birthRegistration->attendant_date_signed) }}" required placeholder="dd/mm/yyyy">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
