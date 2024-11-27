@extends('layouts.layout')

@section('contents')
    <!-- Section Start -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <div class="container mt-5">
        <div class="row">
            <!-- Sidebar Navigation -->
            <div class="col-md-3">
                <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="personal-info-tab" data-bs-toggle="tab" href="#personal-info" role="tab">Personal Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="admin-tab" data-bs-toggle="tab" href="#admin" role="tab">Admin Management</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="notifications-tab" data-bs-toggle="tab" href="#notifications" role="tab">Rider Management</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="other-settings-tab" data-bs-toggle="tab" href="#other-settings" role="tab">Other Settings</a>
                    </li>
                </ul>
            </div>

            <!-- Content Section -->
            <div class="col-md-9">
                <div class="tab-content" id="myTabContent">
                    <!-- Personal Info Tab -->
                    <div class="tab-pane fade show active" id="personal-info" role="tabpanel">
                        <h5>Personal Information</h5>
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="password" placeholder="New password">
                            </div>
                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm-password" placeholder="Confirm your password">
                            </div>
                            <a href="/home" class="btn btn-primary">Go Back to Home Page</a>
                        </form>
                    </div>

                    <!-- Admin Management Tab -->
                    <div class="tab-pane fade" id="admin" role="tabpanel">
                        <h5>Admin Management</h5>
                        <form method="POST" action="{{ route('change.credential') }}">
                            @csrf
                            @method('PATCH')

                            <div class="mb-3">
                                <label for="admin-lists" class="form-label">Admin Lists</label>
                                <select class="form-select" id="admin-lists" name="user_id">
                                    @if(isset($admins) && count($admins) > 0)
                                        @foreach ($admins as $admin)
                                            <option value="{{ $admin->User_Id }}">
                                                {{ $admin->name ?? 'N/A' }} {{ $admin->Middle_Name ?? '' }} {{ $admin->Last_Name ?? '' }}
                                                - {{ $admin->created_at->format('Y-m-d') ?? 'N/A' }}
                                                - {{ $admin->Credential ?? 'N/A' }}
                                            </option>
                                        @endforeach
                                    @else
                                        <option>No Admins Found</option>
                                    @endif
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="user-credential" class="form-label">User Lists</label>
                                <select class="form-select" id="user-credential" name="user_id">
                                    @if(isset($users) && count($users) > 0)
                                        @foreach ($users as $user)
                                            <option value="{{ $user->User_Id }}">
                                                {{ $user->name ?? 'N/A' }} {{ $user->Middle_Name ?? '' }} {{ $user->Last_Name ?? '' }}
                                                - {{ $user->created_at->format('Y-m-d') ?? 'N/A' }}
                                                - {{ $user->Credential ?? 'N/A' }}
                                            </option>
                                        @endforeach
                                    @else
                                        <option>No Users Found</option>
                                    @endif
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="change-credential" class="form-label">Change User Credential</label>
                                <button type="submit" name="credential" value="admin" class="btn btn-primary">Make Admin</button>
                                <button type="submit" name="credential" value="user" class="btn btn-warning">Make User</button>
                            </div>
                        </form>
                    </div>

                    <!-- Rider Management Tab -->
                    <div class="tab-pane fade" id="notifications" role="tabpanel">
                        <h5>Rider Management</h5>
                        <form>
                            <div class="mb-3">
                                <label for="email-notifications" class="form-label">Email Notifications</label>
                                <select class="form-select" id="email-notifications">
                                    <option selected>Enabled</option>
                                    <option>Disabled</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="sms-notifications" class="form-label">SMS Notifications</label>
                                <select class="form-select" id="sms-notifications">
                                    <option selected>Enabled</option>
                                    <option>Disabled</option>
                                </select>
                            </div>
                            <a href="/home" class="btn btn-primary">Go Back to Home Page</a>
                        </form>
                    </div>

                    <!-- Other Settings Tab -->
                    <div class="tab-pane fade" id="other-settings" role="tabpanel">
                        <h5>Other Settings</h5>
                        <form>
                            <div class="mb-3">
                                <label for="language" class="form-label">Language</label>
                                <select class="form-select" id="language">
                                    <option selected>English</option>
                                    <option>Spanish</option>
                                    <option>French</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="theme" class="form-label">Theme</label>
                                <select class="form-select" id="theme">
                                    <option selected>Light</option>
                                    <option>Dark</option>
                                </select>
                            </div>
                            <a href="/home" class="btn btn-primary">Go Back to Home Page</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Success/Error Messages -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    @if(session('info'))
        <div class="alert alert-info">{{ session('info') }}</div>
    @endif

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
