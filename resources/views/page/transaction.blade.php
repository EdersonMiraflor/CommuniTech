@extends('layouts.layout')

@section('contents')

<html>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- Include DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">

    <style>
        
        .transaction-box-container {
            margin-top: 3rem;
            background-color: #e8f7ec;
            padding: 20px;
            border-radius: 8px;
        }

        #transaction {
            background-color: white;
            width: 100%;
        }

        #transaction td, #transaction th {
            padding: 12px; /* Add padding for table cells */
        }
    </style>
<body>
    <div class="transaction-box-container">
        <table id="transaction" class="display">
            <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th>Submitted Date</th>
                    <th>Pick-Up Date</th>
                    <th>No. of Copies</th>
                    <th>Type of Certificate</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>TRX12345</td>
                    <td>2024-10-01</td>
                    <td>2024-10-07</td>
                    <td>3</td>
                    <td>Birth Certificate</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <td>TRX67890</td>
                    <td>2024-09-28</td>
                    <td>2024-10-05</td>
                    <td>1</td>
                    <td>Marriage Certificate</td>
                    <td>Completed</td>
                </tr>
                <tr>
                    <td>TRX11121</td>
                    <td>2024-10-03</td>
                    <td>2024-10-10</td>
                    <td>2</td>
                    <td>Death Certificate</td>
                    <td>In Progress</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>

    <script>
    // Initialize the DataTable
    let transactionTable = new DataTable('#transaction');
    </script>
</html>

@endsection
