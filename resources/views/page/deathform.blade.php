@extends('layouts.layout')

@section('contents')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<!--ERROR HANDLING CSS-->
<head>
    <style>
        /* Highlight invalid input fields */
birth-container input:invalid {
    border-color: red;
}

/* Change the style for the fields when they are correctly filled */
birth-container input:valid {
    border-color: green;
    box-shadow: 0 0 5px rgba(0, 255, 0, 0.5);
}

/* Restrict the width of the input fields in the affidavit section */
birth-container input[name="father_name"], input[name="mother_name"], input[name="name_child"], input[name="birth_date"], input[name="birth_place"] {
    width: 80%;
}

/* Optional: add some padding and margin for form elements */
birth-container input[type="text"], input[type="date"], select {
    padding: 8px;
    margin: 5px 0;
    border-radius: 4px;
    width: 100%;
}

</style>



<br><br>
<div class="birth-container" style="margin-bottom: 50px"> 
    <h2 class="text-center birth-heading">
        <img src="{{ asset('/img/manito-logo.png') }}" alt="Manito Logo" class="birth-logo"> CERTIFICATE OF DEATH
    </h2>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <form id="executedeathstore" action="/home/services/deathform" method="POST">
        @csrf
        <div class="row">
            <!-- Personal Information -->
            <div class="col-md-12">
            <div class="form-group">
                    <label for="user_name" class="birth-label">User Name</label>
                    <input type="text" id="user_name" name="user_name" class="birth-form-control" value="{{ auth()->user()->name }}" readonly>
                </div>
                <h4>I. PERSONAL INFORMATION</h4>
                <div class="form-group">
                    <label for="full_name" class="birth-label">1. Full Name</label>
                    <input type="text" id="full_name" name="full_name" class="birth-form-control" placeholder="Enter full name (First, Middle, Last)" required>
                </div>
                <div class="form-group">
                    <label for="sex" class="birth-label">2. Sex</label>
                    <select id="sex" name="sex" class="birth-form-control" required>
                        <option value="">Select Sex</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date_of_death" class="birth-label">3. Date of Death</label>
                    <input type="date" id="date_of_death" name="date_of_death" class="birth-form-control" required>
                </div>
                <div class="form-group">
                    <label for="date_of_birth" class="birth-label">4. Date of Birth</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" class="birth-form-control" required>
                </div>
                <!-- Age at the Time of Death -->
                <h5>Age at the Time of Death</h5>
                <div class="form-group">
                    <label for="completed_years" class="birth-label">5a. Completed Years (if 1 year or above)</label>
                    <input type="number" id="completed_years" name="completed_years" class="birth-form-control">
                </div>
                <div class="form-group">
                    <label for="months_days" class="birth-label">5b. Months/Days (if under 1 year)</label>
                    <input type="text" id="months_days" name="months_days" class="birth-form-control">
                </div>
                <div class="form-group">
                    <label for="hours_minutes_seconds" class="birth-label">5c. Hours/Minutes/Seconds (if under 24 hours)</label>
                    <input type="text" id="hours_minutes_seconds" name="hours_minutes_seconds" class="birth-form-control">
                </div>
            </div>

            <!-- Additional Details -->
            <div class="col-md-12">
                <h4>II. ADDITIONAL DETAILS</h4>
                <div class="form-group">
                    <label for="place_of_death" class="birth-label">6. Place of Death</label>
                    <input type="text" id="place_of_death" name="place_of_death" class="birth-form-control" placeholder="Enter place of death" required>
                </div>
                <div class="form-group">
                    <label for="civil_status" class="birth-label">7. Civil Status</label>
                    <select id="civil_status" name="civil_status" class="birth-form-control" required>
                        <option value="">Select Civil Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widow/Widower">Widow/Widower</option>
                        <option value="Annulled">Annulled</option>
                        <option value="Divorced">Divorced</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="religion" class="birth-label">8. Religion/Religious Sect</label>
                    <input type="text" id="religion" name="religion" class="birth-form-control" placeholder="Enter religion" required>
                </div>
                <div class="form-group">
                    <label for="citizenship" class="birth-label">9. Citizenship</label>
                    <input type="text" id="citizenship" name="citizenship" class="birth-form-control" placeholder="Enter citizenship" required>
                </div>
                <div class="form-group">
                    <label for="residence" class="birth-label">10. Residence</label>
                    <textarea id="residence" name="residence" class="birth-form-control" placeholder="Enter residence address" rows="3" required></textarea>
                </div>
            </div>

            <!-- Parental Information -->
            <div class="col-md-12">
                <h4>III. PARENTAL INFORMATION</h4>
                <div class="form-group">
                    <label for="father_name" class="birth-label">11. Name of Father</label>
                    <input type="text" id="father_name" name="father_name" class="birth-form-control" placeholder="Enter father's full name" required>
                </div>
                <div class="form-group">
                    <label for="mother_maiden_name" class="birth-label">12. Maiden Name of Mother</label>
                    <input type="text" id="mother_maiden_name" name="mother_maiden_name" class="birth-form-control" placeholder="Enter mother's maiden name" required>
                </div>
            </div>

            <!-- Medical Certificate -->
            <div class="col-md-12">
                <h4>II. MEDICAL CERTIFICATE</h4>
                <div class="form-group">
                    <label for="immediate_cause" class="birth-label">6a. Immediate Cause</label>
                    <textarea id="immediate_cause" name="immediate_cause" class="birth-form-control" placeholder="Enter immediate cause of death" rows="2" required></textarea>
                </div>
                <div class="form-group">
                    <label for="antecedent_cause" class="birth-label">6b. Antecedent Cause</label>
                    <textarea id="antecedent_cause" name="antecedent_cause" class="birth-form-control" placeholder="Enter antecedent cause of death" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="underlying_cause" class="birth-label">6c. Underlying Cause</label>
                    <textarea id="underlying_cause" name="underlying_cause" class="birth-form-control" placeholder="Enter underlying cause of death" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="other_conditions" class="birth-label">6d. Other Significant Conditions</label>
                    <textarea id="other_conditions" name="other_conditions" class="birth-form-control" placeholder="Enter other significant conditions" rows="2"></textarea>
                </div>
            </div>

            <!-- Maternal Condition -->
            <div class="col-md-12">
                <h5>Maternal Condition (if deceased was female aged 15-49 years old)</h5>
                <div class="form-group">
                    <label class="birth-label">7. Condition:</label>
                    <select id="maternal_condition" name="maternal_condition" class="birth-form-control">
                        <option value="">Select Maternal Condition</option>
                        <option value="Pregnant">Pregnant</option>
                        <option value="Pregnant, in labor">Pregnant, in labor</option>
                        <option value="Less than 42 days after delivery">Less than 42 days after delivery</option>
                        <option value="42 days to 1 year after delivery">42 days to 1 year after delivery</option>
                        <option value="None of the choices">None of the choices</option>
                    </select>
                </div>
            </div>

            <!-- Death by External Causes -->
            <div class="col-md-12">
                <h4>III. DEATH BY EXTERNAL CAUSES</h4>
                <div class="form-group">
                    <label for="manner_of_death" class="birth-label">8a. Manner of Death</label>
                    <input type="text" id="manner_of_death" name="manner_of_death" class="birth-form-control" placeholder="Homicide, Suicide, Accident, etc." required>
                </div>
                <div class="form-group">
                    <label for="place_of_occurrence" class="birth-label">8b. Place of Occurrence</label>
                    <input type="text" id="place_of_occurrence" name="place_of_occurrence" class="birth-form-control" placeholder="e.g., home, street, factory, etc." required>
                </div>
                <div class="form-group">
                    <label for="autopsy" class="birth-label">8c. Autopsy Performed?</label>
                    <select id="autopsy" name="autopsy" class="birth-form-control" required>
                        <option value="">Select</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>

            <!-- Attendant Details -->
            <div class="col-md-12">
                <h4>IV. ATTENDANT DETAILS</h4>
                <div class="form-group">
                    <label for="type_of_attendant" class="birth-label">9a. Type of Attendant</label>
                    <input type="text" id="type_of_attendant" name="type_of_attendant" class="birth-form-control" placeholder="e.g., Private Physician, Hospital Authority, etc." required>
                </div>
                <div class="form-group">
                    <label for="attendance_duration" class="birth-label">9b. Duration of Attendance</label>
                    <input type="text" id="attendance_duration" name="attendance_duration" class="birth-form-control" placeholder="From [Date] To [Date]" required>
                </div>
                <div class="form-group">
                    <label for="certifying_officer" class="birth-label">9c. Certifying Officer's Name and Title</label>
                    <input type="text" id="certifying_officer" name="certifying_officer" class="birth-form-control" placeholder="Enter certifying officer's name and title" required>
                </div>
                <div class="form-group">
                    <label for="certification_date" class="birth-label">9d. Date Certified</label>
                    <input type="date" id="certification_date" name="certification_date" class="birth-form-control" required>
                </div>
            </div>
