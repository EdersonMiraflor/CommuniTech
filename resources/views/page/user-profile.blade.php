@extends('layouts.layout')
@section('contents')
      
         <!-- Section Start-->
         <link rel="stylesheet" href="{{ asset('css/main.css') }}">
         

         <div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="personal-info-tab" data-bs-toggle="tab" href="#personal-info" role="tab">Personal Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="notifications-tab" data-bs-toggle="tab" href="#notifications" role="tab">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="other-settings-tab" data-bs-toggle="tab" href="#other-settings" role="tab">Other Settings</a>
                </li>
            </ul>
        </div>

        <div class="col-md-9">
            <div class="tab-content" id="myTabContent">
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
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>

                <div class="tab-pane fade" id="notifications" role="tabpanel">
                    <h5>Notification Settings</h5>
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
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>

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
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


@endsection