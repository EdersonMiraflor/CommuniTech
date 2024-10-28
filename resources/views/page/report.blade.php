<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set the character encoding and viewport for responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificates Report</title>
    
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
            
//Pie Chat Start
            // Initialize DataTable for the pie chart and define columns
            var pieData = new google.visualization.DataTable();
            pieData.addColumn('string', 'Certificate Type'); // Certificate type column
            pieData.addColumn('number', 'Total Issued'); // Quantity column

            // Loop through each certificate type and add it to the pie chart data
            @foreach($certificates as $certificate)
                pieData.addRow(['{{ $certificate->Cert_Type }}', {{ $certificate->total_quantity }}]);
            @endforeach

            // Options for customizing the pie chart
            var pieOptions = {
                title: 'Total Issued Certificates by Type', // Chart title
                pieHole: 0.4, // Converts pie chart to donut chart by setting a hole in the middle
                colors: ['#3366CC', '#DC3912', '#FF9900'] // Define colors for the slices
            };

            // Draw the pie chart in the element with id 'piechart'
            var pieChart = new google.visualization.PieChart(document.getElementById('piechart'));
            pieChart.draw(pieData, pieOptions);
//Pie Chat End

//Line Chat Start
            // Initialize DataTable for the line chart and define columns for each certificate type
            var lineData = new google.visualization.DataTable();
            lineData.addColumn('string', 'Day'); // Column for weekdays (Monday to Friday)
            lineData.addColumn('number', 'Birth Certificate'); // Birth certificate count
            lineData.addColumn('number', 'Marriage Certificate'); // Marriage certificate count
            lineData.addColumn('number', 'Death Certificate'); // Death certificate count

            // Add rows to line chart data, one row per day with corresponding data
            lineData.addRows([
                ['Monday', lineChartData['Birth Certificate'][0], lineChartData['Marriage Certificate'][0], lineChartData['Death Certificate'][0]],
                ['Tuesday', lineChartData['Birth Certificate'][1], lineChartData['Marriage Certificate'][1], lineChartData['Death Certificate'][1]],
                ['Wednesday', lineChartData['Birth Certificate'][2], lineChartData['Marriage Certificate'][2], lineChartData['Death Certificate'][2]],
                ['Thursday', lineChartData['Birth Certificate'][3], lineChartData['Marriage Certificate'][3], lineChartData['Death Certificate'][3]],
                ['Friday', lineChartData['Birth Certificate'][4], lineChartData['Marriage Certificate'][4], lineChartData['Death Certificate'][4]],
            ]);

            // Options to customize the line chart
            var options = {
                title: 'Appointments per Day', // Title of the line chart
                hAxis: { title: 'Day' }, // X-axis title
                vAxis: {
                    title: 'Number of Appointments', // Y-axis title
                    ticks: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10], // Custom ticks for Y-axis
                    gridlines: { count: 11 }, // Number of gridlines on Y-axis
                    viewWindow: { min: 0, max: 10 } // Set Y-axis range from 0 to 10
                },
                legend: { position: 'right', alignment: 'center' } // Position of legend on the right
            };

            // Draw the line chart in the element with id 'line_chart_div'
            var chart = new google.visualization.LineChart(document.getElementById('line_chart_div'));
            chart.draw(lineData, options);
        }
//Line Chat End
    </script>

    <!-- Inline CSS for styling the page and chart containers -->
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center; /* Center-align content */
        }
        #chart_div, #piechart, #line_chart_div {
            margin: auto;
            width: 650px;  /* Chart width */
            height: 400px; /* Chart height */
        }
    </style>
</head>

<body>
    <!-- Page header -->
    <h1>Weekly Certificates Report</h1>
    <br><br>
    <h2>Issued Certificates by Type</h2>
    <div id="piechart"></div> <!-- Pie chart container -->
    <div id="line_chart_div"></div> <!-- Line chart container -->
</body>
</html>
