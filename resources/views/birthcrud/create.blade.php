<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Birth Certificate</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Create New Birth Certificate</h1>

        <!-- Display errors if any -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form to create a new birth registration -->
        <form action="{{ route('birth-registration.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="child_first_name">Child First Name</label>
                <input type="text" class="form-control" id="child_first_name" name="child_first_name" required>
            </div>

            <div class="form-group">
                <label for="child_last_name">Child Last Name</label>
                <input type="text" class="form-control" id="child_last_name" name="child_last_name" required>
            </div>

            <div class="form-group">
                <label for="child_dob">Child Date of Birth</label>
                <input type="date" class="form-control" id="child_dob" name="child_dob" required>
            </div>

            <div class="form-group">
                <label for="child_place_of_birth">Place of Birth</label>
                <input type="text" class="form-control" id="child_place_of_birth" name="child_place_of_birth" required>
            </div>

            <div class="form-group">
                <label for="mother_first_name">Mother First Name</label>
                <input type="text" class="form-control" id="mother_first_name" name="mother_first_name" required>
            </div>

            <div class="form-group">
                <label for="mother_last_name">Mother Last Name</label>
                <input type="text" class="form-control" id="mother_last_name" name="mother_last_name" required>
            </div>

            <div class="form-group">
                <label for="mother_dob">Mother Date of Birth</label>
                <input type="date" class="form-control" id="mother_dob" name="mother_dob" required>
            </div>

            <div class="form-group">
                <label for="mother_citizenship">Mother Citizenship</label>
                <input type="text" class="form-control" id="mother_citizenship" name="mother_citizenship" required>
            </div>

            <div class="form-group">
                <label for="father_first_name">Father First Name</label>
                <input type="text" class="form-control" id="father_first_name" name="father_first_name" required>
            </div>

            <div class="form-group">
                <label for="father_last_name">Father Last Name</label>
                <input type="text" class="form-control" id="father_last_name" name="father_last_name" required>
            </div>

            <div class="form-group">
                <label for="father_dob">Father Date of Birth</label>
                <input type="date" class="form-control" id="father_dob" name="father_dob" required>
            </div>

            <div class="form-group">
                <label for="father_citizenship">Father Citizenship</label>
                <input type="text" class="form-control" id="father_citizenship" name="father_citizenship" required>
            </div>

            <div class="form-group">
                <label for="informant_name">Informant Name</label>
                <input type="text" class="form-control" id="informant_name" name="informant_name" required>
            </div>

            <div class="form-group">
                <label for="informant_relationship">Informant Relationship</label>
                <input type="text" class="form-control" id="informant_relationship" name="informant_relationship" required>
            </div>

            <div class="form-group">
                <label for="informant_address">Informant Address</label>
                <input type="text" class="form-control" id="informant_address" name="informant_address" required>
            </div>

            <div class="form-group">
                <label for="informant_date_signed">Informant Date Signed</label>
                <input type="date" class="form-control" id="informant_date_signed" name="informant_date_signed" required>
            </div>

            <div class="form-group">
                <label for="attendant_name">Attendant Name</label>
                <input type="text" class="form-control" id="attendant_name" name="attendant_name" required>
            </div>

            <div class="form-group">
                <label for="attendant_date_signed">Attendant Date Signed</label>
                <input type="date" class="form-control" id="attendant_date_signed" name="attendant_date_signed" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>

    </div>
</body>
</html>
