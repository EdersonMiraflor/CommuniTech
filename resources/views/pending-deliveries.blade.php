@extends('layouts.layout')
@section('contents')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Your Pending Delivery Requests</h1>

    @if($pendingDeliveries->isEmpty())
        <div class="alert alert-info text-center">
            <p>You have no pending delivery requests.</p>
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Rider</th>
                        <th>Rider Number</th>
                        <th>Estimated Delivery Day</th>
                        <th>Name</th>
                        <th>Requested Certificate</th>
                        <th>Quantity</th>
                        <th>Address</th>
                        <th>Barangay</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendingDeliveries as $delivery)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $delivery->rider }}</td>
                        <td>{{ $delivery->rider_number }}</td>
                        <td>{{ $delivery->estimated_delivery_day }}</td>
                        <td>{{ $delivery->name }}</td>
                        <td>{{ $delivery->requested_certificate }}</td>
                        <td>{{ $delivery->quantity }}</td>
                        <td>{{ $delivery->address }}</td>
                        <td>{{ $delivery->barangay }}</td>
                        <td>
                            <span class="badge {{ $delivery->status == 'pending' ? 'bg-warning' : 'bg-success' }}">
                                {{ ucfirst($delivery->status) }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection