@extends('layouts.layout')
@section('contents')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<div class="container my-5">
    <div class="card shadow">
        <div class="card-header text-white" style="background-color: #28a745;">
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
                    <form>
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
                                <tr>
                                    <td>Birth Certificate</td>
                                    <td>John Doe</td>
                                    <td>123 Main Street</td>
                                    <td>
                                        <select class="form-select" name="status">
                                            <option value="to_ship">To Ship</option>
                                            <option value="delivered">Delivered</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
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
                            <tr>
                                <td>Marriage Certificate</td>
                                <td>Jane Smith</td>
                                <td>456 Elm Street</td>
                                <td>Delivered</td>
                                <td>2024-12-01</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('select[name="status"]').forEach(select => {
        select.addEventListener('change', (event) => {
            const row = event.target.closest('tr');
            row.style.backgroundColor = event.target.value === 'delivered' ? '#d4edda' : '';
        });
    });
</script>

@endsection
