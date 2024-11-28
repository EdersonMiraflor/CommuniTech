@extends('layouts.app')

@section('content')
    <h1>{{ $rider->name }}</h1>
    <p>Email: {{ $rider->email }}</p>
    <p>Phone: {{ $rider->phone }}</p>
    <p>Vehicle: {{ $rider->vehicle }}</p>

    <a href="{{ route('riders.edit', $rider->id) }}">Edit</a>
@endsection
