@extends('layouts.layout')

@section('contents')
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

    /* General container styling */
    .container {
        margin-top: 5px;
        margin-bottom: 30px;
    }

    .row {
        display: flex;
    }

    /* Sidebar styles */
    .col-md-3 {
        background-color: #E8F7EC;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .nav-pills .nav-link {
        color: #495057;
        background-color: #fff;
        border-radius: 5px;
        padding: 10px 15px;
        margin-bottom: 10px;
        text-align: center;
        transition: all 0.3s ease-in-out;
    }

    .nav-pills .nav-link:hover {
        background-color: #90D7A4;
        color: #fff;
    }

    .nav-pills .nav-link.active {
        background-color: #04AA6D;
        color: #fff;
        font-weight: bold;
    }

    /* Dropdown styling for select elements */
    select.form-select {
        border: 1px solid #ced4da;
        border-radius: 5px;
        padding: 10px 15px;
        background-color: #ffffff;
        color: #495057;
        font-size: 1rem;
    }

    select.form-select:focus {
        border-color: #000000;
        box-shadow: 0 0 0 0.2rem rgba(13, 82, 189, 0.25);
    }

    select.form-select option[style*="color: grey"] {
        color: grey;
    }

    select.form-select option[style*="color: red"] {
        color: red;
    }

    /* Button styling */
    button.btn {
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 1rem;
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    button.btn-primary {
        background-color: #04AA6D;
        color: #ffffff;
    }

    button.btn-warning {
        color: #fcfcff;
        background-color: #008080;
        border-color: #008080;
    }

    button.btn:hover {
        transform: translateY(-2px);
    }

    button.btn:active {
        transform: translateY(1px);
    }
</style>


                    <!-- Admin Management Tab -->
                    <div class="tab-pane" id="admin" role="tabpanel">
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

                    <!-- Rider Management Tab -->
                    <div class="tab-pane" id="riders" role="tabpanel">
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
@endsection