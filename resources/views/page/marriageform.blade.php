@extends('layouts.layout')

@section('contents')
<br><br>
<div class="birth-container"> 
    <h2 class="text-center birth-heading">
        <img src="{{ asset('/img/manito-logo.png') }}" alt="Manito Logo" class="birth-logo"> CERTIFICATE OF MARRIAGE
    </h2>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <form action="/home/services/marriageform/marriageformcert" method="POST">
        @csrf
        <div class="row">

            
            <!-- Groom's Information -->
            <div class="col-md-12">

            <div class="form-group">
                    <label for="province" class="birth-label">Province</label>
                    <input type="text" id="province" name="province" class="birth-form-control" placeholder="" required />
            </div>

            <div class="form-group">
                    <label for="city-municipality" class="birth-label">City/Municipality</label>
                    <input type="text" id="city-municipality" name="city-municipality" class="birth-form-control" placeholder="" required />
            </div>

            <div class="form-group">
                    <label for="registry-no" class="birth-label">Registry No.</label>
                    <input type="text" id="registry-no" name="registry-no" class="birth-form-control" placeholder="" required />
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

            <h3>4a. Sex</h3>
            <div class="form-group">
                <label for="husband_sex" class="birth-label">Sex</label>
                <input type="text" id="husband_sex" name="husband_sex" class="birth-form-control" placeholder="Enter husband's Age" required />
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

            <h3>7. Civil Status</h3>
            <div class="form-group">
                <label for="husband_civil-status" class="birth-label">Civil Status</label>
                <input type="text" id="husband_civil-status" name="husband_civil-status" class="birth-form-control" placeholder="Enter husband's civil status" />
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

            <h3>12. Name of Person/ Wali Who gave Consent or Advice</h3>
            <div class="form-group">
                <label for="person_first_name" class="birth-label">First Name</label>
                <input type="text" id="person_first_name" name="person_first_name" class="birth-form-control" placeholder="Enter first name" required />
            </div>
            <div class="form-group">
                <label for="person_middle_name" class="birth-label">Middle Name</label>
                <input type="text" id="person_middle_name" name="person_middle_name" class="birth-form-control" placeholder="Enter middle name" />
            </div>
            <div class="form-group">
                <label for="person_last_name" class="birth-label">Last Name</label>
                <input type="text" id="person_last_name" name="person_last_name" class="birth-form-control" placeholder="Enter last name" required />
            </div>

            <h3>13. Person's Relationship</h3>
            <div class="form-group">
                <label for="person_relationship" class="birth-label">Relationship</label>
                <input type="text" id="person_relationship" name="person_relationship" class="birth-form-control" placeholder="Enter person's relationship" required />
            </div>

            <h3>14. Person's Residence</h3>
            <div class="form-group">
                <label for="person_residence" class="birth-label">Residence</label>
                <input type="text" id="person_residence" name="person_residence" class="birth-form-control" placeholder="Enter (House No., St., Barangay, City/Municipality, Province, Country)" />
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

            <h3>4a. Sex</h3>
            <div class="form-group">
                <label for="wife_sex" class="birth-label">Sex</label>
                <input type="text" id="wife_sex" name="wife_sex" class="birth-form-control" placeholder="Enter wife's sex" required />
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

            <h3>7. Civil Status</h3>
            <div class="form-group">
                <label for="wife_civil-status" class="birth-label">Civil Status</label>
                <input type="text" id="wife_civil-status" name="wife_civil-status" class="birth-form-control" placeholder="Enter wife's civil status" />
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

            <h3>12. Name of Person/ Wali Who gave Consent or Advice</h3>
            <div class="form-group">
                <label for="person_first_name" class="birth-label">First Name</label>
                <input type="text" id="person_first_name" name="person_first_name" class="birth-form-control" placeholder="Enter first name" required />
            </div>
            <div class="form-group">
                <label for="person_middle_name" class="birth-label">Middle Name</label>
                <input type="text" id="person_middle_name" name="person_middle_name" class="birth-form-control" placeholder="Enter middle name" />
            </div>
            <div class="form-group">
                <label for="person_last_name" class="birth-label">Last Name</label>
                <input type="text" id="person_last_name" name="person_last_name" class="birth-form-control" placeholder="Enter last name" required />
            </div>

            <h3>13. Person's Relationship</h3>
            <div class="form-group">
                <label for="person_relationship" class="birth-label">Relationship</label>
                <input type="text" id="person_relationship" name="person_relationship" class="birth-form-control" placeholder="Enter person's relationship" required />
            </div>

            <h3>14. Person's Residence</h3>
            <div class="form-group">
                <label for="person_residence" class="birth-label">Residence</label>
                <input type="text" id="person_residence" name="person_residence" class="birth-form-control" placeholder="Enter (House No., St., Barangay, City/Municipality, Province, Country)" />
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

