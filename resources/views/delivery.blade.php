@extends('layouts.layout')

@section('contents')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Create Delivery Record</title>
</head>
<style>
    /* General container styling */
.container {
    max-width: 850px;
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
<!-- Success Flash Message -->
<div id="flashMessage" style="
    position: fixed;
    width: 70%;
    height: 30%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    color: green; /* Text color set to green */
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border: 2px solid green; /* Added green border */
    border-radius: 8px;

    display: flex; /* Use flexbox to align text */
    align-items: center; /* Center vertically */
    justify-content: center; /* Center horizontally */
    text-align: center;

    font-size: 20px; /* Make text bigger */
    font-weight: bold; /* Optional: make it bold */
    z-index: 9999; /* Make sure it's above content */
">
    <p>{{ session('success') }}</p>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const flashMessage = document.getElementById('flashMessage');
        
        if (flashMessage) {
            // Set timeout to remove flash message after 20 seconds
            setTimeout(() => {
                flashMessage.style.transition = "opacity 1s ease";
                flashMessage.style.opacity = "0";
                setTimeout(() => flashMessage.remove(), 2000); // Remove the element after fading out
            }, 2000); 
        }
    });
</script>
@endif

@if ($errors->any())
<!-- Error Flash Message -->
<div id="flashMessage" style="
    position: fixed;
    width: 70%;
    height: 30%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    color: red; /* Text color set to red */
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border: 2px solid red; /* Added red border */
    border-radius: 8px;

    display: flex; /* Use flexbox to align text */
    align-items: center; /* Center vertically */
    justify-content: center; /* Center horizontally */
    text-align: center;

    font-size: 20px; /* Make text bigger */
    font-weight: bold; /* Optional: make it bold */
    z-index: 9999; /* Make sure it's above content */
">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const flashMessage = document.getElementById('flashMessage');

        if (flashMessage) {
            setTimeout(() => {
                flashMessage.style.transition = "opacity 1s ease";
                flashMessage.style.opacity = "0";
                setTimeout(() => flashMessage.remove(), 2000); // Remove the element after fading out
            }, 2000);
        }
    });
</script>
@endif

@if(session('error'))
<div id="flashMessage" style="
    position: fixed;
    width: 70%;
    height: 30%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    color: red; /* Text color set to red for errors */
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border: 2px solid red; /* Added red border */
    border-radius: 8px;

    display: flex; /* Use flexbox to align text */
    align-items: center; /* Center vertically */
    justify-content: center; /* Center horizontally */
    text-align: center;

    font-size: 20px; /* Make text bigger */
    font-weight: bold; /* Optional: make it bold */
    z-index: 9999; /* Make sure it's above content */
">
    <p>{{ session('error') }}</p>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const flashMessage = document.getElementById('flashMessage');

        if (flashMessage) {
            setTimeout(() => {
                flashMessage.style.transition = "opacity 1s ease";
                flashMessage.style.opacity = "0";
                setTimeout(() => flashMessage.remove(), 1000);
            }, 5000);
        }
    });
</script>
@endif


        <form action="{{ route('delivery.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">

    @csrf

    <div class="mb-3">
    <label for="rider" class="form-label">Rider</label>
    <select class="form-control" id="rider" name="rider" required>
        <option value="">Select a rider</option>
        @foreach($riders as $rider)
            <option value="{{ $rider->User_Id }}" 
                    data-mobile="{{ $rider->Mobile_Number }}"
                    {{ old('rider') == $rider->User_Id ? 'selected' : '' }}>
                {{ $rider->name }}
            </option>
        @endforeach
    </select>
    @error('rider') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label for="rider_number" class="form-label">Rider Number</label>
    <input type="text" class="form-control" id="rider_number" name="rider_number" 
           value="{{ old('rider_number') }}" readonly required>
    @error('rider_number') <small class="text-danger">{{ $message }}</small> @enderror
</div>



    <div class="mb-3">
    <label for="client" class="form-label">Client</label>
    <select class="form-control" id="client" name="name" required>
        <option value="">Select a client</option>
        @foreach($clients as $client)
            <option value="{{ $client->User_Id }}" {{ old('name') == $client->User_Id ? 'selected' : '' }}>
                {{ $client->name }}
            </option>
        @endforeach
    </select>
        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
    </div>


    <div class="mb-3">
        <label for="requested_certificate" class="form-label">Requested Certificate</label>
        <select name="requested_certificate" class="form-control">
        <option value="">Select a certificate</option>
            <option value="Birth Certificate" {{ old('requested_certificate') == 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate</option>
            <option value="Marriage Certificate" {{ old('requested_certificate') == 'Marriage Certificate' ? 'selected' : '' }}>Marriage Certificate</option>
            <option value="Death Certificate" {{ old('requested_certificate') == 'Death Certificate' ? 'selected' : '' }}>Death Certificate</option>
        </select>   
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
        <label for="barangay" class="form-label">Barangay</label>
        <input type="text" class="form-control" id="barangay" name="barangay" value="{{ old('barangay') }}" required>
        @error('barangay') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

<!--changes in input format-->
    <div class="mb-3">
        <label for="estimated_delivery_day" class="form-label">Day of Delivery (3 day advance today)</label>
        <input type="text" class="form-control" id="estimated_delivery_day" name="estimated_delivery_day" value="{{ old('estimated_delivery_day') }}" placeholder="e.g 2024/12/17" required>
        @error('barangay') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>
<script>
   
    document.addEventListener('DOMContentLoaded', function () {
        // Get the rider select element and the rider_number input
        const riderSelect = document.getElementById('rider');
        const riderNumberInput = document.getElementById('rider_number');
        
        // Event listener for change in rider dropdown
        riderSelect.addEventListener('change', function () {
            // Find the selected option
            const selectedOption = riderSelect.options[riderSelect.selectedIndex];
            
            // Get the mobile number from the selected option
            const riderMobileNumber = selectedOption.getAttribute('data-mobile');
            
            // Populate the rider_number input field with the mobile number
            riderNumberInput.value = riderMobileNumber;
        });
    });
</script>
@endsection
