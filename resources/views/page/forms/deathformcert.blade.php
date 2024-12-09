@extends('layouts.layout')

@section('contents')
<style>
    .deathbg-image{
        position: relative;
        text-align: center;
        color: white;
    }
    .deathfullname{
        position: absolute;
        bottom: 8px;
        left: 200px;
        right: 10px;
        top: 460px
    }
    .deathsex{
        position: absolute;
        bottom: 8px;
        left: 1100px;
        right: 10px;
        top: 460px
    }
    .datedeath{
        position: absolute;
        bottom: 8px;
        left: 200px;
        right: 10px;
        top: 550px
    }
    .deathbirth{
        position: absolute;
        bottom: 8px;
        left: 500px;
        right: 10px;
        top: 550px
    }
    .deathage{
        position: absolute;
        bottom: 8px;
        left: 870px;
        right: 10px;
        top: 560px
    }
    .deathmonth{
        position: absolute;
        bottom: 8px;
        left: 1030px;
        right: 10px;
        top: 560px
    }
    .deathhours{
        position: absolute;
        bottom: 8px;
        left: 1190px;
        right: 10px;
        top: 560px
    }
    .deathplace{
        position: absolute;
        bottom: 8px;
        left: 200px;
        right: 10px;
        top: 620px
    }
    .deathcivil{
        position: absolute;
        bottom: 8px;
        left: 1100px;
        right: 10px;
        top: 630px;
    }
    .deathreligion{
        position: absolute;
        bottom: 8px;
        left: 200px;
        right: 10px;
        top: 700px;
    }
    .deathcitizen{
        position: absolute;
        bottom: 8px;
        left: 500px;
        right: 10px;
        top: 700px;
    }
    .deathresidence{
        position: absolute;
        bottom: 8px;
        left: 870px;
        right: 10px;
        top: 700px;
    }
    .deathfather{
        position: absolute;
        bottom: 8px;
        left: 500px;
        right: 10px;
        top: 770px;
    }
    .deathmother{
        position: absolute;
        bottom: 8px;
        left: 890px;
        right: 10px;
        top: 770px;
    }
    .immediatedeath{
        position: absolute;
        bottom: 8px;
        left: 500px;
        right: 10px;
        top: 870px;
    }
    .antecedentdeath{
        position: absolute;
        bottom: 8px;
        left: 500px;
        right: 10px;
        top: 905px;
    }
    .underlyingdeath{
        position: absolute;
        bottom: 8px;
        left: 500px;
        right: 10px;
        top: 940px;
    }
    .othercondition{
        position: absolute;
        bottom: 8px;
        left: 700px;
        right: 10px;
        top: 970px;
    }
    .maternal{
        position: absolute;
        bottom: 8px;
        left: 830px;
        right: 10px;
        top: 1010px;
    }
    .deathmanner{
        position: absolute;
        bottom: 8px;
        left: 830px;
        right: 10px;
        top: 1090px;
    }
    .deathoccurplace{
        position: absolute;
        bottom: 8px;
        left: 890px;
        right: 10px;
        top: 1120px;
    }
    .deathautopsy{
        position: absolute;
        bottom: 8px;
        left: 1190px;
        right: 10px;
        top: 1120px;
    }
    .deathattendant{
        position: absolute;
        bottom: 8px;
        left: 500px;
        right: 10px;
        top: 1160px;
    }
    .deathatenddura{
        position: absolute;
        bottom: 8px;
        left: 1100px;
        right: 10px;
        top: 1180px;
    }
    .deathcertifyoff{
        position: absolute;
        bottom: 8px;
        left: 370px;
        right: 10px;
        top: 1350px;  
    }
    .deathcerifydate{
        position: absolute;
        bottom: 8px;
        left: 600px;
        right: 10px;
        top: 1430px; 
    }
    .corpsedisposal{
        position: absolute;
        bottom: 8px;
        left: 200px;
        right: 10px;
        top: 1510px;
    }
    .disposalmethod{
        position: absolute;
        bottom: 8px;
        left: 400px;
        right: 10px;
        top: 1510px;
    }
    .cemeteryname{
        position: absolute;
        bottom: 8px;
        left: 200px;
        right: 10px;
        top: 1560px;
    }
    .cemeteryadd{
        position: absolute;
        bottom: 8px;
        left: 700px;
        right: 10px;
        top: 1560px;
    }
    .deathageofmother{
        position: absolute;
        bottom: 8px;
        left: 200px;
        right: 10px;
        top: 2430px;
    }
    .deathdelivery{
        position: absolute;
        bottom: 8px;
        left: 700px;
        right: 10px;
        top: 2440px;
    }
    .deathpreg{
        position: absolute;
        bottom: 8px;
        left: 1100px;
        right: 10px;
        top: 2440px;
    }
    .deathtypeof{
        position: absolute;
        bottom: 8px;
        left: 500px;
        right: 10px;
        top: 2500px;
    }
    .deathmultiple{
        position: absolute;
        bottom: 8px;
        left: 1100px;
        right: 10px;
        top: 2510px;
    }
    .deathaffiat{
        position: absolute;
        bottom: 8px;
        left: 400px;
        right: 10px;
        top: 3420px;
    }
    .deathaffiatadd{
        position: absolute;
        bottom: 8px;
        left: 600px;
        right: 10px;
        top: 3460px;
    }
    .deathaffiatstatus{
        position: absolute;
        bottom: 8px;
        left: 1000px;
        right: 10px;
        top: 3410px;
    }
    .deceased{
        position: absolute;
        bottom: 8px;
        left: 400px;
        right: 10px;
        top: 3530px;
    }
    .burialplace{
        position: absolute;
        bottom: 8px;
        left: 600px;
        right: 10px;
        top: 3559px
    }
    .deathattendedby{
        position: absolute;
        bottom: 8px;
        left: 370px;
        right: 10px;
        top: 3670px
    }
    .deathattendedperson{
        position: absolute;
        bottom: 8px;
        left: 600px;
        right: 10px;
        top: 3665px
    }
    .Cozofdet{
        position: absolute;
        bottom: 8px;
        left: 800px;
        right: 10px;
        top: 3760px
    }
    .detrison{
        position: absolute;
        bottom: 8px;
        left: 400px;
        right: 10px;
        top: 3844px
    }
    .ditdetsign{
        position: absolute;
        bottom: 8px;
        left: 800px;
        right: 10px;
        top: 3935px
    }
    .ditmatsign{
        position: absolute;
        bottom: 8px;
        left: 950px;
        right: 10px;
        top: 3935px
    }
    .dityersign{
        position: absolute;
        bottom: 8px;
        left: 1175px;
        right: 10px;
        top: 3935px
    }
    .ditplessign{
        position: absolute;
        bottom: 8px;
        left: 280px;
        right: 10px;
        top: 3965px
    }
    .ditdaysworn{
        position: absolute;
        bottom: 8px;
        left: 730px;
        right: 10px;
        top: 4100px
    }
    .ditmantsworn{
        position: absolute;
        bottom: 8px;
        left: 880px;
        right: 10px;
        top: 4100px
    }
    .dityersworn{
        position: absolute;
        bottom: 8px;
        left: 1170px;
        right: 10px;
        top: 4100px
    }
    .ditplesworn{
        position: absolute;
        bottom: 8px;
        left: 280px;
        right: 10px;
        top: 4140px
    }
    .ditaxdate{
        position: absolute;
        bottom: 8px;
        left: 600px;
        right: 10px;
        top: 4170px
    }
    .dittaxplace{
        position: absolute;
        bottom: 8px;
        left: 900px;
        right: 10px;
        top: 4170px
    }
    


    </style>
    <!-- Background Image -->
    <div class="deathbg-image">
        <img src="{{ asset('img/Certificate-of-Death/page-0.jpg') }}" alt="Certificate of Death">
        <img src="{{ asset('img/Certificate-of-Death/page-1.jpg') }}" alt="Certificate of Death">
    </div>
        <form action="/home/services/deathform/deathformcert" method="POST" id="deathformcert">
        @csrf
            <div class="deathfullname">
                <label for="full_name" class="birth-label">
                <input type="text" name="full_name" class="birth-form-control" style="width: 200px" id="full_name"  value="{{ old('full_name', $RequestData3->full_name ?? '') }}" required>
            </div>
            <div class="deathsex">
                <label for="sex" class="birth-label">
                <input type="text" name="sex" class="birth-form-control" id="sex" value="{{ old('sex', $RequestData3->sex ?? '') }}" required>
            </div>
            <div class="datedeath">
                <label for="date_of_death" class="birth-label">
                <input type="text" name="date_of_death" class="birth-form-control" id="full_name" value="{{ old('date_of_death', $RequestData3->date_of_death ?? '') }}" required>
            </div>
            <div class="deathbirth">
                <label for="date_of_birth" class="birth-label">
                <input type="text" name="date_of_birth" class="birth-form-control" id="date_of_birth" value="{{ old('date_of_birth', $RequestData3->date_of_birth ?? '') }}" required>
            </div>
            <div class="deathage">
                <label for="completed_years" class="birth-label">
                <input type="text" name="completed_years" class="birth-form-control" style="width: 100px" id="completed_years" value="{{ old('completed_years', $RequestData3->completed_years ?? '') }}" required>
            </div>
            <div class="deathmonth">
                <label for="months_days" class="birth-label">
                <input type="text" name="months_days" class="birth-form-control" style="width: 100px" id="months_days" value="{{ old('months_days', $RequestData3->months_days ?? '') }}" required>
            </div>
            <div class="deathhours">
                <label for="hours_minutes_seconds" class="birth-label">
                <input type="text" name="hours_minutes_seconds" style="width: 100px" class="birth-form-control" id="hours_minutes_seconds" value="{{ old('hours_minutes_seconds', $RequestData3->hours_minutes_seconds ?? '') }}" required>
            </div>
            <div class="deathplace">
                <label for="place_of_death" class="birth-label">
                <input type="text" name="place_of_death" class="birth-form-control" id="place_of_death" value="{{ old('place_of_death', $RequestData3->place_of_death ?? '') }}" required>
            </div>

            <div class="deathcivil">
                <label for="civil_status" class="birth-label">
                <input type="text" name="civil_status" class="birth-form-control" id="civil_status" value="{{ old('civil_status', $RequestData3->civil_status ?? '') }}" required>
            </div>

            <div class="deathreligion">
                <label for="religion" class="birth-label">
                <input type="text" name="religion" class="birth-form-control" id="religion" value="{{ old('religion', $RequestData3->religion ?? '') }}" required>
            </div>

            <div class="deathcitizen">
                <label for="citizenship" class="birth-label">
                <input type="text" name="citizenship" class="birth-form-control" id="citizenship" value="{{ old('citizenship', $RequestData3->citizenship ?? '') }}" required>
            </div>

            <div class="deathresidence">
                <label for="residence" class="birth-label">
                <input type="text" name="residence" class="birth-form-control" style="width: 200px" id="residence" value="{{ old('residence', $RequestData3->residence ?? '') }}" required>
            </div>

            <div class="deathfather">
                <label for="father_name" class="birth-label">
                <input type="text" name="father_name" class="birth-form-control" id="father_name" value="{{ old('father_name', $RequestData3->father_name ?? '') }}" required>
            </div>

            <div class="deathmother">
                <label for="mother_maiden_name" class="birth-label">
                <input type="text" name="mother_maiden_name" class="birth-form-control" id="mother_maiden_name" value="{{ old('mother_maiden_name', $RequestData3->mother_maiden_name ?? '') }}" required>
            </div>

            <div class="immediatedeath">
                <label for="immediate_cause" class="birth-label">
                <input type="text" name="immediate_cause" class="birth-form-control" id="immediate_cause" value="{{ old('immediate_cause', $RequestData3->immediate_cause ?? '') }}" required>
            </div>

            <div class="antecedentdeath">
                <label for="antecedent_cause" class="birth-label">
                <input type="text" name="antecedent_cause" class="birth-form-control" id="antecedent_cause" value="{{ old('antecedent_cause', $RequestData3->antecedent_cause ?? '') }}" required>
            </div>

            <div class="underlyingdeath">
                <label for="underlyingdeath" class="birth-label">
                <input type="text" name="underlying_cause" class="birth-form-control" id="underlying_cause" value="{{ old('underlying_cause', $RequestData3->underlying_cause ?? '') }}" required>
            </div>

            <div class="othercondition">
                <label for="other_conditions" class="birth-label">
                <input type="text" name="other_conditions" class="birth-form-control" id="other_conditions" value="{{ old('other_conditions', $RequestData3->other_conditions ?? '') }}" required>
            </div>

            <div class="maternal">
                <label for="maternal_condition" class="birth-label">
                <input type="text" name="maternal_condition" style="width: 250px"class="birth-form-control" id="maternal_condition" value="{{ old('maternal_condition', $RequestData3->maternal_condition ?? '') }}" required>
            </div>

            <div class="deathmanner">
                <label for="manner_of_death" class="birth-label">
                <input type="text" name="manner_of_death" class="birth-form-control" id="manner_of_death" value="{{ old('manner_of_death', $RequestData3->manner_of_death ?? '') }}" required>
            </div>

            <div class="deathoccurplace">
                <label for="place_of_occurrence" class="birth-label">
                <input type="text" name="place_of_occurrence" class="birth-form-control" id="place_of_occurrence" value="{{ old('place_of_occurrence', $RequestData3->place_of_occurrence ?? '') }}" required>
            </div>

            <div class="deathautopsy">
                <label for="autopsy" class="birth-label">
                <input type="text" name="autopsy" style="width: 90px" class="birth-form-control" id="autopsy" value="{{ old('autopsy', $RequestData3->autopsy ?? '') }}" required>
            </div>

            <div class="deathattendant">
                <label for="type_of_attendant" class="birth-label">
                <input type="text" name="type_of_attendant" class="birth-form-control" id="type_of_attendant" value="{{ old('type_of_attendant', $RequestData3->type_of_attendant ?? '') }}" required>
            </div>

            <div class="deathatenddura">
                <label for="attendance_duration" class="birth-label">
                <input type="text" name="attendance_duration" class="birth-form-control" id="attendance_duration" value="{{ old('attendance_duration', $RequestData3->attendance_duration ?? '') }}" required>
            </div>
            <div class="deathcertifyoff">
                <label for="certifying_officer" class="birth-label">
                <input type="text" name="certifying_officer" class="birth-form-control" id="certifying_officer" value="{{ old('certifying_officer', $RequestData3->certifying_officer ?? '') }}" required>
            </div>

            <div class="deathcerifydate">
                <label for="certification_date" class="birth-label">
                <input type="date" name="certification_date" class="birth-form-control" id="certification_date" value="{{ old('certification_date', $RequestData3->certification_date ?? '') }}" required>
            </div>

            <div class="corpsedisposal">
                <label for="corpse_disposal_method" class="birth-label">
                <input type="text" name="corpse_disposal_method" class="birth-form-control" id="corpse_disposal_method" value="{{ old('corpse_disposal_method', $RequestData3->corpse_disposal_method ?? '') }}" required>
            </div>

            <div class="disposalmethod">
                <label for="other_disposal_method_specify" class="birth-label">
                <input type="text" name="other_disposal_method_specify" style="width: 90px" class="birth-form-control" id="other_disposal_method_specify" value="{{ old('other_disposal_method_specify', $RequestData3->other_disposal_method_specify ?? '') }}">
            </div>

            <div class="cemeteryname">
                <label for="cemetery_or_crematory_name" class="birth-label">
                <input type="text" name="cemetery_or_crematory_name" style="width: 300px" class="birth-form-control" id="cemetery_or_crematory_name" value="{{ old('cemetery_or_crematory_name', $RequestData3->cemetery_or_crematory_name ?? '') }}" required>
            </div>

            <div class="cemeteryadd">
                <label for="cemetery_or_crematory_address" class="birth-label">
                <input type="text" name="cemetery_or_crematory_address" style="width: 300px" class="birth-form-control" id="cemetery_or_crematory_address" value="{{ old('cemetery_or_crematory_address', $RequestData3->cemetery_or_crematory_address ?? '') }}" required>
            </div>

            <div class="deathageofmother">
                <label for="age_of_mother" class="birth-label">
                <input type="number" name="age_of_mother" class="birth-form-control" id="age_of_mother" value="{{ old('age_of_mother', $RequestData3->age_of_mother ?? '') }}" required>
            </div>

            <div class="deathdelivery">
                <label for="method_of_delivery" class="birth-label">
                <input type="text" name="method_of_delivery" class="birth-form-control" id="method_of_delivery" value="{{ old('method_of_delivery', $RequestData3->method_of_delivery ?? '') }}" required>
            </div>

            <div class="deathpreg">
                <label for="length_of_pregnancy" class="birth-label">
                <input type="text" name="length_of_pregnancy" class="birth-form-control" id="length_of_pregnancy" value="{{ old('length_of_pregnancy', $RequestData3->length_of_pregnancy ?? '') }}" required>
            </div>

            <div class="deathtypeof">
                <label for="type_of_birth" class="birth-label">
                <input type="text" name="type_of_birth" class="birth-form-control" id="type_of_birth" value="{{ old('type_of_birth', $RequestData3->type_of_birth ?? '') }}" required>
            </div>

            <div class="deathmultiple">
                <label for="multiple_birth_position" class="birth-label">
                <input type="text" name="multiple_birth_position" class="birth-form-control" id="multiple_birth_position" value="{{ old('multiple_birth_position', $RequestData3->multiple_birth_position ?? '') }}">
            </div>