<br>
<div class="marriage-certificate">
    <h4 class="text-center">MARRIAGE CERTIFICATE FORM</h4>

    <!-- Place of Marriage -->
    <p>
        <label for="place_of_marriage">15. Place of Marriage:</label>
        <input type="text" id="place_of_marriage" name="place_of_marriage" style="width: 500px;" placeholder="Office/Barangay/Church/Mosque" required>
        <input type="text" id="city" name="city" style="width: 200px;" placeholder="City/Municipality" required>
        <input type="text" id="province" name="province" style="width: 200px;" placeholder="Province" required>
    </p>

    <!-- Date of Marriage -->
    <p>
        <label for="date_of_marriage">16. Date of Marriage:</label>
        <input type="number" id="day" name="day" style="width: 50px;" placeholder="Day" required>
        <input type="text" id="month" name="month" style="width: 100px;" placeholder="Month" required>
        <input type="number" id="year" name="year" style="width: 80px;" placeholder="Year" required>
    </p>

    <!-- Time of Marriage -->
    <p>
        <label for="time_of_marriage">17. Time of Marriage:</label>
        <input type="text" id="time_of_marriage" name="time_of_marriage" style="width: 200px;" placeholder="Time (am/pm)" required>
    </p>

    <!-- Certification of Contracting Parties -->
    <h5>18. CERTIFICATION OF THE CONTRACTING PARTIES:</h5>
    <p>
        I, <input type="text" name="husband_name" style="width: 200px;" placeholder="Husband's Name" required>, and I, 
        <input type="text" name="wife_name" style="width: 200px;" placeholder="Wife's Name" required>, both of legal age, 
        of our own free will and accord, take each other as husband and wife and certify further that we:
        <br>
        <label><input type="radio" name="marriage_settlement" value="entered" required> have entered into a marriage settlement</label>
        <label><input type="radio" name="marriage_settlement" value="not_entered"> have not entered into a marriage settlement</label>.
    </p>
    <p>
        IN WITNESS WHEREOF, we have signed/marked with our fingerprints this certificate in quadruplicate this 
        <input type="number" name="witness_day" style="width: 50px;" placeholder="Day" required> day of 
        <input type="text" name="witness_month" style="width: 100px;" placeholder="Month" required>, 
        <input type="number" name="witness_year" style="width: 80px;" placeholder="Year" required>.
    </p>
    <p>
        <label>Signature of Husband:</label>
        <input type="text" name="husband_signature" style="width: 300px;" placeholder="Husband's Signature" required>
    </p>
    <p>
        <label>Signature of Wife:</label>
        <input type="text" name="wife_signature" style="width: 300px;" placeholder="Wife's Signature" required>
    </p>

    <!-- Certification of the Solemnizing Officer -->
    <h5>19. CERTIFICATION OF THE SOLEMNIZING OFFICER:</h5>
    <p>
        THIS IS TO CERTIFY: That before me, on the date and place above-written, personally appeared the above-mentioned parties,
        with their mutual consent, lawfully joined together in marriage which was solemnized by me in the presence of the witnesses named below.
    </p>
    <p>
        I CERTIFY FURTHER THAT:
        <br>
        <label><input type="radio" name="marriage_license" value="license_provided" required> Marriage License No. 
            <input type="text" name="license_number" style="width: 200px;" placeholder="License Number"> issued on 
            <input type="date" name="license_date" style="width: 180px;" placeholder="Date Issued"> at 
            <input type="text" name="license_place" style="width: 300px;" placeholder="Place of Issuance"></label>
        <br>
        <label><input type="radio" name="marriage_license" value="no_license_needed"> No marriage license was necessary, the marriage being solemnized under Article...</label>
        <br>
        <label><input type="radio" name="marriage_license" value="presidential_decree"> The marriage was solemnized in accordance with the provisions of Presidential Decree No. 1083</label>.
    </p>
    <p>
        <label>Signature of Solemnizing Officer:</label>
        <input type="text" name="officer_signature" style="width: 300px;" placeholder="Officer's Signature" required>
    </p>
    <p>
        <label>Position/Designation:</label>
        <input type="text" name="officer_position" style="width: 300px;" placeholder="Position/Designation" required>
    </p>
    <p>
        <label>Religion/Religious Sect:</label>
        <input type="text" name="religion" style="width: 300px;" placeholder="Religion" required>
    </p>

    <!-- Witnesses -->
    <h5>20a. WITNESSES:</h5>
    <p>
        Witness 1: <input type="text" name="witness1_name" style="width: 300px;" placeholder="Witness 1 Name" required>, Signature: 
        <input type="text" name="witness1_signature" style="width: 300px;" placeholder="Witness 1 Signature" required>
    </p>
    <p>
        Witness 2: <input type="text" name="witness2_name" style="width: 300px;" placeholder="Witness 2 Name" required>, Signature: 
        <input type="text" name="witness2_signature" style="width: 300px;" placeholder="Witness 2 Signature" required>
    </p>
