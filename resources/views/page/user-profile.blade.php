@extends('layouts.layout')

@section('contents')
    <!-- Section Start -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
<!--Report Generator Script Start-->
<!-- Load Google Charts library -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawCharts);

    function drawCharts() {
        // Retrieve the data passed from the controller
        var lineChartData = @json($lineChartData);

        // Pie Chart Start
        var pieData = new google.visualization.DataTable();
        pieData.addColumn('string', 'Certificate Type');
        pieData.addColumn('number', 'Total Issued');

        @foreach($certificates as $certificate)
            pieData.addRow(['{{ $certificate->Cert_Type }}', {{ $certificate->total_quantity }}]);
        @endforeach

        var pieOptions = {
            title: 'Total Issued Certificates by Type',
            pieHole: 0.4,
            colors: ['#bce7c8', '#90d7a4', '#4ebf6e']
        };

        var pieChart = new google.visualization.PieChart(document.getElementById('piechart'));
        pieChart.draw(pieData, pieOptions);
        // Pie Chart End

        // Line Chart Start
        var lineData = new google.visualization.DataTable();
        lineData.addColumn('string', 'Day');
        lineData.addColumn('number', 'Birth Certificate');
        lineData.addColumn('number', 'Marriage Certificate');
        lineData.addColumn('number', 'Death Certificate');

        lineData.addRows([
            ['Monday', lineChartData['Birth Certificate'][0], lineChartData['Marriage Certificate'][0], lineChartData['Death Certificate'][0]],
            ['Tuesday', lineChartData['Birth Certificate'][1], lineChartData['Marriage Certificate'][1], lineChartData['Death Certificate'][1]],
            ['Wednesday', lineChartData['Birth Certificate'][2], lineChartData['Marriage Certificate'][2], lineChartData['Death Certificate'][2]],
            ['Thursday', lineChartData['Birth Certificate'][3], lineChartData['Marriage Certificate'][3], lineChartData['Death Certificate'][3]],
            ['Friday', lineChartData['Birth Certificate'][4], lineChartData['Marriage Certificate'][4], lineChartData['Death Certificate'][4]],
        ]);

        var options = {
            title: 'Appointments per Day',
            hAxis: { title: 'Day' },
            vAxis: {
                title: 'Number of Appointments',
                ticks: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                gridlines: { count: 11 },
                viewWindow: { min: 0, max: 10 }
            },
            legend: { position: 'right', alignment: 'center' },
            colors: ['#bce7c8', '#90d7a4', '#4ebf6e']
        };

        var chart = new google.visualization.LineChart(document.getElementById('line_chart_div'));
        chart.draw(lineData, options);
        // Line Chart End
    }
</script>

<style>
    /* Add styling here if necessary */
    #piechart, #line_chart_div {
        width: 100%;
        height: 250px;
    }
</style>
<!--Report Generator Script Ends-->

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
                        <a class="nav-link" id="other-settings-tab" data-bs-toggle="tab" href="#other-settings" role="tab">Report Generator</a>
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
                                <label for="change-credential" class="form-label">Change Credential (All Lists)</label>
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

                    <!-- Report Generator -->
<!--Start-->
                    <div class="tab-pane fade" id="other-settings" role="tabpanel">

                        <div class="container">
                            <div class="row">
                                <!-- Pie Chart -->
                                <div class="col-md-4">
                                    <h2>Issued Certificates</h2>
                                    <div id="piechart"></div>
                                </div>
                                <br><br><br>
                                <!-- Line Chart -->
                                <div class="col-md-4">
                                    <h2>Appointments per Day</h2>
                                    <div id="line_chart_div"></div>
                                </div>
                            </div>
                        </div>
<!--End-->
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
