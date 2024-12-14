@extends('layouts.layout')

@section('contents')
   <!-- Section Start -->
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<style>
    /* CSS for the fade-out effect */
    .alert {
        animation: fadeOut 5s ease forwards; /* Apply the fadeOut animation */
    }

    /* Define the fadeOut animation */
    @keyframes fadeOut {
        0% {
            opacity: 1;
        }
        90% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            visibility: hidden; /* Ensures the element is hidden after the animation */
        }
    }

 
    /* Container styles */
.container {
    margin-top: 5px; /* Space from the top */
    margin-bottom: 30px;
}

.row {
    display: flex;
}

/* Sidebar styles */
.col-md-3 {
    background-color: #E8F7EC; /* Light gray background for the sidebar */
    border-radius: 8px; 
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
}

.nav {
    display: flex;
    flex-direction: column;
}

.nav-pills .nav-link {
    color: #495057; /* Default text color */
    background-color: #fff; /* Light gray background */
    border-radius: 5px; 
    padding: 10px 15px;
    margin-bottom: 10px; 
    text-align: center;
    transition: all 0.3s ease-in-out;
}

.nav-pills .nav-link:hover {
    background-color: #90D7A4; /* Slightly darker gray on hover */
    color: #fff; 
}

.nav-pills .nav-link.active {
    background-color: #04AA6D; /* Bootstrap primary color */
    color: #fff; 
    font-weight: bold; 
}

.nav-pills .nav-item:not(:last-child) {
    margin-bottom: 10px;
}

.nav-pills .nav-link:focus {
    outline: none;
    box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25); /* Focus outline */
}

/* Disabled tab */
.nav-link[style*="pointer-events: none"] {
    background-color:#01796F !important; /* Disabled button color (Bootstrap secondary color) */
    color: #ffffff !important; 
    cursor: not-allowed !important; 
    opacity: 0.65;
}
/* Personal Info Section */
#personal-info {
    background-color:#E8F7EC; /* Light gray background */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Soft shadow */
}

#personal-info h5 {
    font-size: 1.5rem;
    font-weight: bold;
    color: #000000; /* Consistent blue color */
    margin-bottom: 20px;
}

#personal-info form {
    display: flex;
    flex-direction: column;
}

#personal-info form > div {
    padding-left: 30px;
}

#personal-info .mb-3 {
    margin-bottom: 15px; /* Space between form groups */
}

#personal-info .form-label {
    font-weight: bold;
    color: #000000; /* Bootstrap default label color */
    font-size: 1rem;
}

#personal-info .form-control {
    background-color: #ffffff; 
    border: 1px solid #ced4da; 
    border-radius: 5px;
    padding: 10px 15px;
    color: #0D52BD; /* Custom blue text color for form fields */
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

#personal-info .form-control:focus {
    border-color: #000000; /* Blue border on focus */
    box-shadow: 0 0 0 0.2rem rgba(13, 82, 189, 0.25); 
}

#personal-info .form-control[readonly] {
    background-color: #fff; /* Light gray for readonly fields */
    cursor: not-allowed; 
    color: #0D52BD; /* Blue text color */
}

#personal-info .form-control::placeholder {
    color: #6c757d; /* Placeholder text color */
    font-style: italic;
}

#personal-info #edit-button {
    background-color: #04AA6D; 
    color: #ffffff; 
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 1rem;
    font-weight: bold;
    border: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

#personal-info #edit-button:hover {
    background-color: #90D7A4; /* Darker blue on hover */
    transform: translateY(-2px); 
}

#personal-info #edit-button:active {
    background-color: #073d77; 
    transform: translateY(1px);
}

#personal-info .btn-secondary {
    background-color: #6c757d; 
    color: #ffffff; 
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 1rem;
    font-weight: bold;
    border: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

#personal-info .btn-secondary:hover {
    background-color: #5a6268; 
}

#personal-info .btn-secondary:active {
    background-color: #545b62; 
    transform: translateY(1px);
}