</div>

<div class="civil-registrar-section">
<br>
    <h4 class="text-center">OFFICIAL REGISTRATION SECTION</h4>
    <br>
    <!-- Section for Received By -->
    <h5>21. RECEIVED BY:</h5>
    <p>
        <label for="received_signature">Signature:</label>
        <input type="text" id="received_signature" name="received_signature" style="width: 300px;" placeholder="Signature" required>
    </p>
    <p>
        <label for="received_name">Name in Print:</label>
        <input type="text" id="received_name" name="received_name" style="width: 300px;" placeholder="Name in Print" required>
    </p>
    <p>
        <label for="received_position">Title or Position:</label>
        <input type="text" id="received_position" name="received_position" style="width: 300px;" placeholder="Title or Position" required>
    </p>
    <p>
        <label for="received_date">Date:</label>
        <input type="date" id="received_date" name="received_date" style="width: 200px;" required>
    </p>

    <!-- Section for Registered by Civil Registrar -->
    <h5>22. REGISTERED BY THE CIVIL REGISTRAR:</h5>
    <p>
        <label for="registered_signature">Signature:</label>
        <input type="text" id="registered_signature" name="registered_signature" style="width: 300px;" placeholder="Signature" required>
    </p>
    <p>
        <label for="registered_name">Name in Print:</label>
        <input type="text" id="registered_name" name="registered_name" style="width: 300px;" placeholder="Name in Print" required>
    </p>
    <p>
        <label for="registered_position">Title or Position:</label>
        <input type="text" id="registered_position" name="registered_position" style="width: 300px;" placeholder="Title or Position" required>
    </p>
    <p>
        <label for="registered_date">Date:</label>
        <input type="date" id="registered_date" name="registered_date" style="width: 200px;" required>
    </p>

    <!-- Remarks/Annotations Section -->
    <h5>REMARKS/ANNOTATIONS (For LCRO/OCRG/Shari’a Circuit Registrar Use Only):</h5>
    <textarea id="remarks_annotations" name="remarks_annotations" style="width: 100%; height: 100px;" placeholder="Remarks/Annotations"></textarea>

    <!-- To be filled at the Civil Registrar -->
    <h5>TO BE FILLED-UP AT THE OFFICE OF THE CIVIL REGISTRAR:</h5>
    <p>
        <input type="text" id="civil_registrar_code_1" name="civil_registrar_code_1" style="width: 50px;" maxlength="1" placeholder="4bH">
        <input type="text" id="civil_registrar_code_2" name="civil_registrar_code_2" style="width: 50px;" maxlength="1" placeholder="4bW">
        <input type="text" id="civil_registrar_code_3" name="civil_registrar_code_3" style="width: 50px;" maxlength="1" placeholder="5H">
        <input type="text" id="civil_registrar_code_4" name="civil_registrar_code_4" style="width: 50px;" maxlength="1" placeholder="5W">
        <input type="text" id="civil_registrar_code_5" name="civil_registrar_code_5" style="width: 50px;" maxlength="1" placeholder="6H">
        <input type="text" id="civil_registrar_code_6" name="civil_registrar_code_6" style="width: 50px;" maxlength="1" placeholder="6W">
        <input type="text" id="civil_registrar_code_7" name="civil_registrar_code_7" style="width: 50px;" maxlength="1" placeholder="7H">
        <input type="text" id="civil_registrar_code_8" name="civil_registrar_code_8" style="width: 50px;" maxlength="1" placeholder="7W">
    </p>

    <!-- Witnesses Section -->
    <h5>20b. WITNESSES (Print Name and Sign):</h5>
    <p>
        <label for="witness1_name">Witness 1 Name:</label>
        <input type="text" id="witness1_name" name="witness1_name" style="width: 300px;" placeholder="Witness 1 Name" required>
        <label for="witness1_signature">Signature:</label>
        <input type="text" id="witness1_signature" name="witness1_signature" style="width: 300px;" placeholder="Witness 1 Signature" required>
    </p>
    <p>
        <label for="witness2_name">Witness 2 Name:</label>
        <input type="text" id="witness2_name" name="witness2_name" style="width: 300px;" placeholder="Witness 2 Name" required>
        <label for="witness2_signature">Signature:</label>
        <input type="text" id="witness2_signature" name="witness2_signature" style="width: 300px;" placeholder="Witness 2 Signature" required>
    </p>
