<!-- resources/views/riders/delivery-history.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Delivery History for {{ $rider->name }}</h1>

        @if($deliveries->isEmpty())
            <p>No deliveries yet.</p>
        @else
            <ul>
                @foreach($deliveries as $delivery)
                    <li>Delivery to {{ $delivery->destination }} on {{ $delivery->created_at }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
