@extends('layouts.app')

@section('content')
    <h1>Riders List</h1>
    <a href="{{ route('riders.create') }}">Create New Rider</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Vehicle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($riders as $rider)
                <tr>
                    <td>{{ $rider->name }}</td>
                    <td>{{ $rider->email }}</td>
                    <td>{{ $rider->phone }}</td>
                    <td>{{ $rider->vehicle }}</td>
                    <td>
                        <a href="{{ route('riders.edit', $rider->id) }}">Edit</a>
                        <form action="{{ route('riders.destroy', $rider->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