</div>

<div class="affidavit-section">
    <br>
    <h3 class="text-center">AFFIDAVIT OF SOLEMNIZING OFFICER</h3>
<br>
    <p>
        I, <input type="text" name="officer_name" style="width: 200px;" placeholder="Name">,
        of legal age, Solemnizing Officer of 
        <input type="text" name="organization" style="width: 200px;" placeholder="Organization">,
        with address at 
        <input type="text" name="address" style="width: 300px;" placeholder="Address">,
        after having sworn to in accordance with law, do hereby depose and say:
    </p>

    <ol>
        <li>
            That I have solemnized the marriage between 
            <input type="text" name="party_1" style="width: 200px;" placeholder="Party 1"> and 
            <input type="text" name="party_2" style="width: 200px;" placeholder="Party 2">.
        </li>
        <li>
            That:
            <ul>
                <li>
                    <input type="checkbox" name="article_34"> 
                    a. I have ascertained the qualifications of the contracting parties and found no legal impediment for them to marry as required by Article 34 of the Family Code.
                </li>
                <li>
                    <input type="checkbox" name="articulo_mortis"> 
                    b. This marriage was performed in articulo mortis or at the point of death.
                </li>
                <li>
                    <input type="checkbox" name="unable_to_sign"> 
                    c. The contracting party/ies 
                    <input type="text" name="party_incapacitated" style="width: 200px;" placeholder="Party Name"> 
                    was/were at the point of death and physically unable to sign the certificate of marriage. One of the witnesses signed for him/her by writing the party’s name, preceded by the preposition "By".
                </li>
                <li>
                    <input type="checkbox" name="residence_far"> 
                    d. The residence of either party is so located that there is no means of transportation to enable the party/parties to appear personally before the civil registrar.
                </li>
                <li>
                    <input type="checkbox" name="ethnic_customs"> 
                    e. The marriage was among Muslims or members of Ethnic Cultural Communities and solemnized in accordance with their customs and practices.
                </li>
            </ul>
        </li>
        <li>
            That I took the necessary steps to ascertain the ages and relationship of the contracting parties and found no legal impediment for them to marry each other.
        </li>
        <li>
            That I am executing this affidavit to attest to the truthfulness of the foregoing statements for all legal intents and purposes.
        </li>
    </ol>

    <p>
        In truth whereof, I have affixed my signature below this 
        <input type="text" name="day" style="width: 50px;" placeholder="Day"> day of 
        <input type="text" name="month" style="width: 100px;" placeholder="Month">, 
        <input type="text" name="year" style="width: 50px;" placeholder="Year"> at 
        <input type="text" name="location" style="width: 200px;" placeholder="Location">, Philippines.
    </p>

    <p>
        <strong>Signature Over Printed Name of the Solemnizing Officer:</strong><br>
        <input type="text" name="solemnizing_officer_name" style="width: 300px;" placeholder="Name">
    </p>

    <h4>SUBSCRIBED AND SWORN</h4>
    <p>
        Subscribed and sworn to before me this 
        <input type="text" name="sworn_day" style="width: 50px;" placeholder="Day"> day of 
        <input type="text" name="sworn_month" style="width: 100px;" placeholder="Month">, 
        <input type="text" name="sworn_year" style="width: 50px;" placeholder="Year">, at 
        <input type="text" name="sworn_location" style="width: 200px;" placeholder="Location">, Philippines, affiant who exhibited to me his/her Community Tax Certificate issued on 
        <input type="text" name="ctc_date" style="width: 200px;" placeholder="Date"> at 
        <input type="text" name="ctc_location" style="width: 200px;" placeholder="Location">.
    </p>

    <p>
        <strong>Signature of the Administering Officer:</strong><br>
        <input type="text" name="administering_officer_signature" style="width: 300px;" placeholder="Signature">
    </p>
    <p>
        <strong>Position/Title/Designation:</strong><br>
        <input type="text" name="administering_officer_position" style="width: 300px;" placeholder="Position">
    </p>
    <p>
        <strong>Address:</strong><br>
        <input type="text" name="administering_officer_address" style="width: 300px;" placeholder="Address">
    </p>
