@extends('layouts.layout')
@section('contents')

<style>
    .container {
        width: 100%; 
        max-width: 600px; 
        padding: 20px; 
        margin: 0 auto; 
        box-sizing: border-box; 
    }

    .container input, .container select {
        font-size: 14px; 
        padding: 8px; 
        width: 100%; 
        box-sizing: border-box; 
    }

    .container label {
        font-size: 16px; 
        margin-bottom: 5px; 
    }

    .container h4 {
        font-size: 24px; 
        text-align: center; 
        margin-bottom: 20px;
    }

    /* Style for the image preview */
    .image-preview {
        margin-top: 20px;
        text-align: center;
    }

    .image-preview img {
        max-width: 200px;
        max-height: 200px;
        border: 2px solid #ccc;
        padding: 5px;
    }
</style>
<form class="container" method="POST" action="{{ route('payments.store') }}" enctype="multipart/form-data" style="border: 3px solid black; display: flex; flex-direction: column; gap: 20px;">
    @csrf <!-- Include CSRF token for Laravel security -->
    <h4>Payment Form</h4>

    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="" required>

    <label for="requested_certificate">Requested Certificate</label>
    <input type="text" id="requested_certificate" name="requested_certificate" value="" required>

    <label for="quantity">Quantity</label>
    <input type="number" id="quantity" name="quantity" value="" required>

    <label for="address">Address</label>
    <input type="text" id="address" name="address" value="" required>

    <label for="barangay">Barangay</label>
    <select id="barangay" name="barangay" required>
        <option value="">Select</option>
        <option value="Cabacongan">Cabacongan</option>
        <option value="Cawayan">Cawayan</option>
        <option value="Malobago">Malobago</option>
        <option value="Tinapian">Tinapian</option>
        <option value="Manumbalay">Manumbalay</option>
        <option value="Buyo">Buyo</option>
        <option value="IT-Ba">IT-Ba</option>
        <option value="Cawit">Cawit</option>
        <option value="Balasbas">Balasbas</option>
        <option value="Bamban">Bamban</option>
        <option value="Pawa">Pawa</option>
        <option value="Hulugan">Hulugan</option>
        <option value="Balabagon">Balabagon</option>
        <option value="Cabit">Cabit</option>
        <option value="Nagotgot">Nagotgot</option>
        <option value="Inang Maharang">Inang Maharang</option>
    </select>

    <label for="proof_of_payment">Insert Proof of Payment</label>
    <input type="file" id="proof_of_payment" name="proof_of_payment" accept="image/*" onchange="previewImage(event)">

    <!-- Image Preview -->
    <div class="image-preview" id="imagePreview"></div>

    <input type="submit" value="Submit" style="font-size: 18px; padding: 12px;">
</form>

<script>
    // Function to preview the image
    function previewImage(event) {
        const imagePreview = document.getElementById('imagePreview');
        const file = event.target.files[0];
        
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                // Create an image element and display it
                imagePreview.innerHTML = `<img src="${e.target.result}" alt="Proof of Payment">`;
            };
            reader.readAsDataURL(file);
        }
    }
</script>

@endsection
