@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<div class="birthcontainer">
    <!-- Header -->
    <div class="birthheader">
    <img src="{{ asset('img/manito-logo.png') }}" alt="Logo" />
        <h2>PSA Live Birth Registration Form</h2>
    </div>

    <!-- Form Fields -->
    <form>
        <!-- Child's Information -->
        <div class="birthform-group">
            <label for="child-name">* Child's Name:</label>
            <input type="text" class="birthform-control" id="child-name" placeholder="Last Name, First Name, Middle Name">
        </div>

        <div class="birthform-group">
        <div class="birthform-group">
    <label for="birthdate">* Birth Date:</label>
    <select id="birth-month" class="birthform-control">
        <option value="">Month</option>
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select>

    <select id="birth-day" class="birthform-control">
        <option value="">Day</option>
        <!-- Days 1-31 will be dynamically generated -->
    </select>

    <select id="birth-year" class="birthform-control">
        <option value="">Year</option>
        <!-- Years will be dynamically generated -->
    </select>
</div>

            <label>Sex:</label>
            <select class="birthform-control">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <div class="birthform-group">
            <label>Place of Birth:</label>
            <input type="text" class="birthform-control" placeholder="Barangay">
            <input type="text" class="birthform-control" placeholder="City/Municipality">
            <input type="text" class="birthform-control" placeholder="Province">
        </div>

        <div class="birthform-group">
            <label>Type of Birth:</label>
            <select class="birthform-control">
                <option>Single</option>
                <option>Twin</option>
                <option>Triplet</option>
            </select>

            <label>Order of Multiple Birth:</label>
            <input type="text" class="birthform-control" placeholder="First, Second, etc">

            <label>Weight at Birth:</label>
            <input type="text" class="birthform-control" placeholder="Grams">
        </div>

        <!-- Mother's Information -->
        <div class="birthform-group">
            <label>Mother's Maiden Name:</label>
            <input type="text" class="birthform-control" placeholder="Last Name">
            <input type="text" class="birthform-control" placeholder="First Name">
            <input type="text" class="birthform-control" placeholder="Middle Name">
        </div>

        <div class="birthform-group">
            <label>Mother's Citizenship:</label>
            <input type="text" class="birthform-control" placeholder="Citizenship">

            <label>Age at Child's Birth:</label>
            <input type="number" class="birthform-control" placeholder="Age">

            <label>Occupation:</label>
            <input type="text" class="birthform-control" placeholder="Occupation">

            <label>Religion:</label>
            <input type="text" class="birthform-control" placeholder="Religion">
        </div>

        <!-- Father's Information -->
        <div class="birthform-group">
            <label>Father's Name:</label>
            <input type="text" class="birthform-control" placeholder="Last Name">
            <input type="text" class="birthform-control" placeholder="First Name">
            <input type="text" class="birthform-control" placeholder="Middle Name">
        </div>

        <div class="birthform-group">
            <label>Father's Citizenship:</label>
            <input type="text" class="birthform-control" placeholder="Citizenship">

            <label>Age at Child's Birth:</label>
            <input type="number" class="birthform-control" placeholder="Age">

            <label>Occupation:</label>
            <input type="text" class="birthform-control" placeholder="Occupation">

            <label>Religion:</label>
            <input type="text" class="birthform-control" placeholder="Religion">
        </div>

        <!-- Birth Attendant and Informant -->
        <div class="birthform-group">
            <label>Name of Birth Attendant:</label>
            <input type="text" class="birthform-control" placeholder="Full Name">

            <label>Informant's Name:</label>
            <input type="text" class="birthform-control" placeholder="Full Name">

            <label>Informant's Relationship to Child:</label>
            <input type="text" class="birthform-control" placeholder="Relationship">
        </div>

        <!-- Date and Place of Registration -->
        <div class="birthform-group">
            <label>Date of Registration:</label>
            <input type="date" class="birthform-control">

            <label>Place of Registration:</label>
            <input type="text" class="birthform-control" placeholder="City/Municipality">
        </div>

        <!-- Submit Button -->
        <div class="birthform-group">
            <button type="submit" class="birthbtn-primary">Submit</button>
        </div>
    </form>
</div>
<script>
        document.addEventListener('DOMContentLoaded', function() {
    const monthSelect = document.getElementById('birth-month');
    const daySelect = document.getElementById('birth-day');
    const yearSelect = document.getElementById('birth-year');

    // Populate years (from 1900 to current year)
    const currentYear = new Date().getFullYear();
    for (let i = currentYear; i >= 1900; i--) {
        let option = document.createElement('option');
        option.value = i;
        option.text = i;
        yearSelect.appendChild(option);
    }

    // Populate days based on month
    function populateDays(month, year) {
        daySelect.innerHTML = ''; // Clear existing options
        const daysInMonth = new Date(year, month, 0).getDate();
        for (let i = 1; i <= daysInMonth; i++) {
            let option = document.createElement('option');
            option.value = i;
            option.text = i;
            daySelect.appendChild(option);
        }
    }

    // Event listener for month change
    monthSelect.addEventListener('change', function() {
        const selectedYear = yearSelect.value || currentYear;
        const selectedMonth = parseInt(this.value, 10); // Ensure it's a number
        if (selectedMonth) {
            populateDays(selectedMonth, selectedYear);
        }
    });

    // Event listener for year change (update days for leap years)
    yearSelect.addEventListener('change', function() {
        const selectedMonth = monthSelect.value || 1;
        populateDays(selectedMonth, this.value);
    });
});
    </script>
@endsection
