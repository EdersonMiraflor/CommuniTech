<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birth Certificates</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- You can add a custom stylesheet here -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Birth Certificates</h1>

        <div class="mb-3 text-right">
            <a href="{{ route('birth-registration.create') }}" class="btn btn-primary">Add New Birth Certificate</a>
        </div>

        <!-- Table of Birth Registrations -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Child Name</th>
                        <th>Date of Birth</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($birthRegistrations as $registration)
                        <tr>
                            <td>{{ $registration->id }}</td>
                            <td>{{ $registration->child_first_name }} {{ $registration->child_last_name }}</td>
                            <td>{{ $registration->child_dob }}</td>
                            <td>
                                <a href="{{ route('birth-registration.edit', $registration->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('birth-registration.destroy', $registration->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No records found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
