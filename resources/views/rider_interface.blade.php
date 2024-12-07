@extends('layouts.layout')
@section('contents')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<div class="container my-5">
    <div class="card shadow">
        <div class="card-header text-white" style="background-color: white">
            <h4 class="mb-0" style="color: #28a745;"><b>RIDER DASHBOARD</b></h4>
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
                <li class="nav-item">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                        Profile
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="earnings-tab" data-bs-toggle="tab" data-bs-target="#earnings" type="button" role="tab" aria-controls="earnings" aria-selected="false">
                        Earnings Summary
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
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Birth Certificate</td>
                                <td>John Doe</td>
                                <td>123 Main Street</td>
                                <td>In Transit</td>
                                <td>
                                    <button class="btn btn-success btn-sm">Delivered</button>
                                    <button class="btn btn-warning btn-sm">In Transit</button>
                                </td>
                            </tr>
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

                <!-- Profile -->
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h5>Profile</h5>
                    <form>
                        <div class="mb-3 text-center">
                            <!-- Profile Picture Holder -->
                            <label for="profile-picture" class="form-label d-block">Profile Picture</label>
                            <img src="{{ asset('images/default-profile.png') }}" alt="Profile Picture" id="profilePicturePreview" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover; border: 2px solid #28a745;">
                            <input type="file" class="form-control" id="profile-picture" onchange="previewProfilePicture(event)">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="John Rider">
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact Details</label>
                            <input type="text" class="form-control" id="contact" value="+639123456789">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>

                <!-- Earnings Summary -->
                <div class="tab-pane fade" id="earnings" role="tabpanel" aria-labelledby="earnings-tab">
                    <h5>Earnings Summary</h5>
                    <div>
                        <p>Total Earnings: ₱5000.00</p>
                        <label for="date-filter" class="form-label">Filter by Date</label>
                        <input type="date" class="form-control mb-3" id="date-filter">
                    </div>
                </div>

            
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <div>
                <button class="btn btn-secondary">Go Offline</button>
            </div>
            <button class="btn btn-danger">Logout</button>
        </div>
    </div>
</div>

<script>
    function previewProfilePicture(event) {
        const reader = new FileReader();
        reader.onload = function () {
            const output = document.getElementById('profilePicturePreview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

@endsection
