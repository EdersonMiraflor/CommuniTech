@extends('layouts.layout')
@section('contents')


<head>
<style>
    .report-container {
        margin-top: 30px;
        margin-bottom: 30px;
        flex-wrap: wrap;
        justify-content: center; /* Center-align items */
        background-color: #e8f7ec;
        padding: 20px;
        max-width: 1300px;
        gap: 20px;
        margin-left: auto;
        margin-right: auto; /* Center the container */
    }

    .pie-container {
        display: flex;
        flex-direction: column; /* Stack content vertically */
        justify-content: center;
        align-items: center; /* Center-align chart and text */
        width: 100%;
        max-width: 850px;
        padding: 20px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        background-color: #28a745;
        margin-left: auto;
        margin-right: auto; /* Center the container */
        margin-bottom: 50px;
    }

    #piechart {
        width: 100%; /* Ensure the chart fits within the container */
        height: 400px;
    }

    h1 {
        text-align: center;
        font-size: 2em;
        margin-top: 40px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    h2 {
        text-align: center;
        color: #E8F7EC;
        font-size: 1.3em;
        margin-top: 20px;
        margin-bottom: 20px;
        font-weight: bold;
    }

    @media only screen and (max-width: 768px) {
        .report-container {
            flex-direction: column; /* Stack items vertically on smaller screens */
            padding: 10px;
            gap: 15px; /* Adjust spacing between items */
        }

        .pie-container {
            width: 90%; /* Adjust width to fit the screen */
            padding: 10px; /* Reduce padding */
            margin-bottom: 30px; /* Adjust bottom margin */
        }

        #piechart {
            height: 150px; /* Adjust chart height for smaller screens */
            width: 75%;
        }

        h1 {
            font-size: 1.5em; /* Adjust font size for smaller screens */
        }

        h2 {
            font-size: 1.2em; /* Adjust font size for smaller screens */
        }
    }
</style>

</head>
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<!-- Load Google Charts library -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    // Load the Google Charts library and specify that we want to use the 'corechart' package
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawCharts);  // Call the drawCharts function once the library is loaded

    // Function that creates and displays the pie and line charts
    function drawCharts() {
         // Retrieve the line chart data that was passed from the controller in JSON format
        var lineChartData = @json($lineChartData);
        
// Pie Chart Start
        var pieData = new google.visualization.DataTable();// Create a new DataTable for the pie chart
        pieData.addColumn('string', 'Certificate Type'); // Define the first column for certificate types
        pieData.addColumn('number', 'Total Issued');  // Define the second column for the total quantity issued

        // Loop through the certificates data to populate the pie chart
        @foreach($certificates as $certificate)
            pieData.addRow(['{{ $certificate->Cert_Type }}', {{ $certificate->total_quantity }}]);// Add each certificate type and its total issued quantity
        @endforeach

        // Options for the pie chart display
        var pieOptions = {
            title: 'Total Issued Certificates by Type', // Title of the pie chart
            pieHole: 0.4, // Makes the pie chart a donut chart by creating a hole in the center
            colors: ['#bce7c8', '#90d7a4', '#4ebf6e'] // Specify colors for the pie chart sections
        };

        var pieChart = new google.visualization.PieChart(document.getElementById('piechart'));// Create a new PieChart instance
        pieChart.draw(pieData, pieOptions);// Draw the pie chart with the data and options provided
// Pie Chart End

    }
</script>


<body>

<div class="report-container">

<center>
    <h1 style="text-align:center;">Weekly Certificates Report</h1>
</center>

        <div class="pie-container">
            <h2>Issued Certificates by Users</h2>
            <div id="piechart" class="pieclass"></div> <!-- Pie chart container -->
        </div>

<!--

    <div class="line-container">
            <h2>Users Appointment Day</h2>
            <div id="line_chart_div"></div> r 
            </div>

-->
        
</div>
   
</body>


@endsection
