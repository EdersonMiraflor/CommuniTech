<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificates Report</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            // Line Chart Data for Certificates
            var lineData = google.visualization.arrayToDataTable([
                ['Day', 'Live Birth', 'Marriage', 'Death'],
                ['Monday',  5,  2,  1], 
                ['Tuesday',  10,  1,  2],
                ['Wednesday',  3,  4,  1],
                ['Thursday',  4,  3,  2],
                ['Friday',  7,  2,  0]
            ]);

            // Line chart options
            var materialOptions = {
                chart: {
                    title: 'Certificates Issued Over the Week'
                },
                width: 900,
                height: 500,
                series: {
                    0: {axis: 'Live Birth Certificate'},
                    1: {axis: 'Marriage Certificate'},
                    2: {axis: 'Death Certificate'}
                },
                axes: {
                    x: {
                        Day: {label: 'Days'}
                    },
                    y: {
                        Live: {label: 'Number of Certificates'},
                        Marriage: {label: 'Number of Certificates'},
                        Death: {label: 'Number of Certificates'}
                    }
                }
            };

            var lineChart = new google.visualization.LineChart(document.getElementById('line_chart'));
            lineChart.draw(lineData, materialOptions);

            // Pie Chart Data
            var pieData = google.visualization.arrayToDataTable([
                ['Certificate Type', 'Total Quantity'],
                @foreach($certificates as $certificate)
                    ['{{ $certificate->Cert_Type }}', {{ $certificate->total_quantity }}],
                @endforeach
            ]);

            // Set pie chart options
            var pieOptions = {
                title: 'Total Issued Certificates by Type',
            };

            // Instantiate and draw the pie chart
            var pieChart = new google.visualization.PieChart(document.getElementById('piechart'));
            pieChart.draw(pieData, pieOptions);
        }
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        #line_chart, #piechart {
            margin: auto;
            width: 900px;
            height: 500px;
        }
    </style>
</head>
<body>
    <h1>Company Performance and Issued Certificates Report</h1>
    
    <h2>Certificates Issued Over the Week</h2>
    <div id="line_chart"></div>

    <h2>Issued Certificates by Type</h2>
    <div id="piechart"></div>
</body>
</html>
