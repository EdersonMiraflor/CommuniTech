@extends('layouts.layout')

@section('contents')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!--ERROR HANDLING CSS-->
<head>
    <style>
 
 .birth-container input:invalid {
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
</head>

<br><br>
<div class="birth-container">
    <h2 class="text-center birth-heading">
        <img src="{{ asset('/img/manito-logo.png') }}" alt="Manito Logo" class="birth-logo"> CERTIFICATE OF LIVE BIRTH
    </h2>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <br>
@if(session('error_input'))
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
    <p>{{ session('error_input') }}</p>
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

    <form id="executebirthstore" action="/home/services/form102" method="POST">
        @csrf

        <div class="row">
            <!-- Child's Information -->
            <div class="col-md-12">
            <div class="form-group">
                    <label for="user_name" class="birth-label">User Name</label>
                    <input type="text" id="user_name" name="user_name" class="birth-form-control" value="{{ auth()->user()->name }}" readonly>
                </div>
                <p style="color:#333"><em>The red color indicates a required field.</em></p>
                <h4>I. CHILD'S INFORMATION</h4>
                <div class="form-group">
                    <label for="child_name" class="birth-label">1. Child's Name *</label>
                    <input type="text" id="child_name" name="child_first" class="birth-form-control" placeholder="Enter child's first name" required> 
                    <input type="text" id="child_name" name="child_middle" class="birth-form-control" placeholder="Enter child's middle name" required> 
                    <input type="text" id="child_name" name="child_last" class="birth-form-control" placeholder="Enter child's last name" required> 
                </div>

                <div class="form-group">
                    <label for="child_sex" class="birth-label">2. Sex *</label>
                    <select id="child_sex" name="child_sex" class="birth-form-control" required>
                        <option value="">Select Sex</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="child_birthdate" class="birth-label">3. Date of Birth *</label>
                    <input type="date" id="child_birthdate" name="child_birthdate" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="child_birthplace" class="birth-label">4. Place of Birth *</label>
                    <input type="text" id="child_birthplace" name="child_birthplace" class="birth-form-control" placeholder="Enter place of birth" required>
                </div>

                <div class="form-group">
                    <label for="multiple_birth" class="birth-label">5a. Type of Birth *</label>
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
                    <input type="text" id="other_birth_type_specify" name="birth_type" class="birth-form-control" placeholder="Specify other birth type" required>
                </div>

                <div class="form-group">
                    <label for="birth_order" class="birth-label">5b. Birth Order (if Multiple Births) *</label>
                    <input type="number" id="birth_order" name="birth_order" class="birth-form-control" placeholder="Enter birth order" required>
                </div>
            </div>

                <div class="form-group">
                    <label for="birth_weight" class="birth-label">6. Birth Weight (kg) *</label>
                    <input type="number" id="birth_weight" name="birth_weight" class="birth-form-control" placeholder="Enter birth weight" required>
                </div>

            <!-- Mother's Information -->
            <div class="col-md-12">
                <h4>II. MOTHER'S INFORMATION</h4>

                <div class="form-group">
                    <label for="mother_maiden_name" class="birth-label">7. Mother's Maiden Name *</label>
                    <input type="text" id="mother_maiden_name" name="mother_first_name" class="birth-form-control" placeholder="Enter mother's first name" required>
                    <input type="text" id="mother_maiden_name" name="mother_middle_name" class="birth-form-control" placeholder="Enter mother's middle name" required>
                    <input type="text" id="mother_maiden_name" name="mother_last_name" class="birth-form-control" placeholder="Enter mother's last name" required>
                </div>

                <div class="form-group">
                    <label for="citizenship" class="birth-label">8. Citizenship *</label>
                    <input type="text" id="citizenship" name="citizenship" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="religion" class="birth-label">9. Religion/Religious Sect *</label>
                    <input type="text" id="religion" name="religion" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="total_number" class="birth-label">10a. Total number of children born alive *</label>
                    <input type="text" id="total_number" name="total_number" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="children" class="birth-label">10b. Number of children still living including this birth *</label>
                    <input type="text" id="children" name="children" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="dead_child" class="birth-label">10c. No. of children born alive but are now dead *</label>
                    <input type="text" id="dead_child" name="dead_child" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="occupation" class="birth-label">11. Occupation *</label>
                    <input type="text" id="occupation" name="occupation" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="mother_age" class="birth-label">12. Age *</label>
                    <input type="text" id="mother_age" name="mother_age" class="birth-form-control" required>
                </div>

                <div class="form-group">
                <label for="mother_place" class="birth-label">13. Residence *</label>

                <!-- Street -->
                <div class="d-flex">
                    <select id="mother_place" name="mother_street" class="birth-form-control me-2" required>
                        <option value="">Select Barangay</option>
                        <option value="Balabagon">Balabagon</option>
                        <option value="Balasbas">Balasbas</option>
                        <option value="Bamban">Bamban</option>
                        <option value="Buyo">Buyo</option>
                        <option value="Cabacongan">Cabacongan</option>
                        <option value="Cabit">Cabit</option>
                        <option value="Cawayan">Cawayan</option>
                        <option value="Cawit">Cawit</option>
                        <option value="Holugan">Holugan</option>
                        <option value="It-ba">It-ba</option>
                        <option value="Malobago">Malobago</option>
                        <option value="Manumbalay">Manumbalay</option>
                        <option value="Nagotgot">Nagotgot</option>
                        <option value="Pawa">Pawa</option>
                        <option value="Tinapian">Tinapian</option>
                        <option value="Other">Other (Please specify)</option>
                    </select>
                    <input type="text" id="mother_place_input" name="mother_street_input" class="birth-form-control" placeholder="Specify Barangay or Street" required>
                </div>

                <!-- City/Municipality -->
                <select id="mother_place" name="mother_city" class="birth-form-control" required>
                    <option value="">Select City/Municipality</option>
                    <option value="Manito">Manito</option>
                </select>

                <!-- Province -->
                <select id="mother_place" name="mother_province" class="birth-form-control" required>
                    <option value="">Select Province</option>
                    <option value="Albay">Albay</option>
                </select>

                <!-- Country -->
                <select id="mother_place" name="mother_country" class="birth-form-control" required>
                    <option value="">Select Country</option>
                    <option value="Philippines">Philippines</option>
                </select>
            </div>


            </div>

            <!-- Father's Information -->
            <div class="col-md-12">
                <h4>III. FATHER'S INFORMATION</h4>

                <div class="form-group">
                    <label for="father's_name" class="birth-label">14. Father's Name *</label>
                    <input type="text" id="father_maiden_name" name="father_first_name" class="birth-form-control" placeholder="Enter father's first name" required>
                    <input type="text" id="father_middle_name" name="father_middle_name" class="birth-form-control" placeholder="Enter father's middle name" required>
                    <input type="text" id="father_last_name" name="father_last_name" class="birth-form-control" placeholder="Enter father's last name" required>
                </div>

                <div class="form-group">
                    <label for="citizenship" class="birth-label">15. Citizenship *</label>
                    <input type="text" id="citizenship" name="citizenship2" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="religion" class="birth-label">16. Religion/Religious Sect *</label>
                    <input type="text" id="religion" name="religion2" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="occupation" class="birth-label">17. Occupation *</label>
                    <input type="text" id="occupation" name="occupation2" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="mother_age" class="birth-label">18. Age *</label>
                    <input type="text" id="mother_age" name="father_age" class="birth-form-control" required>
                </div>

                <div class="form-group">
                <label for="father_place" class="birth-label">19. Residence *</label>

                <!-- Street -->
                <div class="d-flex">
                    <select id="father_place" name="father_street" class="birth-form-control me-2" required>
                        <option value="">Select Barangay</option>
                        <option value="Balabagon">Balabagon</option>
                        <option value="Balasbas">Balasbas</option>
                        <option value="Bamban">Bamban</option>
                        <option value="Buyo">Buyo</option>
                        <option value="Cabacongan">Cabacongan</option>
                        <option value="Cabit">Cabit</option>
                        <option value="Cawayan">Cawayan</option>
                        <option value="Cawit">Cawit</option>
                        <option value="Holugan">Holugan</option>
                        <option value="It-ba">It-ba</option>
                        <option value="Malobago">Malobago</option>
                        <option value="Manumbalay">Manumbalay</option>
                        <option value="Nagotgot">Nagotgot</option>
                        <option value="Pawa">Pawa</option>
                        <option value="Tinapian">Tinapian</option>
                        <option value="Other">Other (Please Specify)</option>
                    </select>
                    <input type="text" id="father_place_input" name="father_street_input" class="birth-form-control" placeholder="Specify Barangay or Street" required>
                </div>

                <!-- City/Municipality -->
                <select id="father_place" name="father_city" class="birth-form-control" required>
                    <option value="">Select City/Municipality</option>
                    <option value="Manito">Manito</option>
                </select>

                <!-- Province -->
                <select id="father_place" name="father_province" class="birth-form-control" required>
                    <option value="">Select Province</option>
                    <option value="Albay">Albay</option>
                </select>

                <!-- Country -->
                <select id="father_place" name="father_country" class="birth-form-control" required>
                    <option value="">Select Country</option>
                    <option value="Philippines">Philippines</option>
                </select>
            </div>

            </div>

            <!-- Marriage of Parents -->
            <div class="col-md-12">
                <h4>IV. MARRIAGE OF PARENTS</h4>

                <div class="form-group">
                    <label for="marriage_date" class="birth-label">20a. Date of Marriage *</label>
                    <input type="date" id="marriage_date" name="marriage_date" class="birth-form-control" required>
                </div>

                <div class="form-group">
                    <label for="marriage_place" class="birth-label">20b. Place *</label>

                    <!-- Street -->
                    <div class="d-flex">
                        <select id="marriage_place" name="marriage_street" class="birth-form-control me-2" required>
                            <option value="">Select Barangay</option>
                            <option value="Balabagon">Balabagon</option>
                            <option value="Balasbas">Balasbas</option>
                            <option value="Bamban">Bamban</option>
                            <option value="Buyo">Buyo</option>
                            <option value="Cabacongan">Cabacongan</option>
                            <option value="Cabit">Cabit</option>
                            <option value="Cawayan">Cawayan</option>
                            <option value="Cawit">Cawit</option>
                            <option value="Holugan">Holugan</option>
                            <option value="It-ba">It-ba</option>
                            <option value="Malobago">Malobago</option>
                            <option value="Manumbalay">Manumbalay</option>
                            <option value="Nagotgot">Nagotgot</option>
                            <option value="Pawa">Pawa</option>
                            <option value="Tinapian">Tinapian</option>
                            <option value="Other">Other (Please Specify)</option>
                        </select>
                        <input type="text" id="marriage_place_input" name="marriage_street_input" class="birth-form-control" placeholder="Specify Barangay or Street" required>
                    </div>

                    <!-- City/Municipality -->
                    <select id="marriage_place" name="marriage_municipality" class="birth-form-control" required>
                        <option value="">Select City/Municipality</option>
                        <option value="Manito">Manito</option>
                    </select>

                    <!-- Province -->
                    <select id="marriage_place" name="marriage_province" class="birth-form-control" required>
                        <option value="">Select Province</option>
                        <option value="Albay">Albay</option>
                    </select>

                    <!-- Country -->
                    <select id="marriage_place" name="marriage_country" class="birth-form-control" required>
                        <option value="">Select Country</option>
                        <option value="Philippines">Philippines</option>
                    </select>
                </div>

            </div>

            <!-- Attendant Information -->
            <div class="col-md-12">
                <h4>IV. ATTENDANT INFORMATION</h4>

                <div class="form-group">
                    <label for="attendant_role" class="birth-label">21a. Attendant *</label>
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
                    <input type="text" id="other_attendant_role_specify" name="other_attendant_role" class="birth-form-control" placeholder="Specify other role" required>
                </div>
            </div>



            <!-- Submit Section data-bs-toggle="modal", data-bs-target="#termsModal" -->
            <div class="col-md-12 mt-3">
                <button type="button" class="btn btn-danger" onclick="window.history.back()">Back</button>          
                <button type="submit"  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#termsModal"  id="submitBtn">Submit</button>


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


<!-- input error modal-->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Reminder</h5>
            </div>
            <div class="modal-body">
                <p>
                    Please fill out all required fields.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="okBtn">OK</button>
            </div>
        </div>
    </div>
</div>

<!-- Terms and Agreement Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Terms and Agreement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6><b>Data Privacy Act</b></h6>
                <p>
                    By using this service, you acknowledge that your personal information will be collected, processed, 
                    and stored in compliance with the Data Privacy Act of 2012. This includes your civil registry data 
                    for certification purposes.
                </p>
                <h6><b>Terms and Agreement</b></h6>
                <p>
                    Please read the terms and conditions carefully before proceeding. Your submission signifies your agreement 
                    to abide by the rules and policies of the Manito Civil Registry Online Services.
                </p>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="agreeCheckbox">
                    <label class="form-check-label" for="agreeCheckbox">I agree to the Terms and Agreement and Data Privacy Act</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" id="submitButton" disabled>Submit</button>
            </div>
        </div>
    </div>
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
                <button type="button" class="btn green-btn" id="confirmSubmit">Yes, I am Sure</button>
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="submitForm()">Proceed to Pay</button>

            </div>
        </div>
    </div>
</div>

<script>
    // Handle "Yes, I am Sure" button click
    document.getElementById('confirmSubmit').addEventListener('click', function() {
        // Close the Submit Info Modal
        let submitInfoModal = bootstrap.Modal.getInstance(document.getElementById('submitInfoModal'));
        submitInfoModal.hide();

        // Open the Payment Modal
        let paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
        paymentModal.show();
    });

    function submitForm() {
        // Submit the form with the ID 'executedeathstore'
        document.getElementById('executebirthstore').submit();
    }
</script>



<!-- SCRIPT FOR ERROR HANDLING -->

<script>

document.addEventListener("DOMContentLoaded", function() {
    // Disable dates after today for child birthdate and marriage date
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('child_birthdate').setAttribute('max', today);
    document.getElementById('marriage_date').setAttribute('max', today);
    document.getElementById('affi_birthdate').setAttribute('max', today);

    // Restrict input to only alphabetical letters for name fields (child, mother, father)
    const nameFields = document.querySelectorAll('input[name^="child_first"], input[name^="child_middle"], input[name^="child_last"], input[name^="mother_first_name"], input[name^="mother_middle_name"], input[name^="mother_last_name"], input[name^="father_first_name"], input[name^="father_middle_name"], input[name^="father_last_name"], input[name^="father_name"], input[name^="mother_name"]');

    nameFields.forEach(field => {
        field.addEventListener("input", function(e) {
            this.value = this.value.replace(/[^A-Za-z\s]/g, ''); // Allow only letters and spaces
        });
    });

    // Restrict input to only numerical values for age fields
    const ageFields = document.querySelectorAll('input[name="mother_age"], input[name="father_age"]');
    ageFields.forEach(field => {
        field.addEventListener("input", function(e) {
            this.value = this.value.replace(/[^0-9]/g, ''); // Allow only numbers
        });
    });
});


</script>


<script>
    // Function to validate only alphabetical characters
    function validateName(input) {
        // Replace any non-alphabetical characters with an empty string
        input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
    }
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Restrict input to only numerical values for specific fields
    const numericFields = document.querySelectorAll(
        '#birth_order, #birth_weight, #total_number, #children, #dead_child, #mother_age, #father_age'
    );

    numericFields.forEach(field => {
        field.addEventListener("input", function(e) {
            this.value = this.value.replace(/[^0-9]/g, ''); // Allow only numeric characters
        });
    });
});
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
    // List of input names to validate
    const nameInputs = [
        "mother_first_name",
        "mother_middle_name",
        "mother_last_name",
        "child_birthplace",
        "citizenship",
        "religion",
        "occupation",
        "mother_city",
        "mother_province",
        "mother_country",
        "citizenship2",
        "religion2",
        "occupation2",
        "father_city",
        "father_province",
        "father_country",
        "marriage_municipality",
        "marriage_province",
        "marriage_country",
        //"father_name",
        //"mother_name",
        //"name_child",
        //"birth_place",
        //"birth_place1",
        //"signature1",
        //"signature2"
    ];

    // Add input event listener for each field
    nameInputs.forEach(name => {
        const input = document.querySelector(`[name="${name}"]`);
        if (input) {
            input.addEventListener("input", () => {
                // Remove non-alphabetic characters
                input.value = input.value.replace(/[^a-zA-Z\s]/g, "");
            });
        }
    });
});

