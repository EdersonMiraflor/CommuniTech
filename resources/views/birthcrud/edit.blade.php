<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Birth Certificate</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Birth Certificate</h1>

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

        <!-- Form to edit an existing birth registration -->
        <form action="{{ route('birth-registration.update', $birthRegistration->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="child_first_name">Child First Name</label>
                <input type="text" class="form-control" id="child_first_name" name="child_first_name" value="{{ old('child_first_name', $birthRegistration->child_first_name) }}" required>
            </div>

            <div class="form-group">
                <label for="child_last_name">Child Last Name</label>
                <input type="text" class="form-control" id="child_last_name" name="child_last_name" value="{{ old('child_last_name', $birthRegistration->child_last_name) }}" required>
            </div>

            <div class="form-group">
                <label for="child_dob">Child Date of Birth</label>
                <input type="date" class="form-control" id="child_dob" name="child_dob" value="{{ old('child_dob', $birthRegistration->child_dob) }}" required>
            </div>

            <div class="form-group">
                <label for="child_place_of_birth">Place of Birth</label>
                <input type="text" class="form-control" id="child_place_of_birth" name="child_place_of_birth" value="{{ old('child_place_of_birth', $birthRegistration->child_place_of_birth) }}" required>
            </div>

            <!-- The rest of the fields will follow the same pattern as the above -->

            <div class="form-group">
                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </div>
        </form>

    </div>
</body>
</html>