#personal-info .btn {
    margin-right: 10px; 
}
/* Request History Section */
#request-history {
    background-color: #E8F7EC; /* Light gray background */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Soft shadow */
}

#request-history h5 {
    font-size: 1.5rem;
    font-weight: bold;
    color: #000; /* Consistent blue color */
    margin-bottom: 20px;
}

#request-history form {
    display: flex;
    flex-direction: column;
}

#request-history .mb-3 {
    margin-bottom: 15px; /* Space between form groups */
}

#request-history .form-label {
    font-weight: bold;
    color: #000; /* Bootstrap default label color */
    font-size: 1rem;
}

#request-history .form-control {
    background-color: #ffffff; 
    border: 1px solid #ced4da; 
    border-radius: 5px;
    padding: 10px 15px;
    color: #0D52BD; /* Custom blue text color for form fields */
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

#request-history .form-control:focus {
    border-color: #000; /* Blue border on focus */
    box-shadow: 0 0 0 0.2rem rgba(13, 82, 189, 0.25); 
}

#request-history .form-control[readonly] {
    background-color: #e9ecef; /* Light gray for readonly fields */
    cursor: not-allowed; 
    color: #0D52BD; /* Blue text color */
}

#request-history .form-control::placeholder {
    color: #6c757d; /* Placeholder text color */
    font-style: italic;
}

#request-history .btn-primary {
    background-color: #04AA6D; 
    color: #ffffff; 
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 1rem;
    font-weight: bold;
    border: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

#request-history .btn-primary:hover {
    background-color: #094d94; /* Darker blue on hover */
    transform: translateY(-2px); 
}

#request-history .btn-primary:active {
    background-color: #073d77; 
    transform: translateY(1px);
}
/* ========== Admin Management, Request Management, User Management, Rider Management Styles ========== */

/* General Styles for All Tabs */
#admin, #request, #user, #riders {
    background-color: #E8F7EC; 
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
}

#admin h5, 
#request h5, 
#user h5, 
#riders h5 {
    font-size: 1.5rem;
    font-weight: bold;
    color: #000; 
    margin-bottom: 20px;
}

#admin form, 
#request form, 
#user form, 
#riders form {
    display: flex;
    flex-direction: column;
}

#admin .mb-3, 
#request .mb-3, 
#user .mb-3, 
#riders .mb-3 {
    margin-bottom: 15px; 
}

#admin .form-label, 
#request .form-label, 
#user .form-label, 
#riders .form-label {
    font-weight: bold;
    color: #000; 
    font-size: 1rem;
}

#admin .form-control, 
#request .form-control, 
#user .form-control, 
#riders .form-control {
    background-color: #ffffff; 
    border: 1px solid #ced4da; 
    border-radius: 5px;
    padding: 10px 15px;
    color: #0D52BD; 
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

#admin .form-control:focus, 
#request .form-control:focus, 
#user .form-control:focus, 
#riders .form-control:focus {
    border-color: #0D52BD; 
    box-shadow: 0 0 0 0.2rem rgba(13, 82, 189, 0.25); 
}

#admin .form-control[readonly], 
#request .form-control[readonly], 
#user .form-control[readonly], 
#riders .form-control[readonly] {
    background-color: #e9ecef; 
    cursor: not-allowed; 
    color: #0D52BD; 
}

#admin .form-control::placeholder, 
#request .form-control::placeholder, 
#user .form-control::placeholder, 
#riders .form-control::placeholder {
    color: #6c757d; 
    font-style: italic;
}

/* Select Dropdown Styles */
#admin .form-select, 
#request .form-select, 
#user .form-select, 
#riders .form-select {
    background-color: #ffffff; 
    border: 1px solid #ced4da; 
    border-radius: 5px;
    padding: 10px 15px;
    color: #0D52BD; 
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

#admin .form-select:focus, 
#request .form-select:focus, 
#user .form-select:focus, 
#riders .form-select:focus {
    border-color: #0D52BD; 
    box-shadow: 0 0 0 0.2rem rgba(13, 82, 189, 0.25); 
}

