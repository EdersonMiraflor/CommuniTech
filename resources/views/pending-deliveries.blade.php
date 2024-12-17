@extends('layouts.layout')
@section('contents')

<head>  
<style>
    .body{
        font-family: Arial, sans-serif;
    }
    .pd .container {
        margin-top: 5rem;
    }

    .pd h1 {
        margin-bottom: 2rem;
        text-align: center;
        color: #04aa6d;
    }

    .pd .alert-info {
        background-color: #e8f7ec;
        color: #28a745;
        border: 1px solid #28a745;
    }

    .pd .table {
        border: 1px solid #28a745;
    }

    .pd .table thead {
        background-color: #04aa6d;
        color: white;
    }

    .pd .table-hover tbody tr:hover {
        background-color: #e8f7ec;
    }

    .pd .badge {
        font-size: 0.9rem;
        padding: 0.5rem 0.8rem;
    }

    .pd .bg-warning {
        background-color: #ffc107 !important;
        color: #212529 !important;
    }

    .pd .bg-success {
        background-color: #28a745 !important;
        color: white !important;
    }
</style>
</head>
<body>
    

<div class="pd">


<div class="container mt-5" style="margin-bottom:100px;">
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
                        <th>Estimated Delivery Day</th>
                        <th>Name</th>
                        <th>Requested Certificate</th>
                        <th>Quantity</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Barangay</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendingDeliveries as $delivery)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $delivery->rider }}</td>
                        <td>{{ $delivery->estimated_delivery_day }}</td>
                        <td>{{ $delivery->name }}</td>
                        <td>{{ $delivery->requested_certificate }}</td>
                        <td>{{ $delivery->quantity }}</td>
                        <td>{{ $delivery->address }}</td>
                        <td>{{ $delivery->mobile }}</td>
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


</div>

</body>
@endsection