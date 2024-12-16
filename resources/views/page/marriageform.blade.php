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
                <input type="text" id="husband_residence" name="husband_residence" class="birth-form-control" placeholder="Enter (House No., St., Barangay, City/Municipality, Province, Country)" />
            </div>

            <h3>6. Religion/Religious Sect</h3>
            <div class="form-group">
                <label for="husband_religion" class="birth-label">Religion</label>
                <input type="text" id="husband_religion" name="husband_religion" class="birth-form-control" placeholder="Enter husband's religion" />
            </div>

            <h3>8. Name of Father</h3>
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

            <h3>9. Father's Citizenship</h3>
            <div class="form-group">
                <label for="husband_father_citizenship" class="birth-label">Citizenship</label>
                <input type="text" id="husband_father_citizenship" name="husband_father_citizenship" class="birth-form-control" placeholder="Enter husband's father's citizenship" required />
            </div>

            <h3>10. Name of Mother (Maiden Name)</h3>
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

            <h3>11. Husband's Mother's Citizenship</h3>
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
                <input type="text" id="wife_residence" name="wife_residence" class="birth-form-control" placeholder="Enter (House No., St., Barangay, City/Municipality, Province, Country)" />
            </div>

            <h3>6. Religion/Religious Sect</h3>
            <div class="form-group">
                <label for="wife_religion" class="birth-label">Religion</label>
                <input type="text" id="wife_religion" name="wife_religion" class="birth-form-control" placeholder="Enter wife's religion" />
            </div>

            <h3>8. Name of Father</h3>
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

            <h3>9. Father's Citizenship</h3>
            <div class="form-group">
                <label for="wife_father_citizenship" class="birth-label">Citizenship</label>
                <input type="text" id="wife_father_citizenship" name="wife_father_citizenship" class="birth-form-control" placeholder="Enter wife's father's citizenship" required />
            </div>

            <h3>10. Name of Mother (Maiden Name)</h3>
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

            <h3>11. Wife's Mother's Citizenship</h3>
            <div class="form-group">
                <label for="wife_mother_citizenship" class="birth-label">Citizenship</label>
                <input type="text" id="wife_mother_citizenship" name="wife_mother_citizenship" class="birth-form-control" placeholder="Enter wife's mother's citizenship" required />
            </div>

            </div>  
            <!-- Marriage Details -->
            <div class="col-md-12">
                <h4>III. MARRIAGE DETAILS</h4>

                <div class="form-group">
                    <label for="marriage_date1" class="birth-label">15. Date of Marriage</label>
                    <input type="date" id="marriage_date1" name="marriage_date" class="birth-form-control" required />
                </div>

                <div class="form-group">
                    <label for="marriage_place" class="birth-label">16. Place of Marriage</label>
                    <input type="text" id="marriage_place" name="marriage_place" class="birth-form-control" placeholder="Enter place of marriage" required />
                </div>

                <div class="form-group">
                    <label for="officiant_name" class="birth-label">17. Name of Officiant</label>
                    <input type="text" id="officiant_name" name="officiant_name" class="birth-form-control" placeholder="Enter officiant's name" required />
                </div>

                <div class="form-group">
                    <label for="officiant_position" class="birth-label">18. Position of Officiant</label>
                    <input type="text" id="officiant_position" name="officiant_position" class="birth-form-control" placeholder="Enter officiant's position" required />
                </div>

                <div class="form-group">
                    <label for="witnesses" class="birth-label">19. Witnesses</label>
                    <textarea id="witnesses" name="witnesses" class="birth-form-control" placeholder="Enter names of witnesses" required></textarea>
                </div>
            </div>

<br>
<div class="marriage-certificate">