</div>



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
            on <input type="date" name="marriage_date" style="width: 200px;" required>.
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
            <label><input type="radio" name="license_required" value="exceptional_case"> under Article 
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
        <input type="text" name="day" style="width: 50px;" placeholder="Day" required> day of 
        <input type="text" name="month" style="width: 150px;" placeholder="Month" required>, 
        <input type="text" name="year" style="width: 100px;" placeholder="Year" required>, 
        at <input type="text" name="location" style="width: 300px;" placeholder="Location" required>.
    </p>
    <p>
        <label>Signature Over Printed Name of Affiant:</label>
        <input type="text" name="affiant_signature" style="width: 300px;" placeholder="Affiant Signature" required>
    </p>
    <p>
        SUBSCRIBED AND SWORN to before me this <input type="text" name="subscribed_day" style="width: 50px;" placeholder="Day" required> day of 
        <input type="text" name="subscribed_month" style="width: 150px;" placeholder="Month" required>, 
        <input type="text" name="subscribed_year" style="width: 100px;" placeholder="Year" required>, at 
        <input type="text" name="notary_location" style="width: 300px;" placeholder="Location" required>, Philippines, 
        affiant who exhibited to me his Community Tax Certificate.
    </p>
    <p>
        <label>Signature of Administering Officer:</label>
        <input type="text" name="admin_officer_signature" style="width: 300px;" placeholder="Officer Signature" required>
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
