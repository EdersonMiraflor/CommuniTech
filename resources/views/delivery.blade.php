<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Delivery Record</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1>Create Delivery Record</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Form for Adding Delivery Details -->
        <form action="{{ route('delivery.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
    <label for="rider" class="form-label">Rider</label>
    <select class="form-control" id="rider" name="rider" required>
        <option value="">Select a rider</option>
        @foreach($riders as $rider)
            <option value="{{ $rider->User_Id }}" {{ old('rider') == $rider->User_Id ? 'selected' : '' }}>
                {{ $rider->name }}
            </option>
        @endforeach
    </select>
    @error('rider') <small class="text-danger">{{ $message }}</small> @enderror
</div>


            <div class="mb-3">
                <label for="requested_certificate" class="form-label">Client</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="requested_certificate" class="form-label">Requested Certificate</label>
                <input type="text" class="form-control" id="requested_certificate" name="requested_certificate" value="{{ old('requested_certificate') }}" required>
                @error('requested_certificate') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}" required>
                @error('quantity') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
                @error('address') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile" value="{{ old('mobile') }}" required>
                @error('mobile') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="barangay" class="form-label">Barangay</label>
                <input type="text" class="form-control" id="barangay" name="barangay" value="{{ old('barangay') }}" required>
                @error('barangay') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="estimated_delivery_day" class="form-label">Day of Delivery</label>
                <input type="text" class="form-control" id="estimated_delivery_day" name="estimated_delivery_day" value="{{ old('estimated_delivery_day') }}" required>
                @error('barangay') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
