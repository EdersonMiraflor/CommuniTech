@extends('layouts.layout')

@section('contents')


<style>
.bg-image{
        position: relative;
        text-align: center;
        color: white;
    }
    .m_husbandfirstname{
        position: absolute;
        bottom: 8px;
        left: 200px;
        right: 750px;
        top: 272px
    }
    .m_husbandmiddlename{
        position: absolute;
        bottom: 8px;
        left: 200px;
        right: 750px;
        top: 300px
    }
    .m_husbandlastname{
        position: absolute;
        bottom: 8px;
        left: 200px;
        right: 750px;
        top: 320px
    }
    .m_husband_birthdate{
        position: absolute;
        bottom: 8px;
        left: 150px;
        right: 750px;
        top: 375px
    }
    .m_husband_age{
        position: absolute;
        bottom: 8px;
        left: 640px;
        right: 750px;
        top: 355px
    
    }
    .m_husband_age .birth-form-control {
    width: 50px; /* Adjust this value as needed */
    box-sizing: border-box; /* Ensures padding does not exceed width */
    }

    .m_husband_city_municipality{
        position: absolute;
        bottom: 8px;
        left: 145px;
        right: 750px;
        top: 430px
    }
    .m_husband_province{
        position: absolute;
        bottom: 8px;
        left: 400px;
        right: 750px;
        top: 407px
    }
    .m_husband_country{
        position: absolute;
        bottom: 8px;
        left: 520px;
        right: 750px;
        top: 407px
    }
    /*new form group added*/ 
    .m_husband_sex{
        position: absolute;
        bottom: 8px;
        left: 110px;
        right: 750px;
        top: 470px
    }
    .m_husband_sex .birth-form-control{
        width: 100px;
        box-sizing: border-box;
    }
    .m_husband_citizenship{
        position: absolute;
        bottom: 8px;
        left: 460px;
        right: 750px;
        top: 457px
    }
    
    .m_husband_residence{
        position: absolute;
        bottom: 8px;
        left: 260px;
        right: 750px;
        top: 510px
    }
    .m_husband_residence .birth-form-control {
    width: 400px; /* Adjust this value as needed */
    box-sizing: border-box; /* Ensures padding does not exceed width */
    }

    .m_husband_province{
        position: absolute;
        bottom: 8px;
        left: 410px;
        right: 750px;
        top: 407px;
    }
    .m_husband_father_citizenship{
        position: absolute;
        bottom: 8px;
        left: 170px;
        right: 750px;
        top: 710px;
    }
    .m_husband_mother_first_name{
        position: absolute;
        bottom: 8px;
        left: 170px;
        right: 750px;
        top: 770px;
    }
    .m_husband_mother_middle_name{
        position: absolute;
        bottom: 8px;
        left: 390px;
        right: 750px;
        top: 747px;
    }
    .m_husband_mother_maiden_last_name{
        position: absolute;
        bottom: 8px;
        left: 510px;
        right: 750px;
        top: 747px;
    }

    .m_husband_mother_citizenship{
        position: absolute;
        bottom: 8px;
        left: 170px;
        right: 750px;
        top: 810px;
    }
    





    .m_wifefirstname{
        position: absolute;
        bottom: 8px;
        left: 750px;
        right: 750px;
        top: 255px;
    }
    
    .m_wife_middle_name{
        position: absolute;
        bottom: 8px;
        left: 750px;
        right: 750px;
        top: 280px;
    }
    .m_wife_last_name{
        position: absolute;
        bottom: 8px;
        left: 750px;
        right: 750px;
        top: 300px;
    }
    .m_wife_birthdate{
        position: absolute;
        bottom: 8px;
        left: 730px;
        right: 750px;
        top: 355px
    }
    .m_wife_age{
        position: absolute;
        bottom: 8px;
        left: 1113px;
        right: 750px;
        top: 355px
    }
    .m_wife_age .birth-form-control {
    width: 50px; /* Adjust this value as needed */
    box-sizing: border-box; /* Ensures padding does not exceed width */
    }
    .m_wife_city_municipality{
        position: absolute;
        bottom: 8px;
        left: 700px;
        right: 750px;
        top: 410px;
    }
    .m_wife_province{
        position: absolute;
        bottom: 8px;
        left: 870px;
        right: 750px;
        top: 410px;
    }
    .m_wife_country{
        position: absolute;
        bottom: 8px;
        left: 990px;
        right: 750px;
        top: 410px;
    }
    .m_wife_citizenship{
        position: absolute;
        bottom: 8px;
        left: 910px;
        right: 750px;
        top: 460px;
    }
    .m_wife_residence{
        position: absolute;
        bottom: 8px;
        left: 720px;
        right: 750px;
        top: 510px;
    }
    .m_wife_residence .birth-form-control {
    width: 400px; /* Adjust this value as needed */
    box-sizing: border-box; /* Ensures padding does not exceed width */
    }
    .m_wife_religion{
        position: absolute;
        bottom: 8px;
        left: 720px;
        right: 750px;
        top: 555px;
    }
    .m_wife_religion .birth-form-control{
        width: 400px; /* Adjust this value as needed */
        box-sizing: border-box; /* Ensures padding does not exceed width */
    } 
    .m_wife_father_first_name{
        position: absolute;
        bottom: 8px;
        left: 710px;
        right: 750px;
        top: 650px;
    }
    .m_wife_father_middle_name{
        position: absolute;
        bottom: 8px;
        left: 850px;
        right: 750px;
        top: 650px;
    }
    .m_wife_father_last_name{
        position: absolute;
        bottom: 8px;
        left: 980px;
        right: 750px;
        top: 650px;
    }
    .m_wife_father_citizenship{
        position: absolute;
        bottom: 8px;
        left: 710px;
        right: 750px;
        top: 690px;
    }
    .m_wife_mother_first_name{
        position: absolute;
        bottom: 8px;
        left: 710px;
        right: 750px;
        top: 750px;
    }
    .m_wife_mother_middle_name{
        position: absolute;
        bottom: 8px;
        left: 850px;
        right: 750px;
        top: 750px;
    }
    .m_wife_mother_maiden_last_name{
        position: absolute;
        bottom: 8px;
        left: 980px;
        right: 750px;
        top: 750px;
    }
    .m_wife_mother_citizenship{
        position: absolute;
        bottom: 8px;
        left: 710px;
        right: 750px;
        top: 785px;
    }
    .m_marriage_date1{
        position: absolute;
        bottom: 8px;
        left: 330px;
        right: 750px;
        top: 1050px;
    }
    .m_marriage_place{
        position: absolute;
        bottom: 8px;
        left: 330px;
        right: 750px;
        top: 970px;
    }
    .m_marriage_place .birth-form-control {
    width: 750px; /* Adjust this value as needed */
    box-sizing: border-box; /* Ensures padding does not exceed width */
    }
    
   
