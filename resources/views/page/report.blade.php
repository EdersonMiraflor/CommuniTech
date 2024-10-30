@extends('layouts.layout')
@section('contents')

<!-- Load Google Charts library -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    // Load Google Charts and specify the 'corechart' package
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawCharts); // Set the drawCharts function to run when charts library is loaded

    // Function to draw both pie and line charts
    function drawCharts() {
        // Line chart data passed from the controller as a JSON object
        var lineChartData = @json($lineChartData);
        
        // Pie Chart Start
        var pieData = new google.visualization.DataTable();
        pieData.addColumn('string', 'Certificate Type'); // Certificate type column
        pieData.addColumn('number', 'Total Issued'); // Quantity column

        @foreach($certificates as $certificate)
            pieData.addRow(['{{ $certificate->Cert_Type }}', {{ $certificate->total_quantity }}]);
        @endforeach

        var pieOptions = {
            title: 'Total Issued Certificates by Type', // Chart title
            pieHole: 0.4, // Converts pie chart to donut chart by setting a hole in the middle
            colors: ['#bce7c8', '#90d7a4', '#4ebf6e'] // Define colors for the slices
        };

        var pieChart = new google.visualization.PieChart(document.getElementById('piechart'));
        pieChart.draw(pieData, pieOptions);
        // Pie Chart End

        // Line Chart Start
        var lineData = new google.visualization.DataTable();
        lineData.addColumn('string', 'Day'); // Column for weekdays
        lineData.addColumn('number', 'Birth Certificate'); // Birth certificate count
        lineData.addColumn('number', 'Marriage Certificate'); // Marriage certificate count
        lineData.addColumn('number', 'Death Certificate'); // Death certificate count

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
            colors: ['#bce7c8', '#90d7a4', '#4ebf6e'] // Matching colors for each certificate type
        };

        var chart = new google.visualization.LineChart(document.getElementById('line_chart_div'));
        chart.draw(lineData, options);
        // Line Chart End
    }
</script>

<!-- Inline CSS for styling the page and chart containers -->
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
    }
    #chart_div, #piechart, #line_chart_div {
        margin: auto;
        width: 850px;
        height: 400px;
    }
</style>
</head>

<body>
    <br><br><br>
    <h1>Weekly Certificates Report</h1>
    <br><br>
    <h2>Issued Certificates by Users</h2>
    <div id="piechart"></div> <!-- Pie chart container -->
    <h2>Users Appointment Day</h2>
    <div id="line_chart_div"></div> <!-- Line chart container -->
</body>
@endsection