<!-- Corpse Disposal -->
<div class="col-md-12">
                <h4>V. CORPSE DISPOSAL</h4>
                <div class="form-group">
                    <label for="corpse_disposal_method" class="birth-label">10. Corpse Disposal Method</label>
                    <select id="corpse_disposal_method" name="corpse_disposal_method" class="birth-form-control" required>
                        <option value="">Select Disposal Method</option>
                        <option value="Burial">Burial</option>
                        <option value="Cremation">Cremation</option>
                        <option value="Other">Others</option>
                    </select>
                </div>
                <div class="form-group" id="other_disposal_method" style="display:none;">
                    <label for="other_disposal_method_specify" class="birth-label">If Other, Specify</label>
                    <input type="text" id="other_disposal_method_specify" name="other_disposal_method_specify" class="birth-form-control" placeholder="Specify disposal method">
                </div>
                <div class="form-group">
                    <label for="cemetery_or_crematory_name" class="birth-label">11. Name of Cemetery or Crematory</label>
                    <input type="text" id="cemetery_or_crematory_name" name="cemetery_or_crematory_name" class="birth-form-control" placeholder="Enter name of cemetery or crematory" required>
                </div>
                <div class="form-group">
                    <label for="cemetery_or_crematory_address" class="birth-label">12. Address of Cemetery or Crematory</label>
                    <input type="text" id="cemetery_or_crematory_address" name="cemetery_or_crematory_address" class="birth-form-control" placeholder="Enter address of cemetery or crematory" required>
                </div>
            </div>
            <div class="col-md-12">
    <h4>FOR CHILDREN AGED 0 TO 7 DAYS</h4>

    <!-- Age of Mother -->
    <div class="form-group">
        <label for="age_of_mother" class="birth-label">1. Age of Mother</label>
        <input type="number" id="age_of_mother" name="age_of_mother" class="birth-form-control" placeholder="Enter age of mother" required>
    </div>

    <!-- Method of Delivery -->
    <div class="form-group">
        <label for="method_of_delivery" class="birth-label">2. Method of Delivery</label>
        <select id="method_of_delivery" name="method_of_delivery" class="birth-form-control" required>
            <option value="">Select Method of Delivery</option>
            <option value="Normal spontaneous vertex">Normal spontaneous vertex</option>
            <option value="Caesarean section">Caesarean section</option>
            <option value="Assisted vaginal delivery">Assisted vaginal delivery</option>
            <option value="Other">Other (Specify)</option>
        </select>
    </div>

    <!-- Length of Pregnancy -->
    <div class="form-group">
        <label for="length_of_pregnancy" class="birth-label">3. Length of Pregnancy (in completed weeks)</label>
        <input type="number" id="length_of_pregnancy" name="length_of_pregnancy" class="birth-form-control" placeholder="Enter length of pregnancy" required>
    </div>

    <!-- Type of Birth -->
    <div class="form-group">
        <label for="type_of_birth" class="birth-label">4. Type of Birth</label>
        <select id="type_of_birth" name="type_of_birth" class="birth-form-control" required>
            <option value="">Select Type of Birth</option>
            <option value="Single">Single</option>
            <option value="Twin">Twin</option>
            <option value="Triplet">Triplet</option>
            <option value="Other">Other (Specify)</option>
        </select>
    </div>

    <!-- Child's Position in Multiple Birth -->
    <div class="form-group">
        <label for="multiple_birth_position" class="birth-label">5. If Multiple Birth, Child Was</label>
        <select id="multiple_birth_position" name="multiple_birth_position" class="birth-form-control">
            <option value="">Select Position</option>
            <option value="First">First</option>
            <option value="Second">Second</option>
            <option value="Third">Third</option>
            <option value="Other">Other (Specify)</option>
        </select>
    </div>