</style>

<div class="bg-image container birth-form-page" style="padding: 20px; margin-top: 50px; margin-bottom: 50px; position: relative; text-align: center;">
    <!-- Background Image -->
    <div class="background-image-container" style="position: relative; overflow: hidden;">
    <img src="{{ asset('img/Certificate-of-Marriage-/page-0.jpg') }}" alt="Certificate of Marriage" style="width: 100%; height: auto; opacity: 0.8;">
    <img src="{{ asset('img/Certificate-of-Marriage-/page-1.jpg') }}" alt="Certificate of Marriage" style="width: 100%; height: auto; opacity: 0.8;">
        <form action="/home/services/marriageform/marriageformcert" method="POST" id="marriageformcert">
            @csrf
            <div class="m_husbandfirstname">
                <label for="husband_first_name" class="husband_first_name"></label>
                <input type="text" name="husband_first_name" class="birth-form-control" id="husband_first_name" value="{{ old('husband_first_name', $RequestData2->husband_first_name ?? '') }}" required>
            </div>
            <div class="m_husbandmiddlename">
                <label for="husband_middle_name" class="birth-label"></label>
                <input type="text" name="husband_middle_name" class="birth-form-control" id="husband_middle_name" value="{{ old('husband_middle_name', $RequestData2->husband_middle_name ?? '') }}" required>
            </div>
            <div class="m_husbandlastname">
                <label for="husband_last_name" class="birth-label"></label>
                <input type="text" name="husband_last_name" class="birth-form-control" id="husband_last_name" value="{{ old('husband_last_name', $RequestData2->husband_last_name ?? '') }}" required>
            </div>

            <div class="m_husband_birthdate">
                <label for="husband_birthdate" class="birth-label"></label>
                <input type="date" name="husband_birthdate" class="birth-form-control" id="husband_birthdate" value="{{ old('husband_birthdate', $RequestData2->husband_birthdate ?? '') }}" required>
            </div>

            <div class="m_husband_age">
                <label for="husband_age" class="birth-label"></label>
                <input type="number" name="husband_age" class="birth-form-control" id="husband_age" value="{{ old('husband_age', $RequestData2->husband_age ?? '') }}" required>
            </div>

            <div class="m_husband_city_municipality">
                <label for="husband_city_municipality" class="birth-label"></label>
                <input type="text" name="husband_city_municipality" class="birth-form-control" id="husband_city_municipality" value="{{ old('husband_city_municipality', $RequestData2->husband_city_municipality ?? '') }}" required>
            </div>
            <div class="m_husband_province">
                <label for="husband_province" class="birth-label"></label>
                <input type="text" name="husband_province" class="birth-form-control" id="husband_province" value="{{ old('husband_province', $RequestData2->husband_province ?? '') }}" required>
            </div>

            <div class="m_husband_country">
                <label for="husband_country" class="birth-label"></label>
                <input type="text" name="husband_country" class="birth-form-control" id="husband_country" value="{{ old('husband_country', $RequestData2->husband_country ?? '') }}" required>
            </div>

            <div class="m_husband_citizenship">
                <label for="husband_citizenship" class="birth-label"></label>
                <input type="text" name="husband_citizenship" class="birth-form-control" id="husband_citizenship" value="{{ old('husband_citizenship', $RequestData2->husband_citizenship ?? '') }}" required>
            </div>

            <div class="m_husband_residence">
                <label for="husband_residence" class="birth-label"></label>
                <input type="text" name="husband_residence" class="birth-form-control" id="husband_residence" value="{{ old('husband_residence', $RequestData2->husband_residence ?? '') }}" required>
            </div>


            <div class="m_husband_sex">
                <label for="husband_sex" class="birth-label"></label>
                <input type="text" name="husband_citizenship" class="birth-form-control" id="husband_sex" value="{{ old('husband_sex', $RequestData2->husband_sex ?? '') }}" required>
            </div>

            <div class="m_husband_father_citizenship">
                <label for="husband_father_citizenship" class="birth-label"></label>
                <input type="text" name="husband_father_citizenship" class="birth-form-control" id="husband_father_citizenship" value="{{ old('husband_father_citizenship', $RequestData2->husband_father_citizenship ?? '') }}" required>
            </div>

            <div class="m_husband_mother_first_name">
                <label for="husband_mother_first_name" class="birth-label"></label>
                <input type="text" name="husband_mother_first_name" class="birth-form-control" id="husband_mother_first_name" value="{{ old('husband_mother_first_name', $RequestData2->husband_mother_first_name ?? '') }}" required>
            </div>

            <div class="m_husband_mother_middle_name">
                <label for="husband_mother_middle_name" class="birth-label"></label>
                <input type="text" name="husband_mother_middle_name" class="birth-form-control" id="husband_mother_middle_name" value="{{ old('husband_mother_middle_name', $RequestData2->husband_mother_middle_name ?? '') }}">
            </div>

            <div class="m_husband_mother_maiden_last_name">
                <label for="husband_mother_maiden_last_name" class="birth-label"></label>
                <input type="text" name="husband_mother_maiden_last_name" class="birth-form-control" id="husband_mother_maiden_last_name" value="{{ old('husband_mother_maiden_last_name', $RequestData2->husband_mother_maiden_last_name ?? '') }}" required>
            </div>

            <div class="m_husband_mother_citizenship">
                <label for="husband_mother_citizenship" class="birth-label"></label>
                <input type="text" name="husband_mother_citizenship" class="birth-form-control" id="husband_mother_citizenship" value="{{ old('husband_mother_citizenship', $RequestData2->husband_mother_citizenship ?? '') }}" required>
            </div>

            <div class="m_wifefirstname">
                <label for="wife_first_name" class="birth-label"></label>
                <input type="text" name="wife_first_name" class="birth-form-control" id="wife_first_name" value="{{ old('wife_first_name', $RequestData2->wife_first_name ?? '') }}" required>
            </div>

            <div class="m_wife_middle_name">
                <label for="wife_middle_name" class="birth-label"></label>
                <input type="text" name="wife_middle_name" class="birth-form-control" id="wife_middle_name" value="{{ old('wife_middle_name', $RequestData2->wife_middle_name ?? '') }}">
            </div>

            <div class="m_wife_last_name">
                <label for="wife_last_name" class="birth-label"></label>
                <input type="text" name="wife_last_name" class="birth-form-control" id="wife_last_name" value="{{ old('wife_last_name', $RequestData2->wife_last_name ?? '') }}" required>
            </div>
            <div class="m_wife_birthdate">
                <label for="wife_birthdate" class="birth-label"></label>
                <input type="date" name="wife_birthdate" class="birth-form-control" id="wife_birthdate" value="{{ old('wife_birthdate', $RequestData2->wife_birthdate ?? '') }}" required>
            </div>

            <div class="m_wife_age">
                <label for="wife_age" class="birth-label"></label>
                <input type="number" name="wife_age" class="birth-form-control" id="wife_age" value="{{ old('wife_age', $RequestData2->wife_age ?? '') }}" required>
            </div>

            <div class="m_wife_city_municipality">
                <label for="wife_city_municipality" class="birth-label"></label>
                <input type="text" name="wife_city_municipality" class="birth-form-control" id="wife_city_municipality" value="{{ old('wife_city_municipality', $RequestData2->wife_city_municipality ?? '') }}">
            </div>

            <div class="m_wife_province">
                <label for="wife_province" class="birth-label"></label>
                <input type="text" name="wife_province" class="birth-form-control" id="wife_province" value="{{ old('wife_province', $RequestData2->wife_province ?? '') }}" required>
            </div>

            <div class="m_wife_country">
                <label for="wife_country" class="birth-label"></label>
                <input type="text" name="wife_country" class="birth-form-control" id="wife_country" value="{{ old('wife_country', $RequestData2->wife_country ?? '') }}" required>
            </div>

            <div class="m_wife_citizenship">
                <label for="wife_citizenship" class="birth-label"></label>
                <input type="text" name="wife_citizenship" class="birth-form-control" id="wife_citizenship" value="{{ old('wife_citizenship', $RequestData2->wife_citizenship ?? '') }}" required>
            </div>

            <div class="m_wife_residence">
                <label for="wife_residence" class="birth-label"></label>
                <input type="text" name="wife_residence" class="birth-form-control" id="wife_residence" value="{{ old('wife_residence', $RequestData2->wife_residence ?? '') }}" required>
            </div>

            <div class="m_wife_religion">
                <label for="wife_religion" class="birth-label"></label>
                <input type="text" name="wife_religion" class="birth-form-control" id="wife_religion" value="{{ old('wife_religion', $RequestData2->wife_religion ?? '') }}" required>
            </div>
            <div class="m_wife_father_first_name">
                <label for="wife_father_first_name" class="birth-label"></label>
                <input type="text" name="wife_father_first_name" class="birth-form-control" id="wife_father_first_name" value="{{ old('wife_father_first_name', $RequestData2->wife_father_first_name ?? '') }}" required>
            </div>

            <div class="m_wife_father_middle_name">
                <label for="wife_father_middle_name" class="birth-label"></label>
                <input type="text" name="wife_father_middle_name" class="birth-form-control" id="wife_father_middle_name" value="{{ old('wife_father_middle_name', $RequestData2->wife_father_middle_name ?? '') }}">
            </div>

            <div class="m_wife_father_last_name">
                <label for="wife_father_last_name" class="birth-label"></label>
                <input type="text" name="wife_father_last_name" class="birth-form-control" id="wife_father_last_name" value="{{ old('wife_father_last_name', $RequestData2->wife_father_last_name ?? '') }}" required>
            </div>

            <div class="m_wife_father_citizenship">
                <label for="wife_father_citizenship" class="birth-label"></label>
                <input type="text" name="wife_father_citizenship" class="birth-form-control" id="wife_father_citizenship" value="{{ old('wife_father_citizenship', $RequestData2->wife_father_citizenship ?? '') }}" required>
            </div>

            <div class="m_wife_mother_first_name">
                <label for="wife_mother_first_name" class="birth-label"></label>
                <input type="text" name="wife_mother_first_name" class="birth-form-control" id="wife_mother_first_name" value="{{ old('wife_mother_first_name', $RequestData2->wife_mother_first_name ?? '') }}" required>
            </div>

            <div class="m_wife_mother_middle_name">
                <label for="wife_mother_middle_name" class="birth-label"></label>
                <input type="text" name="wife_mother_middle_name" class="birth-form-control" id="wife_mother_middle_name" value="{{ old('wife_mother_middle_name', $RequestData2->wife_mother_middle_name ?? '') }}">
            </div>

            <div class="m_wife_mother_maiden_last_name">
                <label for="wife_mother_maiden_last_name" class="birth-label"></label>
                <input type="text" name="wife_mother_maiden_last_name" class="birth-form-control" id="wife_mother_maiden_last_name" value="{{ old('wife_mother_maiden_last_name', $RequestData2->wife_mother_maiden_last_name ?? '') }}" required>
            </div>

            <div class="m_wife_mother_citizenship">
                <label for="wife_mother_citizenship" class="birth-label"></label>
                <input type="text" name="wife_mother_citizenship" class="birth-form-control" id="wife_mother_citizenship" value="{{ old('wife_mother_citizenship', $RequestData2->wife_mother_citizenship ?? '') }}" required>
            </div>
            <div class="m_marriage_date1">
                <label for="marriage_date1" class="birth-label"></label>
                <input type="date" name="marriage_date1" class="birth-form-control" id="marriage_date1" value="{{ old('marriage_date1', $RequestData2->marriage_date1 ?? '') }}" required>
            </div>

            <div class="m_marriage_place">
                <label for="marriage_place" class="birth-label"></label>
                <input type="text" name="marriage_place" class="birth-form-control" id="marriage_place" value="{{ old('marriage_place', $RequestData2->marriage_place ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="officiant_name" class="birth-label">41. officiant_name</label>
                <input type="text" name="officiant_name" class="birth-form-control" id="officiant_name" value="{{ old('officiant_name', $RequestData2->officiant_name ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="officiant_position" class="birth-label">42. officiant_position</label>
                <input type="text" name="officiant_position" class="birth-form-control" id="officiant_position" value="{{ old('officiant_position', $RequestData2->officiant_position ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="witnesses" class="birth-label">43. witnesses</label>
                <textarea name="witnesses" class="birth-form-control" id="witnesses" rows="3">{{ old('witnesses', $RequestData2->witnesses ?? '') }}</textarea>
            </div>

            <div class="form-group">
                <label for="affiant_name" class="birth-label">44. affiant_name</label>
                <input type="text" name="affiant_name" class="birth-form-control" id="affiant_name" value="{{ old('affiant_name', $RequestData2->affiant_name ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="address" class="birth-label">45. address</label>
                <input type="text" name="address" class="birth-form-control" id="address" value="{{ old('address', $RequestData2->address ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="marriage_registration_for" class="birth-label">46. marriage_registration_for</label>
                <input type="text" name="marriage_registration_for" class="birth-form-control" id="marriage_registration_for" value="{{ old('marriage_registration_for', $RequestData2->marriage_registration_for ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="marriage_date2" class="birth-label">47. marriage_date2</label>
                <input type="text" name="marriage_date2" class="birth-form-control" id="marriage_date2" value="{{ old('marriage_date2', $RequestData2->marriage_date2 ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="ceremony_type" class="birth-label">48. ceremony_type</label>
                <input type="text" name="ceremony_type" class="birth-form-control" id="ceremony_type" value="{{ old('ceremony_type', $RequestData2->ceremony_type ?? '') }}" required>
            </div>
            <div class="form-group">
                <label for="license_required" class="birth-label">49. license_required</label>
                <input type="text" name="license_required" class="birth-form-control" id="license_required" value="{{ old('license_required', $RequestData2->license_required ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="license_no" class="birth-label">50. license_no</label>
                <input type="text" name="license_no" class="birth-form-control" id="license_no" value="{{ old('license_no', $RequestData2->license_no ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="license_date" class="birth-label">51. license_date</label>
                <input type="date" name="license_date" class="birth-form-control" id="license_date" value="{{ old('license_date', $RequestData2->license_date ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="license_place" class="birth-label">52. license_place</label>
                <input type="text" name="license_place" class="birth-form-control" id="license_place" value="{{ old('license_place', $RequestData2->license_place ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="license_required2" class="birth-label">53. license_required2</label>
                <input type="text" name="license_required2" class="birth-form-control" id="license_required2" value="{{ old('license_required2', $RequestData2->license_required2 ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="article_no" class="birth-label">54. article_no</label>
                <input type="text" name="article_no" class="birth-form-control" id="article_no" value="{{ old('article_no', $RequestData2->article_no ?? '') }}">
            </div>

            <div class="form-group">
                <label for="citizenship" class="birth-label">55. citizenship</label>
                <input type="text" name="citizenship" class="birth-form-control" id="citizenship" value="{{ old('citizenship', $RequestData2->citizenship ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="spouse_citizenship" class="birth-label">56. spouse_citizenship</label>
                <input type="text" name="spouse_citizenship" class="birth-form-control" id="spouse_citizenship" value="{{ old('spouse_citizenship', $RequestData2->spouse_citizenship ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="delay_reason" class="birth-label">57. delay_reason</label>
                <input type="text" name="delay_reason" class="birth-form-control" id="delay_reason" value="{{ old('delay_reason', $RequestData2->delay_reason ?? '') }}">
            </div>

            <div class="form-group">
                <label for="day2" class="birth-label">58. day2</label>
                <input type="text" name="day2" class="birth-form-control" id="day2" value="{{ old('day2', $RequestData2->day2 ?? '') }}">
            </div>

            <div class="form-group">
                <label for="month2" class="birth-label">59. month2</label>
                <input type="text" name="month2" class="birth-form-control" id="month2" value="{{ old('month2', $RequestData2->month2 ?? '') }}">
            </div>

            <div class="form-group">
                <label for="year2" class="birth-label">60. year2</label>
                <input type="text" name="year2" class="birth-form-control" id="year2" value="{{ old('year2', $RequestData2->year2 ?? '') }}">
            </div>

            <div class="form-group">
                <label for="location" class="birth-label">61. location</label>
                <input type="text" name="location" class="birth-form-control" id="location" value="{{ old('location', $RequestData2->location ?? '') }}">
            </div>

            <div class="form-group">
                <label for="subscribed_day" class="birth-label">62. subscribed_day</label>
                <input type="text" name="subscribed_day" class="birth-form-control" id="subscribed_day" value="{{ old('subscribed_day', $RequestData2->subscribed_day ?? '') }}">
            </div>

            <div class="form-group">
                <label for="subscribed_month" class="birth-label">63. subscribed_month</label>
                <input type="text" name="subscribed_month" class="birth-form-control" id="subscribed_month" value="{{ old('subscribed_month', $RequestData2->subscribed_month ?? '') }}">
            </div>

            <div class="form-group">
                <label for="subscribed_year" class="birth-label">64. subscribed_year</label>
                <input type="text" name="subscribed_year" class="birth-form-control" id="subscribed_year" value="{{ old('subscribed_year', $RequestData2->subscribed_year ?? '') }}">
            </div>
            <div class="form-group">
                <label for="notary_location" class="birth-label">65. notary_location</label>
                <input type="text" name="notary_location" class="birth-form-control" id="notary_location" value="{{ old('notary_location', $RequestData2->notary_location ?? '') }}">
            </div>

            <div class="form-group">
                <label for="admin_officer_position" class="birth-label">66. admin_officer_position</label>
                <input type="text" name="admin_officer_position" class="birth-form-control" id="admin_officer_position" value="{{ old('admin_officer_position', $RequestData2->admin_officer_position ?? '') }}">
            </div>

            <div class="form-group">
                <label for="admin_officer_name" class="birth-label">67. admin_officer_name</label>
                <input type="text" name="admin_officer_name" class="birth-form-control" id="admin_officer_name" value="{{ old('admin_officer_name', $RequestData2->admin_officer_name ?? '') }}">
            </div>

            <div class="form-group">
                <label for="admin_officer_address" class="birth-label">68. admin_officer_address</label>
                <input type="text" name="admin_officer_address" class="birth-form-control" id="admin_officer_address" value="{{ old('admin_officer_address', $RequestData2->admin_officer_address ?? '') }}">
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
