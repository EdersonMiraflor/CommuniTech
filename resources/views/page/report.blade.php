<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Issued Certificates</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Create the data table
            var data = google.visualization.arrayToDataTable([
                ['Transaction ID', 'Quantity'],
                @foreach($transactions as $transaction)
                    ['Document Type: {{ $transaction->Transaction_Id }}', {{ $transaction->Quantity }}],
                @endforeach
            ]);

            // Set chart options
            var options = {
                title: 'Weekly Issued Cert',
          
            };

            // Instantiate and draw our chart
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <h1>Transaction Quantity Pie Chart</h1>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
</html>
