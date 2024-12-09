@extends('layouts.layout')

@section('contents')
<style>
.child-container{
        position: relative;
        text-align: center;
        color: white;
    }

    .childname{
        position: absolute;
        bottom: 8px;
        left: -265px;
        right: 40px;
        top: 265px;
    }

    .childmiddle{
        position: absolute;
        bottom: 8px;
        left: -5px;
        right: 40px;
        top: 265px;
    }

    .childlast{
        position: absolute;
        bottom: 8px;
        left: 250px;
        right: 40px;
        top: 265px;
    }

    .childsex{
        position: absolute;
        bottom: 8px;
        left: -340px;
        right: 40px;
        top: 312px;
    }

    .childbirth{
        position: absolute;
        bottom: 8px;
        left: 180px;
        right: 40px;
        top: 315px;
    }

    .childplace{
        position: absolute;
        bottom: 8px;
        left: 50px;
        right: 40px;
        top: 363px;
    }

    .multiple{
        position: absolute;
        bottom: 8px;
        left: -335px;
        right: 40px;
        top: 430px;
    }

    .type{
        position: absolute;
        bottom: 8px;
        left: -70px;
        right: 40px;
        top: 430px;
    }

    .order{
        position: absolute;
        bottom: 8px;
        left: 170px;
        right: 40px;
        top: 430px;
    }

    .weight{
        position: absolute;
        bottom: 8px;
        left: 350px;
        right: 40px;
        top: 430px;
    }

    .mothername{
        position: absolute;
        bottom: 8px;
        left: -255px;
        right: 40px;
        top: 485px;
    }

    .mothermiddle{
        position: absolute;
        bottom: 8px;
        left: -5px;
        right: 40px;
        top: 486px;
    }

    .motherlast{
        position: absolute;
        bottom: 8px;
        left: 280px;
        right: 40px;
        top: 487px;
    }

    .mother-citizenship{
        position: absolute;
        bottom: 8px;
        left: -255px;
        right: 40px;
        top: 535px;
    }

    .mother-religion{
        position: absolute;
        bottom: 8px;
        left: 150px;
        right: 40px;
        top: 537px;
    }

    .total-number{
        position: absolute;
        bottom: 8px;
        left: -360px;
        right: 40px;
        top: 598px;
    }

   .children{
        position: absolute;
        bottom: 8px;
        left: -230px;
        right: 40px;
        top: 598px;
    }

    .deadchild{
        position: absolute;
        bottom: 8px;
        left: -60px;
        right: 40px;
        top: 598px;
    }

    .mother-occupation{
        position: absolute;
        bottom: 8px;
        left: 100px;
        right: 40px;
        top: 598px;
    }

    .mother-age{
        position: absolute;
        bottom: 8px;
        left: 370px;
        right: 40px;
        top: 598px;
    }

    .mother-street{
        position: absolute;
        bottom: 8px;
        left: -220px;
        right: 40px;
        top: 650px;
    }

    .mother-city{
        position: absolute;
        bottom: 8px;
        left: 10px;
        right: 40px;
        top: 650px;
    }

    .mother-province{
        position: absolute;
        bottom: 8px;
        left: 180px;
        right: 40px;
        top: 650px;
    }

    .mother-country{
        position: absolute;
        bottom: 8px;
        left: 350px;
        right: 40px;
        top: 650px;
    }

    .fathername{
        position: absolute;
        bottom: 8px;
        left: -260px;
        right: 40px;
        top: 706px;
    }

    .fathermiddle{
        position: absolute;
        bottom: 8px;
        left: 6px;
        right: 40px;
        top: 706px;
    }

    .fatherlast{
        position: absolute;
        bottom: 8px;
        left: 270px;
        right: 40px;
        top: 706px;
    }

    .father-citizenship{
        position: absolute;
        bottom: 8px;
        left: -320px;
        right: 40px;
        top: 768px;
    }

    .father-religion{
        position: absolute;
        bottom: 8px;
        left: -100px;
        right: 40px;
        top: 768px;
    }

    .father-occupation{
        position: absolute;
        bottom: 8px;
        left: 170px;
        right: 40px;
        top: 768px;
    }

    .father-age{
        position: absolute;
        bottom: 8px;
        left: 350px;
        right: 40px;
        top: 768px;
    }

    .father-street{
        position: absolute;
        bottom: 8px;
        left: -220px;
        right: 40px;
        top: 820px;
    }

    .father-city{
        position: absolute;
        bottom: 8px;
        left: 10px;
        right: 40px;
        top: 820px;
    }

    .father-province{
        position: absolute;
        bottom: 8px;
        left: 190px;
        right: 40px;
        top: 820px;
    }

    .father-country{
        position: absolute;
        bottom: 8px;
        left: 350px;
        right: 40px;
        top: 820px;
    }

    .marriage-date{
        position: absolute;
        bottom: 8px;
        left: -270px;
        right: 40px;
        top: 899px;
    }

    .marriage-street{
        position: absolute;
        bottom: 8px;
        left: 380px;
        right: 40px;
        top: 899px;
    }

    .marriage-municipality{
        position: absolute;
        bottom: 8px;
        left: 60px;
        right: 40px;
        top: 899px;
    }

    .marriage-province{
        position: absolute;
        bottom: 8px;
        left: 230px;
        right: 40px;
        top: 899px;
    }

    .marriage-country{
        position: absolute;
        bottom: 8px;
        left: 380px;
        right: 40px;
        top: 899px;
    }

    .attendant-role{
        position: absolute;
        bottom: 8px;
        left: -200px;
        right: 40px;
        top: 957px;
    }

    .other-role{
        position: absolute;
        bottom: 8px;
        left: 390px;
        right: 40px;
        top: 957px;
    }

    .fathersname{
        position: absolute;
        bottom: 8px;
        left: -220px;
        right: 40px;
        top: 1885px;
    }

    .mothersname{
        position: absolute;
        bottom: 8px;
        left: 200px;
        right: 40px;
        top: 1891px;
    }

    .name-child{
        position: absolute;
        bottom: 8px;
        left: 100px;
        right: 40px;
        top: 1913px;
    }

    .birth-date{
        position: absolute;
        bottom: 8px;
        left: -250px;
        right: 40px;
        top: 1930px;
    }

    .birth-place{
        position: absolute;
        bottom: 8px;
        left: 80px;
        right: 40px;
        top: 1935px;
    }

    .signature1{
        position: absolute;
        bottom: 8px;
        left: -210px;
        right: 40px;
        top: 2038px;
    }

    .signature2{
        position: absolute;
        bottom: 8px;
        left: 230px;
        right: 40px;
        top: 2041px;
    }