</script>


<!--  TERMS TO SUBMITINFO MODAL TRANS  -->
<script> 
    document.addEventListener("DOMContentLoaded", function () {
    const agreeCheckbox = document.getElementById("agreeCheckbox");
    const submitButton = document.getElementById("submitButton");

    // Enable the "Submit" button when the checkbox is checked
    agreeCheckbox.addEventListener("change", function () {
        submitButton.disabled = !agreeCheckbox.checked;
    });

    document.getElementById('submitButton').addEventListener('click', function() {
        // Close the terms modal
        let termsModal = bootstrap.Modal.getInstance(document.getElementById('termsModal'));
        termsModal.hide();

        // Open the submit  Modal
        let submitInfoModal = new bootstrap.Modal(document.getElementById('submitInfoModal'));
        submitInfoModal.show();
    });

   
});

    </script>

<!--script for select options-->
<script>
document.getElementById('mother_place').addEventListener('change', function () {
    const input = document.getElementById('mother_place_input');
    input.disabled = this.value !== 'Other';
    if (input.disabled) input.value = ''; // Clear input if not enabled
});

</script>

<script>
document.getElementById('father_place').addEventListener('change', function () {
    const input = document.getElementById('father_place_input');
    input.disabled = this.value !== 'Other';
    if (input.disabled) input.value = ''; // Clear input if not enabled
});

</script>
<!--
<script>
    // Function to check if all required fields are filled
    function checkFormCompletion() {
        const inputs = document.querySelectorAll('.birth-container input[required]');
        let allFilled = true;

        // Loop through all required inputs and check if any are empty
        inputs.forEach(function(input) {
            if (!input.value.trim()) {
                allFilled = false; // If any required input is empty, set allFilled to false
            }
        });

        return allFilled; // Return true if all fields are filled, false otherwise
    }

    // Handle the form submission and check required fields
    document.getElementById('submitBtn').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the form from submitting immediately
        
        const allFilled = checkFormCompletion(); // Check if all required inputs are filled
        
        if (!allFilled) {
            // Show a popup notification if not all required fields are filled
            alert('Please fill out all required fields.');
            // Do not proceed to #termsModal, form will not be submitted
        } else {
            // If all required fields are filled, proceed to show the modal
            $('#termsModal').modal('show');
        }
    });

    // Initial check on page load to disable/enable submit button
    window.onload = function() {
        const submitBtn = document.getElementById('submitBtn');
        const allFilled = checkFormCompletion();
    };
</script>

-->


@endsection
