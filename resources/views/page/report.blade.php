@extends('layouts.layout')
@section('contents')

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

// Line Chart Start
        var lineData = new google.visualization.DataTable(); // Create a new DataTable for the line chart
        lineData.addColumn('string', 'Day'); // Column for the days of the week
        lineData.addColumn('number', 'Birth Certificate'); // Column for the count of birth certificates
        lineData.addColumn('number', 'Marriage Certificate'); // Column for the count of marriage certificates
        lineData.addColumn('number', 'Death Certificate'); // Column for the count of death certificates

        // Populate the line chart with data for each weekday
        lineData.addRows([
            ['Monday', lineChartData['Birth Certificate'][0], lineChartData['Marriage Certificate'][0], lineChartData['Death Certificate'][0]],
            ['Tuesday', lineChartData['Birth Certificate'][1], lineChartData['Marriage Certificate'][1], lineChartData['Death Certificate'][1]],
            ['Wednesday', lineChartData['Birth Certificate'][2], lineChartData['Marriage Certificate'][2], lineChartData['Death Certificate'][2]],
            ['Thursday', lineChartData['Birth Certificate'][3], lineChartData['Marriage Certificate'][3], lineChartData['Death Certificate'][3]],
            ['Friday', lineChartData['Birth Certificate'][4], lineChartData['Marriage Certificate'][4], lineChartData['Death Certificate'][4]],
        ]);

        // Options for the line chart display
        var options = {
            title: 'Appointments per Day',// Title of the line chart
            hAxis: { title: 'Day' },// Title for the horizontal axis
            vAxis: {
                title: 'Number of Appointments',// Title for the vertical axis
                ticks: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10], // Specify ticks on the vertical axis
                gridlines: { count: 11 },// Number of gridlines on the vertical axis
                viewWindow: { min: 0, max: 10 }// Set the view window for the vertical axis
            },
            legend: { position: 'right', alignment: 'center' },// Position and alignment of the legend
            colors: ['#bce7c8', '#90d7a4', '#4ebf6e'] // Define colors for the line chart
        };

        var chart = new google.visualization.LineChart(document.getElementById('line_chart_div'));// Create a new LineChart instance
        chart.draw(lineData, options);// Draw the line chart with the data and options provided
// Line Chart End
    }
</script>

<!-- Inline CSS for styling the page and chart containers -->
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center; /* Center-align text on the page */
        margin: 0;
        padding: 0;
    }
    
    .pie-container {
        width: 100%;
        max-width: 850px;
        padding: 20px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        align-items: center;
        background-color: #E8F7EC;
        margin-left: 190px;
        margin-bottom: 50px;
      
    }

    .line-container {
        width: 100%;
        max-width: 850px;
        padding: 20px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        align-items: center;
        background-color: #E8F7EC;
        margin-left: 190px;
        margin-bottom: 20px;
    }

    #chart_div, #piechart, #line_chart_div {
        width: 100%; /* Adjust chart containers to fit the container */
        height: 400px;
    }
    h1 {
        font-size: 2em;
        margin-top: 40px;
        font-weight: bold;
        margin-left: 110px;
        margin-bottom: 20px;
    }
    h2 {
        font-size: 1.3em;
        margin-top: 20px;
        margin-bottom: 20px;
        font-weight: bold;
    }
</style>
</head>

<body>

    <h1>Weekly Certificates Report</h1>

        <div class="pie-container">
            <h2>Issued Certificates by Users</h2>
            <div id="piechart"></div> <!-- Pie chart container -->
        </div>
        <div class="line-container">
            <h2>Users Appointment Day</h2>
            <div id="line_chart_div"></div> <!-- Line chart container -->
        </div>
   
</body>


@endsection