<!--if delayed death registriation-->
            <div class="deathaffiat">
                <label for="affiant_name" class="birth-label">
                <input type="text" name="affiant_name" style="width: 400px" class="birth-form-control" id="affiant_name" value="{{ old('affiant_name', $RequestData3->affiant_name ?? '') }}" required>
            </div>

            <div class="deathaffiatstatus">
                <label for="legal_status" class="birth-label">
                <input type="text" name="legal_status"  class="birth-form-control" id="legal_status" value="{{ old('legal_status', $RequestData3->legal_status ?? '') }}" required>
            </div>

            <div class="deathaffiatadd">
                <label for="affiant_address" class="birth-label">
                <input type="text" name="affiant_address" style="width: 400px" class="birth-form-control" id="affiant_address" value="{{ old('affiant_address', $RequestData3->affiant_address ?? '') }}" required>
            </div>

            <div class="deceased">
                <label for="deceased_name" class="birth-label">
                <input type="text" name="deceased_name" style="width: 400px" class="birth-form-control" id="deceased_name" value="{{ old('deceased_name', $RequestData3->deceased_name ?? '') }}" required>
            </div>

            <div class="burialplace">
                <label for="burial_place" class="birth-label">
                <input type="text" name="burial_place" style="width: 300px" class="birth-form-control" id="burial_place" value="{{ old('burial_place', $RequestData3->burial_place ?? '') }}" required>
            </div>

            <div class="deathattendedby">
                <label for="attended_by" class="birth-label">
                <input type="text" name="attended_by" style="width: 70px" class="birth-form-control" id="attended_by" value="{{ old('attended_by', $RequestData3->attended_by ?? '') }}" required>
            </div>

            <div class="deathattendedperson">
                <label for="attended_by_person" class="birth-label">
                <input type="text" name="attended_by_person" style="width: 400px"  class="birth-form-control" id="attended_by_person" value="{{ old('attended_by_person', $RequestData3->attended_by_person ?? '') }}">
            </div>

            <div class="Cozofdet">
                <label for="cause_of_death" class="birth-label">
                <input type="text" name="cause_of_death" style="width: 400px" class="birth-form-control" id="cause_of_death" value="{{ old('cause_of_death', $RequestData3->cause_of_death ?? '') }}" required>
            </div>

            <div class="detrison">
                <label for="reason_delay" class="birth-label">
                <input type="text" name="reason_delay" style="width: 600px" class="birth-form-control" id="reason_delay" value="{{ old('reason_delay', $RequestData3->reason_delay ?? '') }}">
            </div>

            <div class="ditdetsign">
                <label for="day_signed" class="birth-label">
                <input type="text" name="day_signed" style="width: 50px" class="birth-form-control" id="day_signed" value="{{ old('day_signed', $RequestData3->day_signed ?? '') }}" required>
            </div>

            <div class="ditmatsign">
                <label for="month_signed" class="birth-label">
                <input type="text" name="month_signed" class="birth-form-control" id="month_signed" value="{{ old('month_signed', $RequestData3->month_signed ?? '') }}" required>
            </div>

            <div class="dityersign">
                <label for="year_signed" class="birth-label">
                <input type="text" name="year_signed" style="width: 100px" class="birth-form-control" id="year_signed" value="{{ old('year_signed', $RequestData3->year_signed ?? '') }}" required>
            </div>

            <div class="ditplessign">
                <label for="place_signed" class="birth-label">
                <input type="text" name="place_signed" style="width: 300px" class="birth-form-control" id="place_signed" value="{{ old('place_signed', $RequestData3->place_signed ?? '') }}" required>
            </div>

            <div class="ditdaysworn">
                <label for="day_sworn" class="birth-label">
                <input type="text" name="day_sworn" style="width: 50px" class="birth-form-control" id="day_sworn" value="{{ old('day_sworn', $RequestData3->day_sworn ?? '') }}" required>
            </div>

            <div class="ditmantsworn">
                <label for="month_sworn" class="birth-label">
                <input type="text" name="month_sworn" class="birth-form-control" id="month_sworn" value="{{ old('month_sworn', $RequestData3->month_sworn ?? '') }}" required>
            </div>

            <div class="dityersworn">
                <label for="year_sworn" class="birth-label">
                <input type="text" name="year_sworn" style="width: 100px" class="birth-form-control" id="year_sworn" value="{{ old('year_sworn', $RequestData3->year_sworn ?? '') }}" required>
            </div>

            <div class="ditplesworn">
                <label for="place_sworn" class="birth-label">
                <input type="text" name="place_sworn" style="width: 400px"class="birth-form-control" id="place_sworn" value="{{ old('place_sworn', $RequestData3->place_sworn ?? '') }}" required>
            </div>

            <div class="ditaxdate">
                <label for="tax_cert_date" class="birth-label">
                <input type="text" name="tax_cert_date" class="bth-form-control" id="tax_cert_date" value="{{ old('tax_cert_date', $RequestData3->tax_cert_date ?? '') }}" required>
            </div>

            <div class="dittaxplace">
                <label for="tax_cert_place" class="birth-label">
                <input type="text" name="tax_cert_place" style="width: 350px" class="birth-form-control" id="tax_cert_place" value="{{ old('tax_cert_place', $RequestData3->tax_cert_place ?? '') }}" required>
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
