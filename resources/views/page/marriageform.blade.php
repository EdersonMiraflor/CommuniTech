@extends('layouts.layout')

@section('contents')
<br><br>
<div class="birth-container"> 
 <h2 class="text-center birth-heading">
    <img src="{{ asset('/img/manito-logo.png') }}" alt="Manito Logo" class="birth-logo"> CERTIFICATE OF MARRIAGE
 </h2>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
<form action="/home/services/marriageform" method="POST">
    @csrf
    <div class="row">
        <!-- Child's Information -->
        <div class="col-md-12">
            <h4>I. BRIDE'S INFORMATION</h4>
        <label for="bride-name" class="birth-label">Full Name:</label>
        <input type="text" id="bride-name" name="bride_name" class="birth-form-control" placeholder="Enter bride's full name" required />

        <label for="bride-birthplace" class="birth-label">Place of Birth:</label>
        <input type="text" id="bride-birthplace" name="bride_birthplace" class="birth-form-control" placeholder="Enter bride's place of birth" required />

        <label for="bride-birthdate" class="birth-label">Date of Birth:</label>
        <input type="date" id="bride-birthdate" name="bride_birthdate" class="birth-form-control" required />

        <label for="bride-residence" class="birth-label">Residence:</label>
        <input type="text" id="bride-residence" name="bride_residence" class="birth-form-control" placeholder="Enter bride's residence" required />

        <!-- Section: Groom's Information -->
        <h2 class="birth-heading">Groom's Information</h2>
        <label for="groom-name" class="birth-label">Full Name:</label>
        <input type="text" id="groom-name" name="groom_name" class="birth-form-control" placeholder="Enter groom's full name" required />

        <label for="groom-birthplace" class="birth-label">Place of Birth:</label>
        <input type="text" id="groom-birthplace" name="groom_birthplace" class="birth-form-control" placeholder="Enter groom's place of birth" required />

        <label for="groom-birthdate" class="birth-label">Date of Birth:</label>
        <input type="date" id="groom-birthdate" name="groom_birthdate" class="birth-form-control" required />

        <label for="groom-residence" class="birth-label">Residence:</label>
        <input type="text" id="groom-residence" name="groom_residence" class="birth-form-control" placeholder="Enter groom's residence" required />

        <!-- Section: Marriage Details -->
        <h2 class="birth-heading">Marriage Details</h2>
        <label for="marriage-date" class="birth-label">Date of Marriage:</label>
        <input type="date" id="marriage-date" name="marriage_date" class="birth-form-control" required />

        <label for="marriage-place" class="birth-label">Place of Marriage:</label>
        <input type="text" id="marriage-place" name="marriage_place" class="birth-form-control" placeholder="Enter place of marriage" required />

        <label for="officiant-name" class="birth-label">Name of Officiant:</label>
        <input type="text" id="officiant-name" name="officiant_name" class="birth-form-control" placeholder="Enter officiant's name" required />
     
     <button type="submit" class="btn btn-danger mt-3">Back</button>
     <button type="submit" class="btn btn-success mt-3">Next</button> <!-- Added birth-submit class -->
    </div> 
    </div>
    </div> 
</form>
</div> 
<br><br>
@endsection
