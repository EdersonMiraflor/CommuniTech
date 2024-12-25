@extends('layouts.layout')
@section('contents')

<head>
    <style>
        @media (max-width: 1200px) {
    /* Adjust right-side container width */
    div[style*="max-width: 800px;"] {
        max-width: 600px;
    }
}

@media (max-width: 992px) {
    /* Stack containers vertically */
    div[style*="display: flex; justify-content: space-between; align-items: flex-start;"] {
        flex-direction: column;
        align-items: center;
    }

    /* Adjust widths for inner containers */
    div[style*="max-width: 600px;"] {
        width: 90%;
        max-width: none;
    }

    div[style*="max-width: 800px;"] {
        width: 90%;
        max-width: none;
    }
}

@media (max-width: 768px) {
    /* Adjust padding and spacing for smaller screens */
    div[style*="padding: 20px;"] {
        padding: 15px;
    }

    form div[style*="align-items: center;"] {
        flex-direction: column;
        align-items: flex-start;
    }

    form div[style*="align-items: center;"] label {
        margin-bottom: 5px;
        text-align: left;
        width: 100%;
    }

    form div[style*="align-items: center;"] input {
        width: 100%;
    }
}

@media (max-width: 576px) {
    /* Further adjustments for mobile phones */
    h1 {
        font-size: 24px;
    }

    button {
        padding: 8px 16px;
        font-size: 14px;
    }

    table th, table td {
        padding: 8px;
        font-size: 14px;
    }

    img[style*="max-width: 200px;"] {
        max-width: 150px;
        max-height: 150px;
    }
}

@media (max-width: 400px) {
    /* Adjust modal image size for very small screens */
    #modalImage {
        max-width: 80%;
        max-height: 80%;
    }

    span[onclick="closeModal()"] {
        font-size: 24px;
        top: 10px;
        right: 20px;
    }
}

    </style>
</head>

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

@if(session('message_success'))
<!-- Flash Message -->
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
    <p>{{ session('message_success') }}</p>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const flashMessage = document.getElementById('flashMessage');
        
        if (flashMessage) {
            // Set timeout to remove flash message after 20 seconds
            setTimeout(() => {
                flashMessage.style.transition = "opacity 1s ease";
                flashMessage.style.opacity = "0";
                setTimeout(() => flashMessage.remove(), 1000); // Remove the element after fading out
            }, 4000); 
        }
    });
</script>
@endif

@if(session('success_scan'))
<!-- Flash Message -->
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
    <p>{{ session('success_scan') }}</p>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const flashMessage = document.getElementById('flashMessage');
        
        if (flashMessage) {
            // Set timeout to remove flash message after 20 seconds
            setTimeout(() => {
                flashMessage.style.transition = "opacity 1s ease";
                flashMessage.style.opacity = "0";
                setTimeout(() => flashMessage.remove(), 1000); // Remove the element after fading out
            }, 4000); 
        }
    });
</script>
@endif

<!-- Main Container -->
<div style="display: flex; justify-content: space-between; align-items: flex-start; padding: 20px;">

    <!-- Left Side Container (Forms) -->
    <div style="background-color: #E8F7EC; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 600px; display: flex; flex-direction: column; gap: 20px;">

        <!-- Send Request Form -->
        <div style="background-color: #E8F7EC; padding: 20px; border: 2px solid #28a745; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); margin-bottom: 10px;">
            <h1 style="font-family: Arial, sans-serif; font-size: 28px; color: #333;">Verify Request</h1>
            <form action="/otpform" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
                @csrf
                <div style="display: flex; align-items: center;">
                    <label for="Name" style="width: 100px; text-align: right; margin-right: 10px; font-family: Arial, sans-serif; color: #555;">Username</label>
                    <input type="text" id="Name" name="Name" required style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
                <div style="display: flex; align-items: center;">
                    <label for="Email" style="width: 100px; text-align: right; margin-right: 10px; font-family: Arial, sans-serif; color: #555;">Email</label>
                    <input type="email" id="Email" name="Email" required style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
                <button type="submit" style="background-color: #28a745; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-family: Arial, sans-serif; font-size: 16px;">Submit</button>
            </form>
        </div>

        <!-- Scan Form -->
        <div style="background-color: #E8F7EC; padding: 20px; border: 2px solid #28a745; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 600px; text-align: center;">
            <h1 style="font-family: Arial, sans-serif; font-size: 28px; color: #333;margin-bottom: 10px;">Scan Documents</h1>
            <form action="/scaninsert" method="POST" style="display: flex; flex-direction: column; gap: 15px;" enctype="multipart/form-data">
                @csrf
                <div style="display: flex; align-items: center;">
                    <label for="Email" style="width: 100px; text-align: right; margin-right: 10px; font-family: Arial, sans-serif; color: #555;">Email</label>
                    <input type="email" id="Email" name="Email" required style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
                <div style="display: flex; align-items: center;">
                    <label for="File" style="width: 100px; text-align: right; margin-right: 10px; font-family: Arial, sans-serif; color: #555;">Attach File</label>
                    <input type="file" id="File" name="File" required style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
                <button type="submit" style="background-color: #28a745; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-family: Arial, sans-serif; font-size: 16px;">Submit</button>
            </form>
        </div>

    @if (session('success_scan'))
        <div style="background-color: #d4edda; padding: 10px; border: 1px solid #c3e6cb; color: #155724; border-radius: 5px; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    </div>
    <!-- Right Side Container (Pending Users Request Table) -->
    <div style="background-color: #f2f2f2; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 800px; text-align: center; display: flex; flex-direction: column; gap: 20px;">

        <h1 style="font-family: Arial, sans-serif; font-size: 28px; color: #333; margin-bottom: 10px;">Pending Users Request</h1>
        
        <div style="max-height: 400px; overflow-y: auto; border: 1px solid #ccc; border-radius: 5px; margin-top: 20px;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead style="position: sticky; top: 0; background-color: #d4edda; z-index: 1;">
                    <tr>
                        <th style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif; color: #555;">Name</th>
                        <th style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif; color: #555;">Email</th>
                        <th style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif; color: #555;">Certificate</th>
                        <th style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif; color: #555;">Status</th>
                        <th style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif; color: #555;">Proof</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($payments as $payment)
                        <tr>
                            <td style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif;">{{ $payment->name }}</td>
                            <td style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif;">{{ $payment->user->email }}</td>
                            <td style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif;">{{ $payment->requested_certificate }}</td>
                            <td style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif;">{{ ucfirst($payment->status) }}</td>
                            <td style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif;">
                                @if ($payment->proof)
                                    <!-- Image Thumbnail with Click Event to Open Modal -->
                                    <img src="{{ asset('storage/' . $payment->proof) }}" alt="Proof Image" class="img-fluid" style="max-width: 200px; max-height: 200px; cursor: pointer;" onclick="showImage('{{ asset('storage/' . $payment->proof) }}')">
                                @else
                                    <span>No Proof Uploaded</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif; text-align: center;">No requests found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Modal for Enlarged Image -->
<div id="imageModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.8); justify-content: center; align-items: center; z-index: 1000;">
    <img id="modalImage" src="" alt="Enlarged Proof Image" style="max-width: 90%; max-height: 90%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);">
    <span onclick="closeModal()" style="position: absolute; top: 20px; right: 40px; color: white; font-size: 30px; cursor: pointer;">&times;</span>
</div>

<script>
    function showImage(imageUrl) {
        document.getElementById('modalImage').src = imageUrl;
        document.getElementById('imageModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('imageModal').style.display = 'none';
    }
</script>

@endsection
