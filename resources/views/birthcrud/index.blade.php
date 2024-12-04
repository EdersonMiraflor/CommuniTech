@extends('layouts.layout')

@section('contents')
    <div class="container mt-5">
        <h2 class="text-center mb-4">List of Birth Registrations</h2>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Error Message -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Table for Birth Registrations -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Child's Name</th>
                    <th>Birth Date</th>
                    <th>Mother's Name</th>
                    <th>Father's Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($birthRegistrations as $registration)
                    <tr>
                        <td>{{ $registration->child_first_name }} {{ $registration->child_last_name }}</td>
                        <td>{{ \Carbon\Carbon::parse($registration->child_date_of_birth)->format('F j, Y') }}</td>
                        <td>{{ $registration->mother_first_name }} {{ $registration->mother_last_name }}</td>
                        <td>{{ $registration->father_first_name }} {{ $registration->father_last_name }}</td>
                        <td>
                            <a href="{{ route('birth-registrations.show', $registration->id) }}" class="btn btn-info btn-sm">View</a>
                            <!-- Add more actions like Edit or Delete if needed -->
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No birth registrations found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination Links (if needed) -->
        <div class="d-flex justify-content-center">
            {!! $birthRegistrations->links() !!}
        </div>

        <!-- Button to add new registration -->
        <div class="mt-3 text-center">
            <a href="{{ route('birth-registrations.create') }}" class="btn btn-primary">Add New Registration</a>
        </div>
    </div>
@endsection