#admin .form-select option, 
#request .form-select option, 
#user .form-select option, 
#riders .form-select option {
    color: #0D52BD; 
}

#admin .form-select option[style*="color: grey"], 
#request .form-select option[style*="color: grey"], 
#user .form-select option[style*="color: grey"], 
#riders .form-select option[style*="color: grey"] {
    color: grey; 
}

#admin .form-select option[style*="color: red"], 
#request .form-select option[style*="color: red"], 
#user .form-select option[style*="color: red"], 
#riders .form-select option[style*="color: red"] {
    color: red; 
}

/* Button Styles */
#admin .btn-primary, 
#request .btn-primary, 
#user .btn-primary, 
#riders .btn-primary {
    background-color:#04AA6D; 
    color: #ffffff; 
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 1rem;
    font-weight: bold;
    border: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

#admin .btn-primary:hover, 
#request .btn-primary:hover, 
#user .btn-primary:hover, 
#riders .btn-primary:hover {
    background-color: #95D2B3; 
    transform: translateY(-2px); 
}

#admin .btn-primary:active, 
#request .btn-primary:active, 
#user .btn-primary:active, 
#riders .btn-primary:active {
    background-color: #073d77; 
    transform: translateY(1px);
}

/* Special Button for "Make User" */
#admin .btn-warning {
    color: #fcfcff; 
    background-color: #04AA6D; 
    border-color: #008080; 
}

#admin .btn-warning:hover {
    background-color: #95D2B3; 
    border-color: #006666;
    transform: translateY(-2px); 
}

#admin .btn-warning:active {
    background-color: #004c4c; 
    border-color: #004c4c;
    transform: translateY(1px); 
}

/* Links for "Go Back to Home Page" */
#request a.btn-primary, 
#user a.btn-primary, 
#riders a.btn-primary {
    background-color: #04AA6D; 
    color: #ffffff; 
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 1rem;
    font-weight: bold;
    border: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
    text-align: center;
    text-decoration: none;
}

#request a.btn-primary:hover, 
#user a.btn-primary:hover, 
#riders a.btn-primary:hover {
    background-color: #95D2B3; 
    transform: translateY(-2px); 
}

#request a.btn-primary:active, 
#user a.btn-primary:active, 
#riders a.btn-primary:active {
    background-color: #073d77; 
    transform: translateY(1px); 
}




</style>
<!-- Success/Error Messages -->
@if(session('success'))
    <div class="alert alert-success" id="success-message">{{ session('success') }}</div>
@endif
@if(session('error'))
    <div class="alert alert-danger" id="error-message">{{ session('error') }}</div>
@endif
@if(session('info'))
    <div class="alert alert-info" id="info-message">{{ session('info') }}</div>
@endif

<!-- Error Messages for Specific Fields -->
@if ($errors->has('password'))
    <div class="alert alert-danger">{{ $errors->first('password') }}</div>
