@extends('layouts.app')

@section('content')
    <h1>Edit Rider</h1>
    <form action="{{ route('riders.update', $rider->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $rider->name }}" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $rider->email }}" required><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="{{ $rider->phone }}" required><br>

        <label for="vehicle">Vehicle:</label>
        <input type="text" name="vehicle" value="{{ $rider->vehicle }}" required><br>

        <button type="submit">Update Rider</button>
    </form>
@endsection