</div>

            <div class="affidavit-section">
                <br>
    <h4 class="text-center" style="font-weight: bold;">AFFIDAVIT FOR DELAYED REGISTRATION OF DEATH</h4>
    <br><p>
        I, <input type="text" name="affiant_name" class="birth-form-control" style="width: 200px;" placeholder="Affiant's Full Name" required>, of legal age, 
        <select name="legal_status" class="birth-form-control" style="width: 150px;" required>
            <option value="">Select Legal Status</option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Divorced">Divorced</option>
            <option value="Widow/Widower">Widow/Widower</option>
        </select>, with residence and postal address
        <input type="text" name="affiant_address" class="birth-form-control" style="width: 300px;" placeholder="Residence and Postal Address" required>, 
        after being duly sworn in accordance with law, do hereby depose and say:
    </p>
    <ol>
        <li>
            That <input type="text" name="deceased_name" class="birth-form-control" style="width: 200px;" placeholder="Deceased's Name" required> died on 
            <input type="date" name="date_of_death" class="birth-form-control" style="width: 180px;" required>, and was buried/cremated in 
            <input type="text" name="burial_place" class="birth-form-control" style="width: 300px;" placeholder="Burial/Cremation Place" required>.
        </li>
        <li>
            That the deceased at the time of his/her death:
            <br>
            <label><input type="checkbox" name="attended_by" value="Attended"> was attended by</label> 
            <input type="text" name="attended_by_person" class="birth-form-control" style="width: 250px;" placeholder="Name of Attendant">
            <br>
            <label><input type="checkbox" name="
            " value="Not Attended"> was not attended</label>.
        </li>
        <li>
            That the cause of death of the deceased was 
            <input type="text" name="cause_of_death" class="birth-form-control" style="width: 300px;" placeholder="Cause of Death" required>.
        </li>
        <li>
            That the reason for the delay in registering this death was due to 
            <input type="text" name="reason_delay" class="birth-form-control" style="width: 300px;" placeholder="Reason for Delay" required>.
        </li>
        <li>
            That I am executing this affidavit to attest to the truthfulness of the foregoing statements for all legal intents and purposes.
        </li>
    </ol>
    <p>
        In truth whereof, I have affixed my signature below this 
        <input type="number" name="day_signed" class="birth-form-control" style="width: 50px;" placeholder="Day" required> day of 
        <input type="text" name="month_signed" class="birth-form-control" style="width: 100px;" placeholder="Month" required>, 
        <input type="number" name="year_signed" class="birth-form-control" style="width: 80px;" placeholder="Year" required>, at 
        <input type="text" name="place_signed" class="birth-form-control" style="width: 300px;" placeholder="Place Signed" required>, Philippines.
    </p>
    <br>
    
   
    <h5 class="text-center" style="font-weight: bold;">SUBSCRIBED AND SWORN</h5>
    <br>
    <p>
        Subscribed and sworn to before me this 
        <input type="number" name="day_sworn" class="birth-form-control" style="width: 50px;" placeholder="Day" required> day of 
        <input type="text" name="month_sworn" class="birth-form-control" style="width: 100px;" placeholder="Month" required>, 
        <input type="number" name="year_sworn" class="birth-form-control" style="width: 80px;" placeholder="Year" required>, at 
        <input type="text" name="place_sworn" class="birth-form-control" style="width: 300px;" placeholder="Place Sworn" required>, Philippines, affiant who exhibited to me his/her Community Tax Cert. issued on 
        <input type="date" name="tax_cert_date" class="birth-form-control" style="width: 180px;" required> at 
        <input type="text" name="tax_cert_place" class="birth-form-control" style="width: 300px;" placeholder="Place of Issuance" required>.
    </p>
   
