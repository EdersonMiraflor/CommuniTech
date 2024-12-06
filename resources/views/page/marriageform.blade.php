@extends('layouts.layout')

@section('contents')
<br><br>
<div class="birth-container"> 
    <h2 class="text-center birth-heading">
        <img src="{{ asset('/img/manito-logo.png') }}" alt="Manito Logo" class="birth-logo"> CERTIFICATE OF MARRIAGE
    </h2>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <form action="/home/services/form97" method="POST">
        @csrf
        <div class="row">
            <!-- Bride's Information -->
            <div class="col-md-12">
                <h4>I. BRIDE'S INFORMATION</h4>
                
                <div class="form-group">
                    <label for="bride_name" class="birth-label">1. Full Name</label>
                    <input type="text" id="bride_name" name="bride_name" class="birth-form-control" placeholder="Enter bride's full name" required />
                </div>

                <div class="form-group">
                    <label for="bride_birthplace" class="birth-label">2. Place of Birth</label>
                    <input type="text" id="bride_birthplace" name="bride_birthplace" class="birth-form-control" placeholder="Enter bride's place of birth" required />
                </div>

                <div class="form-group">
                    <label for="bride_birthdate" class="birth-label">3. Date of Birth</label>
                    <input type="date" id="bride_birthdate" name="bride_birthdate" class="birth-form-control" required />
                </div>

                <div class="form-group">
                    <label for="bride_residence" class="birth-label">4. Residence</label>
                    <input type="text" id="bride_residence" name="bride_residence" class="birth-form-control" placeholder="Enter bride's residence" required />
                </div>

                <div class="form-group">
                    <label for="bride_citizenship" class="birth-label">5. Citizenship</label>
                    <input type="text" id="bride_citizenship" name="bride_citizenship" class="birth-form-control" placeholder="Enter bride's citizenship" required />
                </div>

                <div class="form-group">
                    <label for="bride_religion" class="birth-label">6. Religion</label>
                    <input type="text" id="bride_religion" name="bride_religion" class="birth-form-control" placeholder="Enter bride's religion" />
                </div>
            </div>

            <!-- Groom's Information -->
            <div class="col-md-12">
                <h4>II. GROOM'S INFORMATION</h4>

                <div class="form-group">
                    <label for="groom_name" class="birth-label">7. Full Name</label>
                    <input type="text" id="groom_name" name="groom_name" class="birth-form-control" placeholder="Enter groom's full name" required />
                </div>

                <div class="form-group">
                    <label for="groom_birthplace" class="birth-label">8. Place of Birth</label>
                    <input type="text" id="groom_birthplace" name="groom_birthplace" class="birth-form-control" placeholder="Enter groom's place of birth" required />
                </div>

                <div class="form-group">
                    <label for="groom_birthdate" class="birth-label">9. Date of Birth</label>
                    <input type="date" id="groom_birthdate" name="groom_birthdate" class="birth-form-control" required />
                </div>

                <div class="form-group">
                    <label for="groom_residence" class="birth-label">10. Residence</label>
                    <input type="text" id="groom_residence" name="groom_residence" class="birth-form-control" placeholder="Enter groom's residence" required />
                </div>

                <div class="form-group">
                    <label for="groom_citizenship" class="birth-label">11. Citizenship</label>
                    <input type="text" id="groom_citizenship" name="groom_citizenship" class="birth-form-control" placeholder="Enter groom's citizenship" required />
                </div>

                <div class="form-group">
                    <label for="groom_religion" class="birth-label">12. Religion</label>
                    <input type="text" id="groom_religion" name="groom_religion" class="birth-form-control" placeholder="Enter groom's religion" />
                </div>
            </div>

            <!-- Marriage Details -->
            <div class="col-md-12">
                <h4>III. MARRIAGE DETAILS</h4>

                <div class="form-group">
                    <label for="marriage_date" class="birth-label">13. Date of Marriage</label>
                    <input type="date" id="marriage_date" name="marriage_date" class="birth-form-control" required />
                </div>

                <div class="form-group">
                    <label for="marriage_place" class="birth-label">14. Place of Marriage</label>
                    <input type="text" id="marriage_place" name="marriage_place" class="birth-form-control" placeholder="Enter place of marriage" required />
                </div>

                <div class="form-group">
                    <label for="officiant_name" class="birth-label">15. Name of Officiant</label>
                    <input type="text" id="officiant_name" name="officiant_name" class="birth-form-control" placeholder="Enter officiant's name" required />
                </div>

                <div class="form-group">
                    <label for="officiant_position" class="birth-label">16. Position of Officiant</label>
                    <input type="text" id="officiant_position" name="officiant_position" class="birth-form-control" placeholder="Enter officiant's position" required />
                </div>

                <div class="form-group">
                    <label for="witnesses" class="birth-label">17. Witnesses</label>
                    <textarea id="witnesses" name="witnesses" class="birth-form-control" placeholder="Enter names of witnesses" required></textarea>
                </div>
            </div>

            <!-- Submit Section -->
            <div class="col-md-12 mt-3">
                <button type="button" class="btn btn-danger" onclick="window.history.back()">Back</button>
                <button type="submit" class="btn btn-success">Next</button>
            </div>
        </div>
    </form>
</div>
<br><br>
@endsection
