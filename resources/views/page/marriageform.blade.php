@extends('layouts.layout')

@section('contents')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<br><br>
<div class="birth-container"> 
    <h2 class="text-center birth-heading">
        <img src="{{ asset('/img/manito-logo.png') }}" alt="Manito Logo" class="birth-logo"> CERTIFICATE OF MARRIAGE
    </h2>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <form id="executemarriagestore" action="/home/services/marriageform" method="POST">
        @csrf
        <div class="row">
            
            <!-- Groom's Information -->
            <div class="col-md-12">
            <div class="form-group">
                    <label for="user_name" class="birth-label">User Name</label>
                    <input type="text" id="user_name" name="user_name" class="birth-form-control" value="{{ auth()->user()->name }}" readonly>
                </div>
            <h4>I. HUSBAND'S INFORMATION</h4>
            <h3>1. Name of Contracting Parties</h3>
            <div class="form-group">
                <label for="husband_first_name" class="birth-label">First Name</label>
                <input type="text" id="husband_first_name" name="husband_first_name" class="birth-form-control" placeholder="Enter husband's first name" required />
            </div>

            <div class="form-group">
                <label for="husband_middle_name" class="birth-label">Middle Name</label>
                <input type="text" id="husband_middle_name" name="husband_middle_name" class="birth-form-control" placeholder="Enter husband's middle name" required />
            </div>

            <div class="form-group">
                <label for="husband_last_name" class="birth-label">Last Name</label>
                <input type="text" id="husband_last_name" name="husband_last_name" class="birth-form-control" placeholder="Enter husband's last name" required />
            </div>

            <h3>2a. Date of Birth</h3>
            <div class="form-group">
                <label for="husband_birthdate" class="birth-label">Date of Birth</label>
                <input type="date" id="husband_birthdate" name="husband_birthdate" class="birth-form-control" required />
            </div>

            <h3>2b. Age</h3>    
            <div class="form-group">
                <label for="husband_age" class="birth-label">Age</label>
                <input type="text" id="husband_age" name="husband_age" class="birth-form-control" placeholder="Enter husband's age"required />
            </div>

            <h3>3. Place of Birth</h3>
            <div class="form-group">
                <label for="husband_city-municipality" class="birth-label">City/Municipality</label>
                <input type="text" id="husband_city-municipality" name="husband_city-municipality" class="birth-form-control" placeholder="Enter husband's City/Municipality" required />
            </div>

            <div class="form-group">
                <label for="husband_province" class="birth-label">Province</label>
                <input type="text" id="husband_province" name="husband_province" class="birth-form-control" placeholder="Enter husband's Province" required />
            </div>

            <div class="form-group">
                <label for="husband_country" class="birth-label">Country</label>
                <input type="text" id="husband_country" name="husband_country" class="birth-form-control" placeholder="Enter husband's Country" required />
            </div>

            <h3>4b. Citizenship</h3>
            <div class="form-group">
                <label for="husband_citizenship" class="birth-label">Citizenship</label>
                <input type="text" id="husband_citizenship" name="husband_citizenship" class="birth-form-control" placeholder="Enter husband's citizenship" required />
            </div>

            <h3>5. Residence</h3>
            <div class="form-group">
                <label for="husband_residence" class="birth-label">Residence</label>
                <input type="text" id="husband_residence" name="husband_residence" class="birth-form-control" placeholder="Enter (House No., St., Barangay, City/Municipality, Province, Country)" required />
            </div>

            <h3>6. Religion/Religious Sect</h3>
            <div class="form-group">
                <label for="husband_religion" class="birth-label">Religion</label>
                <input type="text" id="husband_religion" name="husband_religion" class="birth-form-control" placeholder="Enter husband's religion" required />
            </div>

            <h3>7. Name of Father</h3>
            <div class="form-group">
                <label for="husband_father_first_name" class="birth-label">Father's First Name</label>
                <input type="text" id="husband_father_first_name" name="husband_father_first_name" class="birth-form-control" placeholder="Enter father's first name" required />
            </div>

            <div class="form-group">
                <label for="husband_father_middle_name" class="birth-label">Father's Middle Name</label>
                <input type="text" id="husband_father_middle_name" name="husband_father_middle_name" class="birth-form-control" placeholder="Enter father's middle name" required />
            </div>

            <div class="form-group">
                <label for="husband_father_last_name" class="birth-label">Father's Last Name</label>
                <input type="text" id="husband_father_last_name" name="husband_father_last_name" class="birth-form-control" placeholder="Enter father's last name" required />
            </div>

            <h3>8. Father's Citizenship</h3>
            <div class="form-group">
                <label for="husband_father_citizenship" class="birth-label">Citizenship</label>
                <input type="text" id="husband_father_citizenship" name="husband_father_citizenship" class="birth-form-control" placeholder="Enter husband's father's citizenship" required />
            </div>

            <h3>9. Name of Mother (Maiden Name)</h3>
            <div class="form-group">
                <label for="husband_mother_first_name" class="birth-label">Mother's First Name</label>
                <input type="text" id="husband_mother_first_name" name="husband_mother_first_name" class="birth-form-control" placeholder="Enter mother's first name" required />
            </div>

            <div class="form-group">
                <label for="husband_mother_middle_name" class="birth-label">Mother's Middle Name</label>
                <input type="text" id="husband_mother_middle_name" name="husband_mother_middle_name" class="birth-form-control" placeholder="Enter mother's middle name" required />
            </div>

            <div class="form-group">
                <label for="husband_mother_maiden_last_name" class="birth-label">Mother's Maiden Last Name</label>
                <input type="text" id="husband_mother_maiden_last_name" name="husband_mother_maiden_last_name" class="birth-form-control" placeholder="Enter mother's maiden last name" required />
            </div>

            <h3>10. Husband's Mother's Citizenship</h3>
            <div class="form-group">
                <label for="husband_mother_citizenship" class="birth-label">Citizenship</label>
                <input type="text" id="husband_mother_citizenship" name="husband_mother_citizenship" class="birth-form-control" placeholder="Enter husband's mother's citizenship" required />
            </div>
