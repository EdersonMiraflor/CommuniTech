@extends('layouts.app')

@section('content')
    <h1>Create New Rider</h1>
    <form action="{{ route('riders.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" required><br>

        <label for="vehicle">Vehicle:</label>
        <input type="text" name="vehicle" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Create Rider</button>
    </form>
@endsection
