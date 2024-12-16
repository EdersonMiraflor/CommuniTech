@extends('layouts.layout')
@section('contents')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<!-- Main Container -->
<div style="display: flex; justify-content: space-between; align-items: flex-start; padding: 20px;">

    <!-- Left Side Container (Forms) -->
    <div style="background-color: #E8F7EC; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 600px; display: flex; flex-direction: column; gap: 20px;">

        <!-- Send Request Form -->
        <div style="background-color: #E8F7EC; padding: 20px; border: 2px solid #28a745; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <h1 style="font-family: Arial, sans-serif; font-size: 28px; color: #333;">Send Request</h1>
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
                <button type="submit" style="background-color: #04AA6D; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-family: Arial, sans-serif; font-size: 16px;">Submit</button>
            </form>
        </div>

        <!-- Scan Form -->
        <div style="background-color: #E8F7EC; padding: 20px; border: 2px solid #28a745; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 600px; text-align: center;">
            <h1 style="font-family: Arial, sans-serif; font-size: 28px; color: #333;">Scan Form</h1>
            <form action="{{ route('send.file.email') }}" method="POST" style="display: flex; flex-direction: column; gap: 15px;" enctype="multipart/form-data">
                @csrf
                <div style="display: flex; align-items: center;">
                    <label for="Email" style="width: 100px; text-align: right; margin-right: 10px; font-family: Arial, sans-serif; color: #555;">Email</label>
                    <input type="email" id="Email" name="Email" required style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
                <div style="display: flex; align-items: center;">
                    <label for="File" style="width: 100px; text-align: right; margin-right: 10px; font-family: Arial, sans-serif; color: #555;">Attach File</label>
                    <input type="file" id="File" name="File" required style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
                <button type="submit" style="background-color: #04AA6D; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-family: Arial, sans-serif; font-size: 16px;">Submit</button>
            </form>
        </div>

    </div>

    <!-- Right Side Container (Pending Users Request Table) -->
    <div style="background-color: #E8F7EC; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 800px; text-align: center; display: flex; flex-direction: column; gap: 20px;">

        <h1 style="font-family: Arial, sans-serif; font-size: 28px; color: #333;">Pending Users Request</h1>
        
        <div style="max-height: 400px; overflow-y: auto; border: 1px solid #04AA6D; border-radius: 5px; margin-top: 20px;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead style="position: sticky; top: 0; background-color: #04AA6D; z-index: 1;">
                    <tr>
                        <th style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif; color: #fff;">Name</th>
                        <th style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif; color: #fff;">Email</th>
                        <th style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif; color: #fff;">Certificate</th>
                        <th style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif; color: #fff;">Status</th>
                        <th style="padding: 10px; border: 1px solid #ccc; font-family: Arial, sans-serif; color: #fff;">Proof</th>
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