<!--WIFE"S INFORMATION-->
            <h4>II. WIFE'S INFORMATION</h4>
            <h3>1. Name of Contracting Parties</h3>
            <div class="form-group">
                <label for="wife_first_name" class="birth-label">First Name</label>
                <input type="text" id="wife_first_name" name="wife_first_name" class="birth-form-control" placeholder="Enter wife's first name" required />
            </div>

            <div class="form-group">
                <label for="wife_middle_name" class="birth-label">Middle Name</label>
                <input type="text" id="wife_middle_name" name="wife_middle_name" class="birth-form-control" placeholder="Enter wife's middle name" required />
            </div>

            <div class="form-group">
                <label for="wife_last_name" class="birth-label">Last Name</label>
                <input type="text" id="wife_last_name" name="wife_last_name" class="birth-form-control" placeholder="Enter wife's last name" required />
            </div>

            <h3>2a. Date of Birth</h3>
            <div class="form-group">
                <label for="wife_birthdate" class="birth-label">Date of Birth</label>
                <input type="date" id="wife_birthdate" name="wife_birthdate" class="birth-form-control" required />
            </div>

            <h3>2b. Age</h3>    
            <div class="form-group">
                <label for="wife_age" class="birth-label">Age</label>
                <input type="text" id="wife_age" name="wife_age" class="birth-form-control" placeholder="Enter wife's age" required />
            </div>

            <h3>3. Place of Birth</h3>
            <div class="form-group">
                <label for="wife_city-municipality" class="birth-label">City/Municipality</label>
                <input type="text" id="wife_city-municipality" name="wife_city-municipality" class="birth-form-control" placeholder="Enter wife's City/Municipality" required />
            </div>

            <div class="form-group">
                <label for="wife_province" class="birth-label">Province</label>
                <input type="text" id="wife_province" name="wife_province" class="birth-form-control" placeholder="Enter wife's Province" required />
            </div>

            <div class="form-group">
                <label for="wife_country" class="birth-label">Country</label>
                <input type="text" id="wife_country" name="wife_country" class="birth-form-control" placeholder="Enter wife's Country" required />
            </div>

            <h3>4b. Citizenship</h3>
            <div class="form-group">
                <label for="wife_citizenship" class="birth-label">Citizenship</label>
                <input type="text" id="wife_citizenship" name="wife_citizenship" class="birth-form-control" placeholder="Enter wife's citizenship" required />
            </div>

            <h3>5. Residence</h3>
            <div class="form-group">
                <label for="wife_residence" class="birth-label">Residence</label>
                <input type="text" id="wife_residence" name="wife_residence" class="birth-form-control" placeholder="Enter (House No., St., Barangay, City/Municipality, Province, Country)" required />
            </div>

            <h3>6. Religion/Religious Sect</h3>
            <div class="form-group">
                <label for="wife_religion" class="birth-label">Religion</label>
                <input type="text" id="wife_religion" name="wife_religion" class="birth-form-control" placeholder="Enter wife's religion" />
            </div>

            <h3>7. Name of Father</h3>
            <div class="form-group">
                <label for="wife_father_first_name" class="birth-label">Father's First Name</label>
                <input type="text" id="wife_father_first_name" name="wife_father_first_name" class="birth-form-control" placeholder="Enter father's first name" required />
            </div>

            <div class="form-group">
                <label for="wife_father_middle_name" class="birth-label">Father's Middle Name</label>
                <input type="text" id="wife_father_middle_name" name="wife_father_middle_name" class="birth-form-control" placeholder="Enter father's middle name" required />
            </div>

            <div class="form-group">
                <label for="wife_father_last_name" class="birth-label">Father's Last Name</label>
                <input type="text" id="wife_father_last_name" name="wife_father_last_name" class="birth-form-control" placeholder="Enter father's last name" required />
            </div>

            <h3>8. Father's Citizenship</h3>
            <div class="form-group">
                <label for="wife_father_citizenship" class="birth-label">Citizenship</label>
                <input type="text" id="wife_father_citizenship" name="wife_father_citizenship" class="birth-form-control" placeholder="Enter wife's father's citizenship" required />
            </div>

            <h3>9. Name of Mother (Maiden Name)</h3>
            <div class="form-group">
                <label for="wife_mother_first_name" class="birth-label">Mother's First Name</label>
                <input type="text" id="wife_mother_first_name" name="wife_mother_first_name" class="birth-form-control" placeholder="Enter mother's first name" required />
            </div>

            <div class="form-group">
                <label for="wife_mother_middle_name" class="birth-label">Mother's Middle Name</label>
                <input type="text" id="wife_mother_middle_name" name="wife_mother_middle_name" class="birth-form-control" placeholder="Enter mother's middle name" required />
            </div>

            <div class="form-group">
                <label for="wife_mother_maiden_last_name" class="birth-label">Mother's Maiden Last Name</label>
                <input type="text" id="wife_mother_maiden_last_name" name="wife_mother_maiden_last_name" class="birth-form-control" placeholder="Enter mother's maiden last name" required />
            </div>

            <h3>10. Wife's Mother's Citizenship</h3>
            <div class="form-group">
                <label for="wife_mother_citizenship" class="birth-label">Citizenship</label>
                <input type="text" id="wife_mother_citizenship" name="wife_mother_citizenship" class="birth-form-control" placeholder="Enter wife's mother's citizenship" required />
            </div>

            </div>  
            <!-- Marriage Details -->
            <div class="col-md-12">
                <h4>III. MARRIAGE DETAILS</h4>

                <div class="form-group">
                    <label for="marriage_date1" class="birth-label">11. Date of Marriage</label>
                    <input type="date" id="marriage_date1" name="marriage_date" class="birth-form-control" required />
                </div>

                <div class="form-group">
                    <label for="marriage_place" class="birth-label">12. Place of Marriage</label>
                    <input type="text" id="marriage_place" name="marriage_place" class="birth-form-control" placeholder="Enter place of marriage" required />
                </div>

                <div class="form-group">
                    <label for="officiant_name" class="birth-label">13. Name of Officiant</label>
                    <input type="text" id="officiant_name" name="officiant_name" class="birth-form-control" placeholder="Enter officiant's name" required />
                </div>

                <div class="form-group">
                    <label for="officiant_position" class="birth-label">14. Position of Officiant</label>
                    <input type="text" id="officiant_position" name="officiant_position" class="birth-form-control" placeholder="Enter officiant's position" required />
                </div>

                <div class="form-group">
                    <label for="witnesses" class="birth-label">15. Witnesses</label>
                    <textarea id="witnesses" name="witnesses" class="birth-form-control" placeholder="Enter names of witnesses" required></textarea>
                </div>
            </div>

