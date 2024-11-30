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
</style>

    <div class="container mt-5">
        <div class="row">
            <!-- Sidebar Navigation -->
            <div class="col-md-3">
                <ul class="nav flex-column nav-pills" id="myTab" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link active" id="personal-info-tab" data-bs-toggle="tab" href="#personal-info" role="tab">Personal Info</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="request-history-tab" data-bs-toggle="tab" href="#request-history" role="tab">Requests History</a>
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
                        <a class="nav-link" href="/otpform" style="color: #0000FF;">Go to User Requests</a>
                    </li>
                    @endif
            @endauth

            @auth
                {{-- Check if the user is admin --}}
                @if (Auth::user()->Credential == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="/home/user-profile/report" style="color: #0000FF;">Go to Report Generator</a>
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
                    <div style="padding-left: 58px;">
                        <div class="mb-3">
                            <label for="name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $userdata->name }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="Middle_Name" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="Middle_Name" name="Middle_Name" value="{{ $userdata->Middle_Name }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="Last_Name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="Last_Name" name="Last_Name" value="{{ $userdata->Last_Name }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="Birth_Date" class="form-label">Birth Date</label>
                            <input type="text" class="form-control" id="Birth_Date" name="Birth_Date" value="{{ $userdata->Birth_Date }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="Mobile_Number" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control" id="Mobile_Number" name="Mobile_Number" value="{{ $userdata->Mobile_Number }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $userdata->email }}" readonly>
                        </div>
                    </div>
                    <a href="/home" class="btn btn-primary">Go Back to Home Page</a>
                    <button type="button" id="edit-button" class="btn btn-primary">Edit Profile</button>
                </form>
            </div>

           <!-- Edit Personal Info Section -->
            <div class="tab-pane fade" id="edit-personal-info" role="tabpanel">
                <h5>Edit Personal Information</h5>
                <form action="{{ route('user.update') }}" method="POST">
                    @csrf
                    <div style="padding-left: 58px;">
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
                    <button type="submit" class="btn btn-primary">Done</button>
                </form>
            </div>


                    <!-- Request History -->
                    <div class="tab-pane fade" id="request-history" role="tabpanel">
                        <h5>Request History</h5>
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label">Request Date</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Request Status</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Certificate Type</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Certificate Quantity</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Certificate Amount</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
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
                        <form>
                            <div class="mb-3">
                                <label for="sms-notifications" class="form-label">Riders Information</label>
                                <select class="form-select" id="sms-notifications">
                                    <option selected>Enabled</option>
                                    <option>Disabled</option>
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
    <div class="alert alert-success" id="success-message">{{ session('success') }}</div>
@endif
@if(session('error'))
    <div class="alert alert-danger" id="error-message">{{ session('error') }}</div>
@endif
@if(session('info'))
    <div class="alert alert-info" id="info-message">{{ session('info') }}</div>
@endif

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
