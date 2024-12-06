@extends('layouts.layout')

@section('contents')
<br><br>
<div class="birth-container">
    <h2 class="text-center birth-heading">
        <img src="{{ asset('/img/manito-logo.png') }}" alt="Manito Logo" class="birth-logo"> CERTIFICATE OF LIVE BIRTH
    </h2>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  
    <form action="/home/services/form101" method="POST">
        @csrf

        <div class="row">
            <!-- Child's Information -->
            <div class="col-md-12">
                <h4>I. CHILD'S INFORMATION</h4>

                <div class="form-group">
                    <label for="child_name" class="birth-label">1. Full Name</label>
                    <input type="text" id="child_name" name="child_name" class="birth-form-control" placeholder="Enter child's full name" required>
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
                    <label for="birth_weight" class="birth-label">5. Birth Weight (kg)</label>
                    <input type="number" id="birth_weight" name="birth_weight" class="birth-form-control" placeholder="Enter birth weight" required>
                </div>

                <div class="form-group">
                    <label for="birth_length" class="birth-label">6. Birth Length (cm)</label>
                    <input type="number" id="birth_length" name="birth_length" class="birth-form-control" placeholder="Enter birth length" required>
                </div>

                <div class="form-group">
                    <label for="multiple_birth" class="birth-label">7. Type of Birth</label>
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
                    <input type="text" id="other_birth_type_specify" name="other_birth_type_specify" class="birth-form-control" placeholder="Specify other birth type">
                </div>

                <div class="form-group">
                    <label for="birth_order" class="birth-label">8. Birth Order (if Multiple Births)</label>
                    <input type="number" id="birth_order" name="birth_order" class="birth-form-control" placeholder="Enter birth order" required>
                </div>
            </div>

            <!-- Mother's Information -->
            <div class="col-md-12">
                <h4>II. MOTHER'S INFORMATION</h4>

                <div class="form-group">
                    <label for="mother_maiden_name" class="birth-label">9. Mother's Maiden Name</label>
                    <input type="text" id="mother_maiden_name" name="mother_maiden_name" class="birth-form-control" placeholder="Enter mother's maiden name" required>
                </div>

                <div class="form-group">
                    <label for="mother_birthdate" class="birth-label">10. Mother's Date of Birth</label>
                    <input type="date" id="mother_birthdate" name="mother_birthdate" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="mother_birthplace" class="birth-label">11. Mother's Place of Birth</label>
                    <input type="text" id="mother_birthplace" name="mother_birthplace" class="birth-form-control" placeholder="Enter mother's place of birth" required>
                </div>

                <div class="form-group">
                    <label for="mother_residence" class="birth-label">12. Mother's Residence</label>
                    <input type="text" id="mother_residence" name="mother_residence" class="birth-form-control" placeholder="Enter mother's residence" required>
                </div>

                <div class="form-group">
                    <label for="mother_occupation" class="birth-label">13. Mother's Occupation</label>
                    <input type="text" id="mother_occupation" name="mother_occupation" class="birth-form-control" placeholder="Enter mother's occupation" required>
                </div>
            </div>

            <!-- Father's Information -->
            <div class="col-md-12">
                <h4>III. FATHER'S INFORMATION</h4>

                <div class="form-group">
                    <label for="father_name" class="birth-label">14. Father's Full Name</label>
                    <input type="text" id="father_name" name="father_name" class="birth-form-control" placeholder="Enter father's full name" required>
                </div>

                <div class="form-group">
                    <label for="father_birthdate" class="birth-label">15. Father's Date of Birth</label>
                    <input type="date" id="father_birthdate" name="father_birthdate" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="father_birthplace" class="birth-label">16. Father's Place of Birth</label>
                    <input type="text" id="father_birthplace" name="father_birthplace" class="birth-form-control" placeholder="Enter father's place of birth" required>
                </div>

                <div class="form-group">
                    <label for="father_residence" class="birth-label">17. Father's Residence</label>
                    <input type="text" id="father_residence" name="father_residence" class="birth-form-control" placeholder="Enter father's residence" required>
                </div>

                <div class="form-group">
                    <label for="father_occupation" class="birth-label">18. Father's Occupation</label>
                    <input type="text" id="father_occupation" name="father_occupation" class="birth-form-control" placeholder="Enter father's occupation" required>
                </div>
            </div>

            <!-- Attendant Information -->
            <div class="col-md-12">
                <h4>IV. ATTENDANT INFORMATION</h4>

                <div class="form-group">
                    <label for="attendant_name" class="birth-label">19. Name of Attendant</label>
                    <input type="text" id="attendant_name" name="attendant_name" class="birth-form-control" placeholder="Enter attendant's name" required>
                </div>

                <div class="form-group">
                    <label for="attendant_role" class="birth-label">20. Role of Attendant</label>
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
                    <input type="text" id="other_attendant_role_specify" name="other_attendant_role_specify" class="birth-form-control" placeholder="Specify other role">
                </div>
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
