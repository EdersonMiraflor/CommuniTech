@extends('layouts.app')

@section('content')
<h1>Edit Birth Registration</h1>
@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<form action="{{ route('birth-registrations.update', $birthRegistration->id) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- Input fields -->
    <label>First Name</label>
    <input type="text" name="child_first_name" value="{{ $birthRegistration->child_first_name }}" required>
    <label>Middle Name</label>
    <input type="text" name="child_middle_name" value="{{ $birthRegistration->child_middle_name }}">
    <label>Last Name</label>
    <input type="text" name="child_last_name" value="{{ $birthRegistration->child_last_name }}" required>
    <label>Sex</label>
    <select name="child_sex" required>
        <option value="Male" {{ $birthRegistration->child_sex == 'Male' ? 'selected' : '' }}>Male</option>
        <option value="Female" {{ $birthRegistration->child_sex == 'Female' ? 'selected' : '' }}>Female</option>
    </select>
    <label>Date of Birth</label>
    <input type="date" name="child_date_of_birth" value="{{ $birthRegistration->child_date_of_birth }}" required>
    <label>Place of Birth</label>
    <input type="text" name="child_place_of_birth" value="{{ $birthRegistration->child_place_of_birth }}" required>

    <button type="submit">Save Changes</button>
</form>

<form action="{{ route('birth-registrations.destroy', $birthRegistration->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
</form>
@endsection
