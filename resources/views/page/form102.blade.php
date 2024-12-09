@extends('layouts.layout')

@section('contents')
<br><br>
<div class="birth-container">
    <h2 class="text-center birth-heading">
        <img src="{{ asset('/img/manito-logo.png') }}" alt="Manito Logo" class="birth-logo"> CERTIFICATE OF LIVE BIRTH
    </h2>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  
    <form action="/home/services/form102" method="POST">
        @csrf

        <div class="row">
            <!-- Child's Information -->
            <div class="col-md-12">
                <h4>I. CHILD'S INFORMATION</h4>

                <div class="form-group">
                    <label for="child_name" class="birth-label">1. Child's Name</label>
                    <input type="text" id="child_name" name="child_first" class="birth-form-control" placeholder="Enter child's first name" required>
                    <input type="text" id="child_name" name="child_middle" class="birth-form-control" placeholder="Enter child's middle name" required>
                    <input type="text" id="child_name" name="child_last" class="birth-form-control" placeholder="Enter child's last name" required>
                </div>

                <div class="form-group">
                    <label for="child_sex" class="birth-label">2. Sex</label>
                    <select id="child_sex" name="child_sex" class="birth-form-control" required>
                        <option value="">Select Sex</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="child_birthdate" class="birth-label">3. Date of Birth</label>
                    <input type="date" id="child_birthdate" name="child_birthdate" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="child_birthplace" class="birth-label">4. Place of Birth</label>
                    <input type="text" id="child_birthplace" name="child_birthplace" class="birth-form-control" placeholder="Enter place of birth" required>
                </div>

                <div class="form-group">
                    <label for="multiple_birth" class="birth-label">5a. Type of Birth</label>
                    <select id="multiple_birth" name="multiple_birth" class="birth-form-control" required>
                        <option value="">Select Birth Type</option>
                        <option value="Single">Single</option>
                        <option value="Twin">Twin</option>
                        <option value="Triplets">Triplets</option>
                        <option value="Other">Other (Specify)</option>
                    </select>
                </div>

                <div class="form-group" id="other_birth_type" style="display:none;">
                    <label for="other_birth_type_specify" class="birth-label">Please Specify</label>
                    <input type="text" id="other_birth_type_specify" name="birth_type" class="birth-form-control" placeholder="Specify other birth type">
                </div>

                <div class="form-group">
                    <label for="birth_order" class="birth-label">5b. Birth Order (if Multiple Births)</label>
                    <input type="number" id="birth_order" name="birth_order" class="birth-form-control" placeholder="Enter birth order" required>
                </div>
            </div>

                <div class="form-group">
                    <label for="birth_weight" class="birth-label">6. Birth Weight (kg)</label>
                    <input type="number" id="birth_weight" name="birth_weight" class="birth-form-control" placeholder="Enter birth weight" required>
                </div>

            <!-- Mother's Information -->
            <div class="col-md-12">
                <h4>II. MOTHER'S INFORMATION</h4>

                <div class="form-group">
                    <label for="mother_maiden_name" class="birth-label">7. Mother's Maiden Name</label>
                    <input type="text" id="mother_maiden_name" name="mother_first_name" class="birth-form-control" placeholder="Enter mother's first name" required>
                    <input type="text" id="mother_maiden_name" name="mother_middle_name" class="birth-form-control" placeholder="Enter mother's middle name" required>
                    <input type="text" id="mother_maiden_name" name="mother_last_name" class="birth-form-control" placeholder="Enter mother's last name" required>
                </div>

                <div class="form-group">
                    <label for="citizenship" class="birth-label">8. Citizenship</label>
                    <input type="text" id="citizenship" name="citizenship" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="religion" class="birth-label">9. Religion/Religious Sect</label>
                    <input type="text" id="religion" name="religion" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="total_number" class="birth-label">10a. Total number of children born alive</label>
                    <input type="text" id="total_number" name="total_number" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="children" class="birth-label">10b. Number of children still living including this birth</label>
                    <input type="text" id="children" name="children" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="dead_child" class="birth-label">10c. No. of children born alive but are now dead </label>
                    <input type="text" id="dead_child" name="dead_child" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="occupation" class="birth-label">11. Occupation</label>
                    <input type="text" id="occupation" name="occupation" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="mother_age" class="birth-label">12. Age</label>
                    <input type="text" id="mother_age" name="mother_age" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="mother_place" class="birth-label">13. Residence</label>
                    <input type="text" id="mother_place" name="mother_street" class="birth-form-control" placeholder="House No./Street/Barangay" required>
                    <input type="text" id="mother_place" name="mother_city" class="birth-form-control" placeholder="City/Municipality" required>
                    <input type="text" id="mother_place" name="mother_province" class="birth-form-control" placeholder="Province" required>
                    <input type="text" id="mother_place" name="mother_country" class="birth-form-control" placeholder="Country" required>
                </div>
            </div>

            <!-- Father's Information -->
            <div class="col-md-12">
                <h4>III. FATHER'S INFORMATION</h4>

                <div class="form-group">
                    <label for="father's_name" class="birth-label">14. Father's Name</label>
                    <input type="text" id="father_maiden_name" name="father_first_name" class="birth-form-control" placeholder="Enter father's first name" required>
                    <input type="text" id="father_middle_name" name="father_middle_name" class="birth-form-control" placeholder="Enter father's middle name" required>
                    <input type="text" id="father_last_name" name="father_last_name" class="birth-form-control" placeholder="Enter father's last name" required>
                </div>

                <div class="form-group">
                    <label for="citizenship" class="birth-label">15. Citizenship</label>
                    <input type="text" id="citizenship" name="citizenship2" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="religion" class="birth-label">16. Religion/Religious Sect</label>
                    <input type="text" id="religion" name="religion2" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="occupation" class="birth-label">17. Occupation</label>
                    <input type="text" id="occupation" name="occupation2" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="mother_age" class="birth-label">18. Age</label>
                    <input type="text" id="mother_age" name="father_age" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="mother_place" class="birth-label">19. Residence</label>
                    <input type="text" id="mother_place" name="father_street" class="birth-form-control" placeholder="House No./Street/Barangay" required>
                    <input type="text" id="mother_place" name="father_city" class="birth-form-control" placeholder="City/Municipality" required>
                    <input type="text" id="mother_place" name="father_province" class="birth-form-control" placeholder="Province" required>
                    <input type="text" id="mother_place" name="father_country" class="birth-form-control" placeholder="Country" required>
                </div>
            </div>

            <!-- Marriage of Parents -->
            <div class="col-md-12">
                <h4>IV. MARRIAGE OF PARENTS</h4>

                <div class="form-group">
                    <label for="marriage_date" class="birth-label">20a. Date of Marriage</label>
                    <input type="date" id="marriage_date" name="marriage_date" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="marriage_place" class="birth-label">20b. Place</label>
                    <input type="text" id="mother_place" name="marriage_street" class="birth-form-control" placeholder="House No./Street/Barangay" required>
                    <input type="text" id="mother_place" name="marriage_municipality" class="birth-form-control" placeholder="City/Municipality" required>
                    <input type="text" id="mother_place" name="marriage_province" class="birth-form-control" placeholder="Province" required>
                    <input type="text" id="mother_place" name="marriage_country" class="birth-form-control" placeholder="Country" required>
                </div>
            </div>

            <!-- Attendant Information -->
            <div class="col-md-12">
                <h4>IV. ATTENDANT INFORMATION</h4>

                <div class="form-group">
                    <label for="attendant_role" class="birth-label">21a. Attendant</label>
                    <select id="attendant_role" name="attendant_role" class="birth-form-control" required>
                        <option value="">Select Role</option>
                        <option value="Physician">Physician</option>
                        <option value="Nurse">Nurse</option>
                        <option value="Midwife">Midwife</option>
                        <option value="Hilot">Hilot</option>
                        <option value="Other">Other (Specify)</option>
                    </select>
                </div>

                <div class="form-group" id="other_attendant_role" style="display:none;">
                    <label for="other_attendant_role_specify" class="birth-label">Please Specify</label>
                    <input type="text" id="other_attendant_role_specify" name="other_attendant_role" class="birth-form-control" placeholder="Specify other role">
                </div>
            </div>
            <h5 class="text-center">SUBSCRIBED AND SWORN</h5>
    <p>
        Subscribed and sworn to before me this 
        <input type="number" name="day_sworn" class="birth-form-control" style="width: 50px;" placeholder="Day" required> day of 
        <input type="text" name="month_sworn" class="birth-form-control" style="width: 100px;" placeholder="Month" required>, 
        <input type="number" name="year_sworn" class="birth-form-control" style="width: 80px;" placeholder="Year" required>, at 
        <input type="text" name="place_sworn" class="birth-form-control" style="width: 300px;" placeholder="Place Sworn" required>, Philippines, affiant who exhibited to me his/her Community Tax Cert. issued on 
        <input type="date" name="tax_cert_date" class="birth-form-control" style="width: 180px;" required> at 
        <input type="text" name="tax_cert_place" class="birth-form-control" style="width: 300px;" placeholder="Place of Issuance" required>.
    </p>

            <div class="container">
        <form method="post" action="process_form.php">
            <p> I/We, <div class="field"> <input type="text" name="father_name" placeholder="Mother's Name" required> </div> and
                    <div class="field"> <input type="text" name="mother_name" placeholder="Father's Name" required> </div> , of legal age, am/are the natural mother and/or father of 
                    <input type="text" name="name_child" placeholder="Child's Name" required style="width: 60%;">, who was born on 
                <input type="date" name="birth_date" required> at 
                <input type="text" name="birth_place" placeholder="Place of Birth" required style="width: 50%;">
            </p>
            <p>
                I am / We are executing this affidavit to attest to the truthfulness of the foregoing
                statements and for purposes of acknowledging my/our child.
            </p>

                <div>
                    <label for="signature" class="birth-label">Father's Name</label>
                    <input type="text" id="signature" name="signature1" class="birth-form-control" required>
                </div>
                <div>
                    <label for="signature" class="birth-label">Mother's Name</label>
                    <input type="text" id="signature" name="signature2" class="birth-form-control" required>
                </div>
        </form>
    </div>
            <!-- Submit Section -->
            <div class="col-md-12 mt-3">
                <button type="button" class="btn btn-danger" onclick="window.history.back()">Back</button>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>
<br><br>

<script>
    // Show input field for "Other" birth type when selected
    document.getElementById('multiple_birth').addEventListener('change', function () {
        var otherType = document.getElementById('other_birth_type');
        if (this.value === 'Other') {
            otherType.style.display = 'block';
        } else {
            otherType.style.display = 'none';
        }
    });

    // Show input field for "Other" attendant role when selected
    document.getElementById('attendant_role').addEventListener('change', function () {
        var otherAttendant = document.getElementById('other_attendant_role');
        if (this.value === 'Other') {
            otherAttendant.style.display = 'block';
        } else {
            otherAttendant.style.display = 'none';
        }
    });
</script>
@endsection
