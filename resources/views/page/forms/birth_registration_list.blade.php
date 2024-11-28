@extends('layouts.layout')

@section('contents')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<h1 style="padding-top: 40px; text-align:center;">Birth Registration List</h1>

<!-- Display success message if the record is added, updated, or deleted -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Display the list of birth registrations -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Child's Name</th>
            <th>Mother's Name</th>
            <th>Father's Name</th>
            <th>Date of Birth</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($birthRegistrations as $registration)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $registration->child_first_name }} {{ $registration->child_last_name }}</td>
            <td>{{ $registration->mother_first_name }} {{ $registration->mother_last_name }}</td>
            <td>{{ $registration->father_first_name }} {{ $registration->father_last_name }}</td>
            <td>{{ $registration->child_dob->format('d/m/Y') }}</td>
            <td>
                <!-- View Button -->
                <a href="{{ route('birth-registration.show', $registration->id) }}" class="btn btn-info btn-sm">View</a>

                <!-- Edit Button -->
                <a href="{{ route('birth-registration.edit', $registration->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <!-- Delete Button (with confirmation) -->
                <form action="{{ route('birth-registration.destroy', $registration->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this registration?')">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">No birth registrations found.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<!-- Pagination Links -->
{{ $birthRegistrations->links() }}

@endsection