@endif

    <div class="container mt-5">
        <div class="row">
            <!-- Sidebar Navigation -->
            <div class="col-md-3">
                <ul class="nav flex-column nav-pills" id="myTab" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link active" id="personal-info-tab" data-bs-toggle="tab" href="#personal-info" role="tab">Personal Info</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="request-xhistory-tab" data-bs-toggle="tab" href="#request-history" role="tab">Requests History</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="edit-personal-info-tab" data-bs-toggle="tab" href="#edit-personal-info" role="tab" style="pointer-events: none; cursor: not-allowed; color: #FFFFFF;">Edit Profile</a>
                    </li>

            @auth
                {{-- Check if the user is admin --}}
                @if (Auth::user()->Credential == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" id="admin-tab" data-bs-toggle="tab" href="#admin" role="tab">Admin Management</a>
                    </li>
                @endif
            @endauth

            @auth
                {{-- Check if the user is admin --}}
                @if (Auth::user()->Credential == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" id="request-tab" data-bs-toggle="tab" href="#request" role="tab">Request Management</a>
                    </li>
                @endif
            @endauth

            @auth
                {{-- Check if the user is admin --}}
                @if (Auth::user()->Credential == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" id="user-tab" data-bs-toggle="tab" href="#user" role="tab">User Management</a>
                    </li>
                @endif
            @endauth

            @auth
                {{-- Check if the user is admin --}}
                @if (Auth::user()->Credential == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" id="riders-tab" data-bs-toggle="tab" href="#riders" role="tab">Rider Management</a>
                    </li>
                    @endif
            @endauth

            @auth
                {{-- Check if the user is admin --}}
                @if (Auth::user()->Credential == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="/otpform" style="color: #1DBC60;">Go to User Requests</a>
                    </li>
                    @endif
            @endauth

            @auth
                {{-- Check if the user is admin --}}
                @if (Auth::user()->Credential == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="/home/user-profile/report" style="color: #1DBC60;">Go to Report Generator</a>
                    </li>
                </ul>
                @endif
            @endauth
            </div>

            <!-- Content Section -->
            <div class="col-md-9">
                <div class="tab-content" id="myTabContent">
                    
               <!-- Personal Info Section -->
            <div class="tab-pane fade show active" id="personal-info" role="tabpanel">
                <h5>Personal Information</h5>
                <form>
                    <div style="padding-left: 30px;">
                        <div class="mb-3">
                            <label for="name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $userdata->name }}" style="color: #0D52BD;" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="Middle_Name" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="Middle_Name" name="Middle_Name" value="{{ $userdata->Middle_Name }}" style="color: #0D52BD;" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="Last_Name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="Last_Name" name="Last_Name" value="{{ $userdata->Last_Name }}" style="color: #0D52BD;" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="Birth_Date" class="form-label">Birth Date</label>
                            <input type="text" class="form-control" id="Birth_Date" name="Birth_Date" value="{{ $userdata->Birth_Date }}" style="color: #0D52BD;" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="Mobile_Number" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control" id="Mobile_Number" name="Mobile_Number" value="{{ $userdata->Mobile_Number }}" style="color: #0D52BD;" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $userdata->email }}" style="color: #0D52BD;" readonly>
                        </div>
                    </div>
                    <div style="padding-left: 30px;">
                        <a href="/home" class="btn btn-secondary">Home</a>
                        <button type="button" id="edit-button" class="btn btn-primary" >Edit</button>
                    </div>
                </form>
            </div>

           <!-- Edit Personal Info Section -->
            <div class="tab-pane fade" id="edit-personal-info" role="tabpanel">
                <form action="{{ route('user.update') }}" method="POST">
                    @csrf
                    <h5>Edit Personal Information</h5>
                    <div style="padding-left: 30px;">
                        <div class="mb-3">
                            <label for="name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $userdata->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="Middle_Name" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="Middle_Name" name="Middle_Name" value="{{ $userdata->Middle_Name }}">
                        </div>
                        <div class="mb-3">
                            <label for="Last_Name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="Last_Name" name="Last_Name" value="{{ $userdata->Last_Name }}">
                        </div>
                        <div class="mb-3">
                            <label for="Birth_Date" class="form-label">Birth Date</label>
                            <input type="text" class="form-control" id="Birth_Date" name="Birth_Date" value="{{ $userdata->Birth_Date }}">
                        </div>
                        <div class="mb-3">
                            <label for="Mobile_Number" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control" id="Mobile_Number" name="Mobile_Number" value="{{ $userdata->Mobile_Number }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $userdata->email }}">
                        </div>
                    </div>
                    
                    <h5 style="padding-top: 50px;">Edit Password</h5>
                    <div style="padding-left: 30px;">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter New Password">
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="password_confirmation" placeholder="Confirm Password">
                        </div>
                    </div>
                <div style="padding-left: 30px;">
                    <button type="button" onclick="window.location.href='/home/user-profile'" class="btn btn-secondary">Back</button>
                    <button type="submit" class="btn btn-primary">Change</button>
                </div>
                </form>
            </div>


           <!-- Request History -->
            <div class="tab-pane fade" id="request-history" role="tabpanel">
                <div class="container mt-5">
                    <h5>Payment Records</h5>
                    @if ($records->isEmpty())
                        <p>No records found.</p>
                    @else
                        @foreach ($records as $record)
                            <table class="table table-bordered mb-4">
                                <tbody>
                                    <tr>
                                        <td><label for="name" class="form-label">Name</label></td>
                                        <td><input type="text" class="form-control" id="name" value="{{ $record->name }}" readonly></td>
                                    </tr>
                                    <tr>
                                        <td><label for="requested_certificate" class="form-label">Requested Certificate</label></td>
                                        <td><input type="text" class="form-control" id="requested_certificate" value="{{ $record->requested_certificate }}" readonly></td>
                                    </tr>
                                    <tr>
                                        <td><label for="quantity" class="form-label">Quantity</label></td>
                                        <td><input type="number" class="form-control" id="quantity" value="{{ $record->quantity }}" readonly></td>
                                    </tr>
                                    <tr>
                                        <td><label for="proof" class="form-label">Proof</label></td>
                                        <td>
                                            @if ($record->proof)
                                                <img src="{{ asset('storage/' . $record->proof) }}" alt="Proof Image" class="img-fluid" style="max-width: 200px; max-height: 200px;">
                                            @else
                                                <span>No Proof Uploaded</span>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        @endforeach
                    @endif
                </div>
            </div>



                    <!-- Admin Management Tab -->
                    <div class="tab-pane fade" id="admin" role="tabpanel">
                        <h5>Admin Management</h5>
                        <form method="POST" action="{{ route('change.credential') }}">
                            @csrf
                            @method('PATCH')
                            <!-- Admin Lists -->
                            <div class="mb-3">
                                <label for="admin-lists" class="form-label">Admin Lists</label>
                                <select class="form-select" id="admin-lists" name="user_id">
                                    <option style="color: grey;">Select user</option>
                                    @if(isset($admins) && count($admins) > 0)
                                        @foreach ($admins as $admin)
                                            <option value="{{ $admin->User_Id }}">
                                                {{ $admin->name ?? 'N/A' }} {{ $admin->Middle_Name ?? '' }} {{ $admin->Last_Name ?? '' }}
                                                - {{ $admin->created_at->format('Y-m-d') ?? 'N/A' }}
                                                - {{ $admin->Credential ?? 'N/A' }}
                                            </option>
                                        @endforeach
                                    @else
                                        <option style="color: red;">No Admins Found</option>
                                    @endif
                                </select>
                            </div>
                            <!-- User Lists -->
                            <div class="mb-3">
                                <label for="user-lists" class="form-label">User Lists</label>
                                <select class="form-select" id="user-lists" name="user_id">
                                    <option style="color: grey;">Select user</option>
                                    @if(isset($users) && count($users) > 0)
                                        @foreach ($users as $user)
                                            <option value="{{ $user->User_Id }}">
                                                {{ $user->name ?? 'N/A' }} {{ $user->Middle_Name ?? '' }} {{ $user->Last_Name ?? '' }}
                                                - {{ $user->created_at->format('Y-m-d') ?? 'N/A' }}
                                                - {{ $user->Credential ?? 'N/A' }}
                                            </option>
                                        @endforeach
                                    @else
                                        <option style="color: red;">No User Found</option>
                                    @endif
                                </select>
                            </div>
                            <!-- All Lists -->
                            <div class="mb-3">
                                <label for="user-credential" class="form-label">All Lists</label>
                                <select class="form-select" id="user-credential" name="user_id">
                                    <option style="color: grey;">Select user</option>
                                    @if(isset($userlists) && count($userlists) > 0)
                                        @foreach ($userlists as $user)
                                            <option value="{{ $user->User_Id }}">
                                                {{ $user->name ?? 'N/A' }} {{ $user->Middle_Name ?? '' }} {{ $user->Last_Name ?? '' }}
                                                - {{ $user->created_at->format('Y-m-d') ?? 'N/A' }}
                                                - {{ $user->Credential ?? 'N/A' }}
                                            </option>
                                        @endforeach
                                    @else
                                        <option style="color: red;">No Users or Admin Found</option>
                                    @endif
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="change-credential" class="form-label">Change Credential (All Lists)</label><br>
                                <button type="submit" name="credential" value="admin" class="btn btn-primary">Make Admin</button>
                                <button type="submit" name="credential" value="user" class="btn btn-warning" style="color: #fcfcff; background-color: #008080; border-color: #008080;">Make User</button>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="request" role="tabpanel">
                        <h5>Request Management</h5>
                        <form>
                            <div class="mb-3">
                                <label for="sms-notifications" class="form-label">Request Information</label>
                                <select class="form-select" id="sms-notifications">
                                    <option selected>Enabled</option>
                                    <option>Disabled</option>
                                </select>
                            </div>
                            <a href="/home" class="btn btn-primary">Go Back to Home Page</a>
                        </form>
                    </div>

                    
                    <div class="tab-pane fade" id="user" role="tabpanel">
                        <h5>User Management</h5>
                        <form>
                            <div class="mb-3">
                                <label for="sms-notifications" class="form-label">User Information</label>
                                <select class="form-select" id="sms-notifications">
                                    <option selected>Enabled</option>
                                    <option>Disabled</option>
                                </select>
                            </div>
                            <a href="/home" class="btn btn-primary">Go Back to Home Page</a>
                        </form>
                    </div>

                    <!-- Rider Management Tab -->
                    <div class="tab-pane fade" id="riders" role="tabpanel">
                        <h5>Rider Management</h5>
                        <form method="POST" action="{{ route('change.ridercredential') }}">
                            @csrf
                            @method('PATCH')
                            <!-- All Lists -->
                            <div class="mb-3">
                                <label for="user-credential" class="form-label">Users Lists</label>
                                <select class="form-select" id="user-credential" name="rider_id" required>
                                    <option style="color: grey;">Select user</option>
                                    @if(isset($riderlists) && count($riderlists) > 0)
                                        @foreach ($riderlists as $rider)
                                            <option value="{{ $rider->User_Id }}">
                                                {{ $rider->name ?? 'N/A' }} {{ $rider->Middle_Name ?? '' }} {{ $rider->Last_Name ?? '' }}
                                                - {{ $rider->created_at->format('Y-m-d') ?? 'N/A' }}
                                                - {{ $rider->Credential ?? 'N/A' }}
                                            </option>
                                        @endforeach
                                    @else
                                        <option style="color: red;">No Users or Rider Found</option>
                                    @endif
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="change-credential" class="form-label">Change Credential (All Lists)</label><br>
                                <button type="submit" name="rider_credential" value="rider" class="btn btn-primary">Make Rider</button>
                                <button type="submit" name="rider_credential" value="user" class="btn btn-warning" style="color: #fcfcff; background-color: #008080; border-color: #008080;">Make User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.getElementById('edit-button').addEventListener('click', function () {
        // Show Edit Tab and hide Personal Info Tab
        document.getElementById('personal-info-tab').classList.remove('active');
        document.getElementById('edit-personal-info-tab').classList.add('active');
        document.getElementById('personal-info').classList.remove('show', 'active');
        document.getElementById('edit-personal-info').classList.add('show', 'active');
    });

    document.getElementById('done-button').addEventListener('click', function () {
        // Return back to Personal Info Tab
        document.getElementById('edit-personal-info-tab').classList.remove('active');
        document.getElementById('personal-info-tab').classList.add('active');
        document.getElementById('edit-personal-info').classList.remove('show', 'active');
        document.getElementById('personal-info').classList.add('show', 'active');
    });
</script>

@endsection
