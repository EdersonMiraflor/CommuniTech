@extends('layouts.layout')

@section('contents')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<div class="container my-5">
    <div class="card shadow">
        <div class="card-header text-white" style="background-color: #04AA6D">
            <h4 class="mb-0 text-center">RIDER DASHBOARD</h4>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs mb-4" id="dashboardTabs" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active" id="deliveries-tab" data-bs-toggle="tab" data-bs-target="#deliveries" type="button" role="tab" aria-controls="deliveries" aria-selected="true">
                        Assigned Deliveries
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab" aria-controls="history" aria-selected="false">
                        Delivery History
                    </button>
                </li>
            </ul>

            <div class="tab-content" id="dashboardTabsContent">
                <!-- Assigned Deliveries -->
                <div class="tab-pane fade show active" id="deliveries" role="tabpanel" aria-labelledby="deliveries-tab">
                    <h5>Assigned Deliveries</h5>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Certificate Type</th>
                                <th>Client Name</th>
                                <th>Delivery Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($records->where('status', '!=', 'completed') as $record)
                                <tr>
                                    <td>{{ $record->requested_certificate }}</td>
                                    <td>{{ $record->name }}</td>
                                    <td>{{ $record->address }}</td>
                                    <td>{{ ucfirst($record->status) }}</td>
                                    <td>
                                        <form id="update-form-{{ $record->Detail_Id }}" action="{{ route('rider.updateStatus', $record->Detail_Id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Delivery History -->
                <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                    <h5>Delivery History</h5>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Certificate Type</th>
                                <th>Client Name</th>
                                <th>Delivery Address</th>
                                <th>Status</th>
                                <th>Completed On</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($records->where('status', 'completed') as $record)
                                <tr>
                                    <td>{{ $record->requested_certificate }}</td>
                                    <td>{{ $record->name }}</td>
                                    <td>{{ $record->address }}</td>
                                    <td>{{ ucfirst($record->status) }}</td>
                                    <td>{{ $record->updated_at->format('Y-m-d') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @media (max-width: 768px) {
    .container {
        padding: 10px;
        margin: 2px auto;
    }

    .card-header h4 {
        font-size: 1.2rem;
    }

    .nav-tabs .nav-item .nav-link {
        font-size: 0.9rem;
        padding: 8px;
    }

    table {
        font-size: 0.85rem;
    }

    table thead th {
        font-size: 0.85rem;
        text-align: center;
    }

    table tbody td {
        font-size: 0.8rem;
    }

    table tbody td form button {
        font-size: 0.75rem;
    }
}

    </style>
@endsection