</style>

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<div class="container birth-form-page" style="padding: 20px; margin-top: 50px; margin-bottom: 50px; position: relative; text-align: center;">
    <!-- Background Image -->
    <div class="child-container" style="position: relative; overflow: hidden;">
    <img src="/img/Certificate-of-Live-Birth/page-0.jpg" alt="Certificate of Live-Birth" style="width: 100%; height: auto; opacity: 0.8;">
    <img src="/img/Certificate-of-Live-Birth/page-1.jpg" alt="Certificate of Live-Birth" style="width: 100%; height: auto; opacity: 0.8;">

    <form action="/home/services/form102/birthform" method="POST" id="birthForm">
            @csrf


            <div class="row">
                
                    <!-- Child Information -->
            <div class="childname">
                <label for="child_first" class="birth-label"></label>
                <input type="text" name="child_first" class="birth-form-control" style="width: 150px; height: 25px" id="child_first" value="{{ old('child_first', $RequestData->child_first ?? '') }}" required>
            </div>

            <div class="childmiddle">
                <label for="child_middle" class="birth-label"></label>
                <input type="text" name="child_middle" class="birth-form-control" style="width: 150px; height: 25px" id="child_middle" value="{{ old('child_middle', $RequestData->child_middle ?? '') }}">
            </div>

            <div class="childlast">
                <label for="child_last" class="birth-label"></label>
                <input type="text" name="child_last" class="birth-form-control" style="width: 150px; height: 25px" id="child_last" value="{{ old('child_last', $RequestData->child_last ?? '') }}" required>
            </div>

            <div class="childsex">
                <label for="child_sex" class="birth-label"></label>
                <input type="text" name="child_sex" class="birth-form-control" style="width: 150px; height: 25px" id="child_sex" value="{{ old('child_sex', $RequestData->child_sex ?? '') }}" required>
            </div>

            <div class="childbirth">
                <label for="child_birthdate" class="birth-label"></label>
                <input type="date" name="child_birthdate" class="birth-form-control" style="width: 150px; height: 25px" id="child_birthdate" value="{{ old('child_birthdate', $RequestData->child_birthdate ?? '') }}" required>
            </div>

            <div class="childplace">
                <label for="child_birthplace" class="birth-label"></label>
                <input type="text" name="child_birthplace" class="birth-form-control" style="width: 500px; height: 25px" id="child_birthplace" value="{{ old('child_birthplace', $RequestData->child_birthplace ?? '') }}" required>
            </div>

            <div class="multiple">
                <label for="multiple_birth" class="birth-label"></label>
                <input type="text" name="multiple_birth" class="birth-form-control" style="width: 150px; height: 25px" id="multiple_birth" value="{{ old('multiple_birth', $RequestData->multiple_birth ?? '') }}">
            </div>

            <div class="type">
                <label for="birth_type" class="birth-label"></label>
                <input type="text" name="birth_type" class="birth-form-control" style="width: 150px; height: 25px" id="birth_type" value="{{ old('birth_type', $RequestData->birth_type ?? '') }}">
            </div>

            <div class="order">
                <label for="birth_order" class="birth-label"></label>
                <input type="number" name="birth_order" class="birth-form-control" style="width: 90px; height: 25px" id="birth_order" value="{{ old('birth_order', $RequestData->birth_order ?? '') }}">
            </div>

            <div class="weight">
                <label for="birth_weight" class="birth-label"></label>
                <input type="number" name="birth_weight" class="birth-form-control" style="width: 90px; height: 25px" id="birth_weight" value="{{ old('birth_weight', $RequestData->birth_weight ?? '') }}">
            </div>

            <!-- Mother Information -->
            <div class="mothername">
                <label for="mother_first_name" class="birth-label"></label>
                <input type="text" name="mother_first_name" class="birth-form-control" style="width: 150px; height: 25px" id="mother_first_name" value="{{ old('mother_first_name', $RequestData->mother_first_name ?? '') }}" required>
            </div>

            <div class="mothermiddle">
                <label for="mother_middle_name" class="birth-label"></label>
                <input type="text" name="mother_middle_name" class="birth-form-control" style="width: 150px; height: 25px" id="mother_middle_name" value="{{ old('mother_middle_name', $RequestData->mother_middle_name ?? '') }}">
            </div>

            <div class="motherlast">
                <label for="mother_last_name" class="birth-label"></label>
                <input type="text" name="mother_last_name" class="birth-form-control" style="width: 150px; height: 25px" id="mother_last_name" value="{{ old('mother_last_name', $RequestData->mother_last_name ?? '') }}" required>
            </div>

            <div class="mother-citizenship">
                <label for="citizenship" class="birth-label"></label>
                <input type="text" name="citizenship" class="birth-form-control" style="width: 150px; height: 25px" id="citizenship" value="{{ old('citizenship', $RequestData->citizenship ?? '') }}" required>
            </div>

            <div class="mother-religion">
                <label for="religion" class="birth-label"></label>
                <input type="text" name="religion" class="birth-form-control" style="width: 150px; height: 25px" id="religion" value="{{ old('religion', $RequestData->religion ?? '') }}">
            </div>
            <div class="total-number">
                <label for="total number" class="birth-label"></label>
                <input type="text" name="total_number" class="birth-form-control" style="width: 90px; height: 25px" id="total number" value="{{ old('total_number', $RequestData->total_number ?? '') }}">
            </div>
            <div class="children">
                <label for="children" class="birth-label"></label>
                <input type="text" name="children" class="birth-form-control" style="width: 90px; height: 25px" id="children" value="{{ old('children', $RequestData->children ?? '') }}">
            </div>
            <div class="deadchild">
                <label for="dead_child" class="birth-label"></label>
                <input type="text" name="dead_child" class="birth-form-control" style="width: 90px; height: 25px" id="dead_child" value="{{ old('dead_child', $RequestData->dead_child ?? '') }}">
            </div>
            <div class="mother-occupation">
                <label for="occupation" class="birth-label"></label>
                <input type="text" name="occupation" class="birth-form-control" style="width: 150px; height: 25px" id="dead_child" value="{{ old('occupation', $RequestData->occupation ?? '') }}">
            </div>
            <div class="mother-age">
                <label for="mother_age" class="birth-label"></label>
                <input type="text" name="mother_age" class="birth-form-control" style="width: 90px; height: 25px" id="mother_age" value="{{ old('mother_age', $RequestData->mother_age ?? '') }}">
            </div>
            <div class="mother-street">
                <label for="mother_street" class="birth-label"></label>
                <input type="text" name="mother_street" class="birth-form-control" style="width: 150px; height: 25px" id="mother_street" value="{{ old('mother_street', $RequestData->mother_street ?? '') }}">
            </div>
            <div class="mother-city">
                <label for="mother_city" class="birth-label"></label>
                <input type="text" name="mother_city" class="birth-form-control" style="width: 150px; height: 25px" id="mother_city" value="{{ old('mother_city', $RequestData->mother_city ?? '') }}">
            </div>
            <div class="mother-province">
                <label for="mother_province" class="birth-label"></label>
                <input type="text" name="mother_province" class="birth-form-control" style="width: 150px; height: 25px" id="mother_province" value="{{ old('mother_province', $RequestData->mother_province ?? '') }}">
            </div>
            <div class="mother-country">
                <label for="mother_country" class="birth-label"></label>
                <input type="text" name="mother_country" class="birth-form-control" style="width: 150px; height: 25px" id="mother_country" value="{{ old('mother_country', $RequestData->mother_country ?? '') }}">
            </div>
            <div class="fathername">
                <label for="father_first_name" class="birth-label"></label>
                <input type="text" name="father_first_name" class="birth-form-control" style="width: 150px; height: 25px" id="father_first_name" value="{{ old('father_first_name', $RequestData->father_first_name ?? '') }}">
            </div>
            <div class="fathermiddle">
                <label for="father_middle_name" class="birth-label"></label>
                <input type="text" name="father_middle_name" class="birth-form-control" style="width: 150px; height: 25px" id="father_middle_name" value="{{ old('father_middle_name', $RequestData->father_middle_name ?? '') }}">
            </div>
            <div class="fatherlast">
                <label for="father_last_name" class="birth-label"></label>
                <input type="text" name="father_last_name" class="birth-form-control" style="width: 150px; height: 25px" id="father_last_name" value="{{ old('father_last_name', $RequestData->father_last_name ?? '') }}">
            </div>
            <div class="father-citizenship">
                <label for="citizenship2" class="birth-label"></label>
                <input type="text" name="citizenship2" class="birth-form-control" style="width: 150px; height: 25px" id="citizenship2" value="{{ old('citizenship2', $RequestData->citizenship2 ?? '') }}">
            </div>
            <div class="father-religion">
                <label for="religion2" class="birth-label"></label>
                <input type="text" name="religion2" class="birth-form-control" style="width: 150px; height: 25px" id="religion2" value="{{ old('religion2', $RequestData->religion2 ?? '') }}">
            </div>
            <div class="father-occupation">
                <label for="occupation2" class="birth-label"></label>
                <input type="text" name="occupation2" class="birth-form-control" style="width: 150px; height: 25px" id="occupation2" value="{{ old('occupation2', $RequestData->occupation2 ?? '') }}">
            </div>
            <div class="father-age">
                <label for="father_age" class="birth-label"></label>
                <input type="text" name="father_age" class="birth-form-control" style="width: 90px; height: 25px" id="father_age" value="{{ old('father_age', $RequestData->father_age ?? '') }}">
            </div>
            <div class="father-street">
                <label for="father_street" class="birth-label"></label>
                <input type="text" name="father_street" class="birth-form-control" style="width: 150px; height: 25px" id="father_street" value="{{ old('father_street', $RequestData->father_street ?? '') }}">
            </div>
            <div class="father-city">
                <label for="father_city" class="birth-label"></label>
                <input type="text" name="father_city" class="birth-form-control" style="width: 150px; height: 25px" id="father_city" value="{{ old('father_city', $RequestData->father_city ?? '') }}">
            </div>
            <div class="father-province">
                <label for="father_province" class="birth-label"></label>
                <input type="text" name="father_province" class="birth-form-control" style="width: 150px; height: 25px" id="father_province" value="{{ old('father_province', $RequestData->father_province ?? '') }}">
            </div>
            <div class="father-country">
                <label for="father_country" class="birth-label"></label>
                <input type="text" name="father_country" class="birth-form-control" style="width: 150px; height: 25px" id="father_country" value="{{ old('father_country', $RequestData->father_country ?? '') }}">
            </div>
            <div class="marriage-date">
                <label for="marriage_date" class="birth-label"></label>
                <input type="text" name="marriage_date" class="birth-form-control" style="width: 150px; height: 25px" id="marriage_date" value="{{ old('marriage_date', $RequestData->marriage_date ?? '') }}">
            </div>
            <div class="marriage-street">
                <label for="marriage_street" class="birth-label"></label>
                <input type="text" name="marriage_street" class="birth-form-control" style="width: 120px; height: 25px" id="marriage_street" value="{{ old('marriage_street', $RequestData->marriage_street ?? '') }}">
            </div>
            <div class="marriage-municipality">
                <label for="marriage_municipality" class="birth-label"></label>
                <input type="text" name="marriage_municipality" class="birth-form-control" style="width: 120px; height: 25px" id="marriage_municipality" value="{{ old('marriage_municipality', $RequestData->marriage_municipality ?? '') }}">
            </div>
            <div class="marriage-province">
                <label for="marriage_province" class="birth-label"></label>
                <input type="text" name="marriage_province" class="birth-form-control" style="width: 120px; height: 25px" id="marriage_province" value="{{ old('marriage_province', $RequestData->marriage_province ?? '') }}">
            </div>
            <div class="marriage-country">
                <label for="marriage_country" class="birth-label"></label>
                <input type="text" name="marriage_country" class="birth-form-control" style="width: 120px; height: 25px" id="marriage_country" value="{{ old('marriage_country', $RequestData->marriage_country ?? '') }}">
            </div>
            <div class="attendant-role">
                <label for="attendant_role" class="birth-label"></label>
                <input type="text" name="attendant_role" class="birth-form-control" style="width: 40px; height: 25px" id="attendant_role" value="{{ old('attendant_role', $RequestData->attendant_role ?? '') }}">
            </div>
            <div class="other-role">
                <label for="other_attendant_role" class="birth-label"></label>
                <input type="text" name="other_attendant_role" class="birth-form-control" style="width: 100px; height: 25px" id="other_attendant_role" value="{{ old('other_attendant_role', $RequestData->other_attendant_role ?? '') }}">
            </div>
            <div class="fathersname">
                <label for="father_name" class="birth-label"></label>
                <input type="text" name="father_name" class="birth-form-control" style="width: 200px; height: 20px" id="father_name" value="{{ old('father_name', $RequestData->father_name ?? '') }}">
            </div>
            <div class="mothersname">
                <label for="mother_name" class="birth-label"></label>
                <input type="text" name="mother_name" class="birth-form-control" style="width: 200px; height: 20px" id="mother_name" value="{{ old('mother_name', $RequestData->mother_name ?? '') }}">
            </div>
            <div class="name-child">
                <label for="name_child" class="birth-label"></label>
                <input type="text" name="name_child" class="birth-form-control" style="width: 200px; height: 20px" id="name_child" value="{{ old('name_child', $RequestData->name_child ?? '') }}">
            </div>
            <div class="birth-date">
                <label for="birth_date" class="birth-label"></label>
                <input type="text" name="birth_date" class="birth-form-control" style="width: 120px; height: 20px" id="birth_date" value="{{ old('birth_date', $RequestData->birth_date ?? '') }}">
            </div>
            <div class="birth-place">
                <label for="birth_place" class="birth-label"></label>
                <input type="text" name="birth_place" class="birth-form-control" style="width: 300px; height: 20px" id="birth_place" value="{{ old('birth_place', $RequestData->birth_place ?? '') }}">
            </div>
            <div class="signature1">
                <label for="signature1" class="birth-label"></label>
                <input type="text" name="signature1" class="birth-form-control" style="width: 200px; height: 25px" id="signature1" value="{{ old('signature1', $RequestData->signature1 ?? '') }}">
            </div>
            <div class="signature2">
                <label for="signature2" class="birth-label"></label>
                <input type="text" name="signature2" class="birth-form-control" style="width: 200px; height: 25px" id="signature2" value="{{ old('signature2', $RequestData->signature2 ?? '') }}">
            </div>
                <div class="submit-button">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>

    </div>
</div>

@endsection
