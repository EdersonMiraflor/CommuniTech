<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Details</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Add your CSS -->
</head>
<body>
    <div class="container mt-5">
        <h1>Delivery Details</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Pending Payments -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Certificate</th>
                    <th>Quantity</th>
                    <th>Address</th>
                    <th>Barangay</th>
                    <th>Mobile</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($records as $record)
                    <tr>
                        <td>{{ $record->Payment_Id }}</td>
                        <td>{{ $record->name }}</td>
                        <td>{{ $record->requested_certificate }}</td>
                        <td>{{ $record->quantity }}</td>
                        <td>{{ $record->address }}</td>
                        <td>{{ $record->barangay }}</td>
                        <td>{{ $record->mobile }}</td>
                        <td>
                            <form action="{{ route('admin.delivery.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="payment_id" value="{{ $record->Payment_Id }}">
                                <select name="status" class="form-control" required>
                                    <option value="pending" {{ $record->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="verified" {{ $record->status == 'verified' ? 'selected' : '' }}>Verified</option>
                                </select>
                                <button type="submit" class="btn btn-primary mt-2">Update</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