<!-- Affidavit for Delayed Registration of Marriage -->
<div class="affidavit-section">
    <br>
    <h4 class="text-center">AFFIDAVIT FOR DELAYED REGISTRATION OF MARRIAGE</h4>
    <br>

    <p>
        I, <input type="text" name="affiant_name" style="width: 300px;" placeholder="Name" required>, of legal age, 
        <select name="civil_status" required>
            <option value="" disabled selected>Select Status</option>
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="divorced">Divorced</option>
            <option value="widowed">Widowed</option>
        </select>, with residence and postal address 
        <input type="text" name="address" style="width: 500px;" placeholder="Address" required>,
    </p>
    <p>
        after having duly sworn in accordance with the law, do hereby depose and say:
    </p>
    <ol>
        <li>
            That I am the applicant for the delayed registration of 
            <input type="text" name="marriage_registration_for" style="width: 300px;" placeholder="Marriage Registration" required> 
            with my marriage with <input type="text" name="spouse_name" style="width: 300px;" placeholder="Spouse Name" required> 
            on <input type="date" name="marriage_date2" style="width: 200px;" required>.
        </li>
        <li>
            That said marriage was solemnized by <input type="text" name="solemnizing_officer" style="width: 300px;" placeholder="Officer Name" required> under
            <select name="ceremony_type" required>
                <option value="" disabled selected>Select Ceremony</option>
                <option value="religious">Religious Ceremony</option>
                <option value="civil">Civil Ceremony</option>
                <option value="muslim">Muslim Rites</option>
                <option value="tribal">Tribal Rites</option>
            </select>.
        </li>
        <li>
            That the marriage was solemnized:
            <label><input type="radio" name="license_required" value="with_license" required> with Marriage License No.</label>
            <input type="text" name="license_no" style="width: 200px;" placeholder="License No."> issued on 
            <input type="date" name="license_date" style="width: 200px;"> at 
            <input type="text" name="license_place" style="width: 300px;" placeholder="Place of Issuance">
            <br>
            <label><input type="radio" name="license_required2" value="exceptional_case"> under Article 
            <input type="text" name="article_no" style="width: 200px;" placeholder="Article No."></label>.
        </li>
        <li>
            That I am a citizen of <input type="text" name="citizenship" style="width: 300px;" placeholder="Citizenship" required>, 
            and my spouse is a citizen of 
            <input type="text" name="spouse_citizenship" style="width: 300px;" placeholder="Spouse Citizenship" required>.
        </li>
        <li>
            That the reason for the delay in registering the marriage is 
            <textarea name="delay_reason" style="width: 100%; height: 80px;" placeholder="Reason for delay" required></textarea>.
        </li>
        <li>
            That I am executing this affidavit to attest to the truthfulness of the foregoing statements for all legal intents and purposes.
        </li>
    </ol>
    <p>
        In truth whereof, I have affixed my signature below this 
        <input type="text" name="day2" style="width: 50px;" placeholder="Day" required> day of 
        <input type="text" name="month2" style="width: 150px;" placeholder="Month" required>, 
        <input type="text" name="year2" style="width: 100px;" placeholder="Year" required>, 
        at <input type="text" name="location" style="width: 300px;" placeholder="Location" required>.
    </p>
    
    <p>
        SUBSCRIBED AND SWORN to before me this <input type="text" name="subscribed_day" style="width: 50px;" placeholder="Day" required> day of 
        <input type="text" name="subscribed_month" style="width: 150px;" placeholder="Month" required>, 
        <input type="text" name="subscribed_year" style="width: 100px;" placeholder="Year" required>, at 
        <input type="text" name="notary_location" style="width: 300px;" placeholder="Location" required>, Philippines, 
        affiant who exhibited to me his Community Tax Certificate.
    </p>
   
    <p>
        <label>Position/Title/Designation:</label>
        <input type="text" name="admin_officer_position" style="width: 300px;" placeholder="Position/Title" required>
    </p>
    <p>
        <label>Name in Print:</label>
        <input type="text" name="admin_officer_name" style="width: 300px;" placeholder="Name in Print" required>
    </p>
    <p>
        <label>Address:</label>
        <input type="text" name="admin_officer_address" style="width: 500px;" placeholder="Address" required>
    </p>
</div>

</div>
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

@endsection