</div>

            <!-- Submit Section -->
            <div class="col-md-12 mt-3">
                <button type="button" class="btn btn-danger" onclick="window.history.back()">Back</button>         
                 <button type="submit" data-bs-toggle="modal" class="btn btn-success" data-bs-target="#submitInfoModal">Submit</button>


            </div>
        </div>
</form>
</div>
        <!-- Submit Info Modal -->
<div class="modal fade" id="submitInfoModal" tabindex="-1" aria-labelledby="submitInfoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="submitInfoModalLabel">Confirm Submission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to submit this information?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel and Edit</button>
                <button type="button" class="btn btn-success" id="confirmSubmit">Yes, I am Sure</button>
            </div>
        </div>
    </div>
</div>

<!-- Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                You have successfully filled up the form. Please proceed with the payment process here.
                <br>
                <a href="#">Click here to download a copy of your responses</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="proceedToPay">Proceed to Pay</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Handling the "change" event for the disposal method
    document.getElementById('corpse_disposal_method').addEventListener('change', function() {
        var disposalMethod = this.value;
        if (disposalMethod === 'Other') {
            document.getElementById('other_disposal_method').style.display = 'block';
        } else {
            document.getElementById('other_disposal_method').style.display = 'none';
        }
    });

    // Handling the "Yes, I am Sure" button click inside the modal
    document.getElementById('confirmSubmit').addEventListener('click', function() {
        // Close the Submit Info Modal
        let submitInfoModal = bootstrap.Modal.getInstance(document.getElementById('submitInfoModal'));
        submitInfoModal.hide();

        // Open the Payment Modal
        let paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
        paymentModal.show();
    });

    // Handling the "Proceed to Pay" button click inside the Payment Modal
    document.getElementById('proceedToPay').addEventListener('click', function() {
        // Close the Payment Modal
        let paymentModal = bootstrap.Modal.getInstance(document.getElementById('paymentModal'));
        paymentModal.hide();

        // Submit the form with the ID 'executedeathstore'
        document.getElementById('executedeathstore').submit();
    });
</script>

<!-- SCRIPT FOR ERROR HANDLING - CERTIFICATE OF DEATH -->

<script>

document.addEventListener("DOMContentLoaded", function() {

    // Restrict input to only alphabetical letters for name fields (deceased, father, mother)
    const nameFields = document.querySelectorAll(
        'input[name^="deceased_first_name"], input[name^="deceased_middle_name"], input[name^="deceased_last_name"], ' +
        'input[name^="father_first_name"], input[name^="father_middle_name"], input[name^="father_last_name"], ' +
        'input[name^="mother_first_name"], input[name^="mother_middle_name"], input[name^="mother_last_name"], ' +
        'input[name^="father_name"], input[name^="mother_name"]'
    );

    nameFields.forEach(field => {
        field.addEventListener("input", function(e) {
            this.value = this.value.replace(/[^A-Za-z\s]/g, ''); // Allow only letters and spaces
        });
    });

    // Restrict input to only numerical values for age fields (father_age, mother_age)
    const ageFields = document.querySelectorAll('input[name="father_age"], input[name="mother_age"]');
    ageFields.forEach(field => {
        field.addEventListener("input", function(e) {
            this.value = this.value.replace(/[^0-9]/g, ''); // Allow only numbers
        });
    });

    // Error handling for empty required fields
    const form = document.getElementById('death_certificate_form');
    form.addEventListener('submit', function(e) {
        let isValid = true;
        
        // Check for empty required fields
        const requiredFields = document.querySelectorAll('input[required]');
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
                field.style.borderColor = 'red'; // Highlight empty required fields
                // Optionally, you can display a custom error message here
            } else {
                field.style.borderColor = ''; // Reset border color if valid
            }
        });

        // Prevent form submission if validation fails
        if (!isValid) {
            e.preventDefault(); // Prevent form submission
            alert("Please fill in all required fields.");
        }
    });
});

</script>

<!-- SCRIPT TO LIMIT DATE SELECTION TO TODAY ONLY -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Get today's date
    const today = new Date();
    const formattedDate = today.toISOString().split('T')[0]; // Format date as YYYY-MM-DD

    // Set the max attribute to today's date for the specified fields
    document.querySelectorAll('input[type="date"]').forEach(function(input) {
        input.setAttribute('max', formattedDate);
    });

    // Additional code to handle specific requirements for the date fields
    const dateFields = ['tax_cert_date', 'date_of_death', 'certification_date', 'date_of_birth'];

    dateFields.forEach(function(fieldId) {
        const field = document.getElementById(fieldId);
        if (field) {
            field.setAttribute('max', formattedDate); // Disable future dates
        }
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Restrict input to only alphabetical letters and spaces for full_name
    const fullNameField = document.getElementById('full_name');
    
    fullNameField.addEventListener('input', function(e) {
        // Replace any non-alphabetical character or character other than space with an empty string
        this.value = this.value.replace(/[^A-Za-z\s]/g, '');
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Restrict input to only alphabetical letters and spaces for specific fields
    const nameFields = document.querySelectorAll(
        '#full_name, #father_name, #mother_maiden_name, #type_of_attendant, #certifying_officer, [name="affiant_name"], [name="deceased_name"]'
    );

    nameFields.forEach(field => {
        field.addEventListener("input", function(e) {
            this.value = this.value.replace(/[^A-Za-z\s]/g, ''); // Allow only letters and spaces
        });
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Restrict input to only numerical values for specific fields
    const numericFields = document.querySelectorAll(
        '#completed_years, #months_days, #hours_minutes_seconds, #age_of_mother',
    );

    numericFields.forEach(field => {
        field.addEventListener("input", function(e) {
            this.value = this.value.replace(/[^0-9]/g, ''); // Allow only numeric characters
        });
    });
});
</script>


@endsection