<br>

            <!-- Submit Section -->
            <div class="col-md-12 mt-3">
                <button type="button" class="btn btn-danger" onclick="window.history.back()">Back</button>            
 <button type="submit" data-bs-toggle="modal" class="btn btn-success" data-bs-target="#submitInfoModal">Submit</button>


            </div>
        </div>
    </form>
</div>
<br><br>


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
    // Declare a variable to store the form submission action
    var submitFormAction = null;

    // Handle "Yes, I am Sure" button click in Submit Info Modal
    document.getElementById('confirmSubmit').addEventListener('click', function() {
        // Close the Submit Info Modal
        let submitInfoModal = bootstrap.Modal.getInstance(document.getElementById('submitInfoModal'));
        submitInfoModal.hide();

        // Open the Payment Modal
        let paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
        paymentModal.show();
    });

    // Handle the "Proceed to Pay" button click in Payment Modal
    document.getElementById('proceedToPay').addEventListener('click', function() {
        // Close the Payment Modal
        let paymentModal = bootstrap.Modal.getInstance(document.getElementById('paymentModal'));
        paymentModal.hide();

        // If a form action was set, submit the form
        if (submitFormAction) {
            submitFormAction();
        }
    });

    // Function to store the form submission action and trigger it later
    function storeFormAction(formId) {
        submitFormAction = function() {
            // Submit the form with the ID passed to the function
            document.getElementById(formId).submit();
        };
    }

    // Store the form action when needed (e.g., calling this function before showing the modal)
    // Example:
    storeFormAction('executemarriagestore'); // You can change this to the specific form ID you need

