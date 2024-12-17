@extends('layouts.layout')

@section('contents')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Create Delivery Record</title>
</head>
<style>
    /* General container styling */
.container {
    max-width: 600px;
    margin: 40px auto;
    padding: 20px;
    background-color: #e8f7ec;
    border: 2px solid #04AA6D;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgb(196, 193, 193);
}

/* Heading styling */
h1 {
    font-size: 1.8rem;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

/* Form inputs and labels */
.form-label {
    font-weight: bold;
    color: #555;
    margin-bottom: 5px;
}

.form-control {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 10px;
    transition: border-color 0.2s ease-in-out;
}

.form-control:focus {
    border-color: #04AA6D;
    box-shadow: 0 0 5px #04AA6D;
    outline: none;
}

/* Error message styling */
.text-danger {
    font-size: 0.875rem;
    color: #dc3545;
}

/* Success message styling */
.alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 15px;
}

/* Button styling */
.btn-primary {
    display: inline-block;
    padding: 10px 15px;
    font-size: 1rem;
    font-weight: bold;
    color: #fff;
    background-color: #04AA6D;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

.btn-primary:hover {
    background-color: #95D2B3;
}

/* Responsive design */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }

    h1 {
        font-size: 1.5rem;
    }

    .btn-primary {
        width: 100%;
    }
}

    </style>
<body>
    <div class="container mt-5">
        <h1>Create Delivery Record</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('delivery.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">

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

<!--changes in input format-->
    <div class="mb-3">
        <label for="estimated_delivery_day" class="form-label">Day of Delivery</label>
        <input type="date" class="form-control" id="estimated_delivery_day" name="estimated_delivery_day" value="{{ old('estimated_delivery_day') }}" placeholder="ex 2024/12/17" required>
        @error('barangay') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>
<script>
    function validateForm() {
        const currentDate = new Date();
        const dateInput = document.getElementById('estimated_delivery_day').value;
        const mobileInput = document.getElementById('mobile').value;

        // Regex for YYYY/MM/DD format
        const datePattern = /^\d{4}\/\d{2}\/\d{2}$/;

        if (!datePattern.test(dateInput)) {
            alert("Estimated delivery day must be in the format YYYY/MM/DD.");
            return false;
        }

        const enteredDate = new Date(dateInput);

        // Check if the date is in the future
        if (enteredDate > currentDate) {
            alert("Estimated delivery day cannot be in the future.");
            return false;
        }

        // Validate mobile field for numeric input only
        if (!/^\d+$/.test(mobileInput)) {
            alert("Mobile number should contain only numeric characters.");
            return false;
        }

        return true;
    }
</script>


<!--script for calendar restriction-->
<script>
   document.addEventListener("DOMContentLoaded", function() {
    // Get the current date
    const currentDate = new Date();
    
    // Format the date as yyyy-mm-dd (the format accepted by the input type="date")
    const year = currentDate.getFullYear();
    const month = ("0" + (currentDate.getMonth() + 1)).slice(-2); // Add leading zero to month if necessary
    const day = ("0" + currentDate.getDate()).slice(-2); // Add leading zero to day if necessary
    const formattedDate = `${year}-${month}-${day}`;

    // Set the min attribute to the current date
    const deliveryDateInput = document.getElementById('estimated_delivery_day');
    if (deliveryDateInput) {
        deliveryDateInput.setAttribute('min', formattedDate);
    }
});


</script>
@endsection
