<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h2>Title: {{ $title }}</h2>
    <h2>Date: {{ $date }}</h2>
    
    <table class="table table-bordered">
        <thead>
            <th>User Id: </th>
            <th>Certificate Type: </th>
            <th>No of Quantity: </th>
        </thead>
        <tbody>
            @foreach($request as $item)
            <tr>
                <td>{{ $item->User_Id }}</td>
                <td>{{ $item->Cert_Type }}</td>
                <td>{{ $item->Quantity }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>