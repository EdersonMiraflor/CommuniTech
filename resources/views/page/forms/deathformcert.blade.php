@extends('layouts.layout')

@section('contents')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<div class="container birth-form-page" style="padding: 20px; margin-top: 50px; margin-bottom: 50px; position: relative; text-align: center;">
    <!-- Background Image -->
    <div class="background-image-container" style="position: relative; overflow: hidden;">
    <img src="{{ asset('img/Certificate-of-Death/page-0.jpg') }}" alt="Certificate of Death" style="width: 100%; height: auto; opacity: 0.8;">
    <img src="{{ asset('img/Certificate-of-Death/page-1.jpg') }}" alt="Certificate of Death" style="width: 100%; height: auto; opacity: 0.8;">
        
        <form action="/home/services/deathform/deathformcert" method="POST" id="deathformcert">
            @csrf
            <div class="form-group">
                <label for="full_name" class="birth-label">1. full_name</label>
                <input type="text" name="full_name" class="birth-form-control" id="full_name" value="{{ old('full_name', $RequestData3->full_name ?? '') }}" required>
            </div>
            <div class="form-group">
                <label for="sex" class="birth-label">2. sex</label>
                <input type="text" name="sex" class="birth-form-control" id="sex" value="{{ old('sex', $RequestData3->sex ?? '') }}" required>
            </div>
            <div class="form-group">
                <label for="date_of_death" class="birth-label">3. date_of_death</label>
                <input type="text" name="date_of_death" class="birth-form-control" id="full_name" value="{{ old('date_of_death', $RequestData3->date_of_death ?? '') }}" required>
            </div>
            <div class="form-group">
                <label for="date_of_birth" class="birth-label">4. full_name</label>
                <input type="text" name="date_of_birth" class="birth-form-control" id="date_of_birth" value="{{ old('date_of_birth', $RequestData3->date_of_birth ?? '') }}" required>
            </div>
            <div class="form-group">
                <label for="completed_years" class="birth-label">5. completed_years</label>
                <input type="text" name="completed_years" class="birth-form-control" id="completed_years" value="{{ old('completed_years', $RequestData3->completed_years ?? '') }}" required>
            </div>
            <div class="form-group">
                <label for="months_days" class="birth-label">6. months_days</label>
                <input type="text" name="months_days" class="birth-form-control" id="months_days" value="{{ old('months_days', $RequestData3->months_days ?? '') }}" required>
            </div>
            <div class="form-group">
                <label for="hours_minutes_seconds" class="birth-label">7. hours_minutes_seconds</label>
                <input type="text" name="hours_minutes_seconds" class="birth-form-control" id="hours_minutes_seconds" value="{{ old('hours_minutes_seconds', $RequestData3->hours_minutes_seconds ?? '') }}" required>
            </div>
            <div class="form-group">
                <label for="place_of_death" class="birth-label">8. Place of Death</label>
                <input type="text" name="place_of_death" class="birth-form-control" id="place_of_death" value="{{ old('place_of_death', $RequestData3->place_of_death ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="civil_status" class="birth-label">9. Civil Status</label>
                <input type="text" name="civil_status" class="birth-form-control" id="civil_status" value="{{ old('civil_status', $RequestData3->civil_status ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="religion" class="birth-label">10. Religion</label>
                <input type="text" name="religion" class="birth-form-control" id="religion" value="{{ old('religion', $RequestData3->religion ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="citizenship" class="birth-label">11. Citizenship</label>
                <input type="text" name="citizenship" class="birth-form-control" id="citizenship" value="{{ old('citizenship', $RequestData3->citizenship ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="residence" class="birth-label">12. Residence</label>
                <input type="text" name="residence" class="birth-form-control" id="residence" value="{{ old('residence', $RequestData3->residence ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="father_name" class="birth-label">13. Father Name</label>
                <input type="text" name="father_name" class="birth-form-control" id="father_name" value="{{ old('father_name', $RequestData3->father_name ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="mother_maiden_name" class="birth-label">14. Mother Maiden Name</label>
                <input type="text" name="mother_maiden_name" class="birth-form-control" id="mother_maiden_name" value="{{ old('mother_maiden_name', $RequestData3->mother_maiden_name ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="immediate_cause" class="birth-label">15. Immediate Cause</label>
                <input type="text" name="immediate_cause" class="birth-form-control" id="immediate_cause" value="{{ old('immediate_cause', $RequestData3->immediate_cause ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="antecedent_cause" class="birth-label">16. Antecedent Cause</label>
                <input type="text" name="antecedent_cause" class="birth-form-control" id="antecedent_cause" value="{{ old('antecedent_cause', $RequestData3->antecedent_cause ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="underlying_cause" class="birth-label">17. Underlying Cause</label>
                <input type="text" name="underlying_cause" class="birth-form-control" id="underlying_cause" value="{{ old('underlying_cause', $RequestData3->underlying_cause ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="other_conditions" class="birth-label">18. Other Conditions</label>
                <input type="text" name="other_conditions" class="birth-form-control" id="other_conditions" value="{{ old('other_conditions', $RequestData3->other_conditions ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="maternal_condition" class="birth-label">19. Maternal Condition</label>
                <input type="text" name="maternal_condition" class="birth-form-control" id="maternal_condition" value="{{ old('maternal_condition', $RequestData3->maternal_condition ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="manner_of_death" class="birth-label">20. Manner of Death</label>
                <input type="text" name="manner_of_death" class="birth-form-control" id="manner_of_death" value="{{ old('manner_of_death', $RequestData3->manner_of_death ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="place_of_occurrence" class="birth-label">21. Place of Occurrence</label>
                <input type="text" name="place_of_occurrence" class="birth-form-control" id="place_of_occurrence" value="{{ old('place_of_occurrence', $RequestData3->place_of_occurrence ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="autopsy" class="birth-label">22. Autopsy</label>
                <input type="text" name="autopsy" class="birth-form-control" id="autopsy" value="{{ old('autopsy', $RequestData3->autopsy ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="type_of_attendant" class="birth-label">23. Type of Attendant</label>
                <input type="text" name="type_of_attendant" class="birth-form-control" id="type_of_attendant" value="{{ old('type_of_attendant', $RequestData3->type_of_attendant ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="attendance_duration" class="birth-label">24. Attendance Duration</label>
                <input type="text" name="attendance_duration" class="birth-form-control" id="attendance_duration" value="{{ old('attendance_duration', $RequestData3->attendance_duration ?? '') }}" required>
            </div>
            <div class="form-group">
                <label for="certifying_officer" class="birth-label">27. Certifying Officer</label>
                <input type="text" name="certifying_officer" class="birth-form-control" id="certifying_officer" value="{{ old('certifying_officer', $RequestData3->certifying_officer ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="certification_date" class="birth-label">28. Certification Date</label>
                <input type="date" name="certification_date" class="birth-form-control" id="certification_date" value="{{ old('certification_date', $RequestData3->certification_date ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="corpse_disposal_method" class="birth-label">29. Corpse Disposal Method</label>
                <input type="text" name="corpse_disposal_method" class="birth-form-control" id="corpse_disposal_method" value="{{ old('corpse_disposal_method', $RequestData3->corpse_disposal_method ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="other_disposal_method_specify" class="birth-label">30. Other Disposal Method (Specify)</label>
                <input type="text" name="other_disposal_method_specify" class="birth-form-control" id="other_disposal_method_specify" value="{{ old('other_disposal_method_specify', $RequestData3->other_disposal_method_specify ?? '') }}">
            </div>

            <div class="form-group">
                <label for="cemetery_or_crematory_name" class="birth-label">31. Cemetery or Crematory Name</label>
                <input type="text" name="cemetery_or_crematory_name" class="birth-form-control" id="cemetery_or_crematory_name" value="{{ old('cemetery_or_crematory_name', $RequestData3->cemetery_or_crematory_name ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="cemetery_or_crematory_address" class="birth-label">32. Cemetery or Crematory Address</label>
                <input type="text" name="cemetery_or_crematory_address" class="birth-form-control" id="cemetery_or_crematory_address" value="{{ old('cemetery_or_crematory_address', $RequestData3->cemetery_or_crematory_address ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="age_of_mother" class="birth-label">33. Age of Mother</label>
                <input type="number" name="age_of_mother" class="birth-form-control" id="age_of_mother" value="{{ old('age_of_mother', $RequestData3->age_of_mother ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="method_of_delivery" class="birth-label">34. Method of Delivery</label>
                <input type="text" name="method_of_delivery" class="birth-form-control" id="method_of_delivery" value="{{ old('method_of_delivery', $RequestData3->method_of_delivery ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="length_of_pregnancy" class="birth-label">35. Length of Pregnancy</label>
                <input type="text" name="length_of_pregnancy" class="birth-form-control" id="length_of_pregnancy" value="{{ old('length_of_pregnancy', $RequestData3->length_of_pregnancy ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="type_of_birth" class="birth-label">36. Type of Birth</label>
                <input type="text" name="type_of_birth" class="birth-form-control" id="type_of_birth" value="{{ old('type_of_birth', $RequestData3->type_of_birth ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="multiple_birth_position" class="birth-label">37. Multiple Birth Position</label>
                <input type="text" name="multiple_birth_position" class="birth-form-control" id="multiple_birth_position" value="{{ old('multiple_birth_position', $RequestData3->multiple_birth_position ?? '') }}">
            </div>

            <div class="form-group">
                <label for="affiant_name" class="birth-label">38. Affiant Name</label>
                <input type="text" name="affiant_name" class="birth-form-control" id="affiant_name" value="{{ old('affiant_name', $RequestData3->affiant_name ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="legal_status" class="birth-label">39. Legal Status</label>
                <input type="text" name="legal_status" class="birth-form-control" id="legal_status" value="{{ old('legal_status', $RequestData3->legal_status ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="affiant_address" class="birth-label">40. Affiant Address</label>
                <input type="text" name="affiant_address" class="birth-form-control" id="affiant_address" value="{{ old('affiant_address', $RequestData3->affiant_address ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="deceased_name" class="birth-label">41. Deceased Name</label>
                <input type="text" name="deceased_name" class="birth-form-control" id="deceased_name" value="{{ old('deceased_name', $RequestData3->deceased_name ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="burial_place" class="birth-label">42. Burial Place</label>
                <input type="text" name="burial_place" class="birth-form-control" id="burial_place" value="{{ old('burial_place', $RequestData3->burial_place ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="attended_by" class="birth-label">43. Attended By</label>
                <input type="text" name="attended_by" class="birth-form-control" id="attended_by" value="{{ old('attended_by', $RequestData3->attended_by ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="attended_by_person" class="birth-label">44. Attended By Person</label>
                <input type="text" name="attended_by_person" class="birth-form-control" id="attended_by_person" value="{{ old('attended_by_person', $RequestData3->attended_by_person ?? '') }}">
            </div>

            <div class="form-group">
                <label for="cause_of_death" class="birth-label">45. Cause of Death</label>
                <input type="text" name="cause_of_death" class="birth-form-control" id="cause_of_death" value="{{ old('cause_of_death', $RequestData3->cause_of_death ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="reason_delay" class="birth-label">46. Reason for Delay</label>
                <input type="text" name="reason_delay" class="birth-form-control" id="reason_delay" value="{{ old('reason_delay', $RequestData3->reason_delay ?? '') }}">
            </div>

            <div class="form-group">
                <label for="day_signed" class="birth-label">47. Day Signed</label>
                <input type="text" name="day_signed" class="birth-form-control" id="day_signed" value="{{ old('day_signed', $RequestData3->day_signed ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="month_signed" class="birth-label">48. Month Signed</label>
                <input type="text" name="month_signed" class="birth-form-control" id="month_signed" value="{{ old('month_signed', $RequestData3->month_signed ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="year_signed" class="birth-label">49. Year Signed</label>
                <input type="text" name="year_signed" class="birth-form-control" id="year_signed" value="{{ old('year_signed', $RequestData3->year_signed ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="place_signed" class="birth-label">60. Place Signed</label>
                <input type="text" name="place_signed" class="birth-form-control" id="place_signed" value="{{ old('place_signed', $RequestData3->place_signed ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="day_sworn" class="birth-label">61. Day Sworn</label>
                <input type="text" name="day_sworn" class="birth-form-control" id="day_sworn" value="{{ old('day_sworn', $RequestData3->day_sworn ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="month_sworn" class="birth-label">62. Month Sworn</label>
                <input type="text" name="month_sworn" class="birth-form-control" id="month_sworn" value="{{ old('month_sworn', $RequestData3->month_sworn ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="year_sworn" class="birth-label">63. Year Sworn</label>
                <input type="text" name="year_sworn" class="birth-form-control" id="year_sworn" value="{{ old('year_sworn', $RequestData3->year_sworn ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="place_sworn" class="birth-label">64. Place Sworn</label>
                <input type="text" name="place_sworn" class="birth-form-control" id="place_sworn" value="{{ old('place_sworn', $RequestData3->place_sworn ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="tax_cert_date" class="birth-label">65. Tax Cert Date</label><br>
                <input type="text" name="tax_cert_date" class="bth-form-control" id="tax_cert_date" value="{{ old('tax_cert_date', $RequestData3->tax_cert_date ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="tax_cert_place" class="birth-label">66. Tax Cert Place</label>
                <input type="text" name="tax_cert_place" class="birth-form-control" id="tax_cert_place" value="{{ old('tax_cert_place', $RequestData3->tax_cert_place ?? '') }}" required>
            </div>

                <!-- Submit Button -->
                <div class="col-md-12 mt-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