</script>


<!--ERROR HANDLING-->
<script>
    // List of IDs to apply the validation
    const letterOnlyFields = [
        // Husband's fields
        "husband_first_name",
        "husband_middle_name",
        "husband_last_name",
        "husband_city-municipality",
        "husband_province",
        "husband_country",
        "husband_citizenship",
        "husband_religion",
        "husband_father_first_name",
        "husband_father_middle_name",
        "husband_father_last_name",
        "husband_father_citizenship",
        "husband_mother_first_name",
        "husband_mother_middle_name",
        "husband_mother_maiden_last_name",
        "husband_mother_citizenship",
        // Wife's fields
        "wife_first_name",
        "wife_middle_name",
        "wife_last_name",
        "wife_city-municipality",
        "wife_province",
        "wife_country",
        "wife_citizenship",
        "wife_religion",
        "wife_father_first_name",
        "wife_father_middle_name",
        "wife_father_last_name",
        "wife_father_citizenship",
        "wife_mother_first_name",
        "wife_mother_middle_name",
        "wife_mother_maiden_last_name",
        "wife_mother_citizenship",
        "marriage_place", "officiant_name", "officiant_position", "witnesses",
        "affiant_name", "civil_status", "address", "marriage_registration_for", "solemnizing_officer", "ceremony_type", "citizenship","spouse_citizenship", "month2", "subscribed_month", "admin_officer_position", "admin_officer_name"
    ];

    // Function to validate input
    function allowOnlyLetters(event) {
        const regex = /^[a-zA-Z\s]*$/; // Allow letters and spaces
        const value = event.target.value;

        if (!regex.test(value)) {
            // Remove invalid characters
            event.target.value = value.replace(/[^a-zA-Z\s]/g, '');
        }
    }

    // Attach event listeners to each field
    letterOnlyFields.forEach(id => {
        const field = document.getElementById(id);
        if (field) {
            field.addEventListener('input', allowOnlyLetters);
        }
    });
</script>

<script>
    // List of IDs to apply the validation for numbers only
    const numberOnlyFields = [
        "husband_age",
        "wife_age",
        "year2", "subscribed_year",
        "day2", "subscribed_day"
    ];

    // Function to validate input for numbers only
    function allowOnlyNumbers(event) {
        const regex = /^[0-9]*$/; // Allow digits only
        const value = event.target.value;

        if (!regex.test(value)) {
            // Remove invalid characters
            event.target.value = value.replace(/[^0-9]/g, '');
        }
    }

    // Attach event listeners to each field
    numberOnlyFields.forEach(id => {
        const field = document.getElementById(id);
        if (field) {
            field.addEventListener('input', allowOnlyNumbers);
        }
    });
</script>

<script>
    // List of IDs for the date fields
    const dateFields = [
        "husband_birthdate",
        "wife_birthdate"
    ];

    // Function to set the maximum date
    function setMaxDateForBirthdate() {
        // Get today's date in YYYY-MM-DD format
        const today = new Date();
        const formattedToday = today.toISOString().split('T')[0];

        // Set the max attribute for each date input field
        dateFields.forEach(id => {
            const field = document.getElementById(id);
            if (field) {
                field.setAttribute('max', formattedToday);
            }
        });
    }

    // Call the function on page load
    window.addEventListener('DOMContentLoaded', setMaxDateForBirthdate);
</script>



@endsection
