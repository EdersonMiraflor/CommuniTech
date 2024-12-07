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
                    <label for="marriage_date" class="birth-label">15. Date of Marriage</label>
                    <input type="date" id="marriage_date" name="marriage_date" class="birth-form-control" required />
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
    <h4 class="text-center">MARRIAGE CERTIFICATE FORM</h4>

    <!-- Place of Marriage -->
    <p>
        <label for="place_of_marriage">20. Place of Marriage:</label>
        <input type="text" id="place_of_marriage" name="place_of_marriage" style="width: 500px;" placeholder="Office/Barangay/Church/Mosque" required>
        <input type="text" id="city" name="city" style="width: 200px;" placeholder="City/Municipality" required>
        <input type="text" id="province" name="province" style="width: 200px;" placeholder="Province" required>
    </p>

    <!-- Date of Marriage -->
    <p>
        <label for="date_of_marriage">21. Date of Marriage:</label>
        <input type="number" id="day" name="day" style="width: 50px;" placeholder="Day" required>
        <input type="text" id="month" name="month" style="width: 100px;" placeholder="Month" required>
        <input type="number" id="year" name="year" style="width: 80px;" placeholder="Year" required>
    </p>

    <!-- Time of Marriage -->
    <p>
        <label for="time_of_marriage">22. Time of Marriage:</label>
        <input type="text" id="time_of_marriage" name="time_of_marriage" style="width: 200px;" placeholder="Time (am/pm)" required>
    </p>

    <!-- Certification of Contracting Parties -->
    <h5>23. CERTIFICATION OF THE CONTRACTING PARTIES:</h5>
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
                <button type="submit" class="btn btn-success">Next</button>
            </div>
        </div>
    </form>
</div>
<br><br>
@endsection
