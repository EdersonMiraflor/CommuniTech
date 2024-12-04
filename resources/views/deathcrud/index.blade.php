@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Death Registrations</h1>
    <a href="{{ route('death-registration.create') }}" class="btn btn-primary">Create New Registration</a>
    <table class="table">
        <thead>
            <tr>
                <th>Deceased Name</th>
                <th>Date of Death</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deathRegistrations as $deathRegistration)
            <tr>
                <td>{{ $deathRegistration->deceased_first_name }} {{ $deathRegistration->deceased_last_name }}</td>
                <td>{{ $deathRegistration->death_date }}</td>
                <td>
                    <a href="{{ route('death-registration.edit', $deathRegistration->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('death-registration.destroy', $deathRegistration->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
