
<!--Live Birth Start-->
   <!-- Background Image -->
   <img src="{{ public_path('img/Certificate-of-Live-Birth/page-0.jpg') }}" alt="Certificate of Live-Birth" style="width: 100%; height: auto; opacity: 0.8;"/>
    <form action="/home/services/form102/birthform" method="POST" id="birthForm">
            @csrf

            <div class="row">
                
                    <!-- Child Information -->
            <div class="form-group">
                <label for="child_first" class="birth-label">1. Child's First Name</label>
                <input type="text" name="child_first" class="birth-form-control" id="child_first" value="{{ old('child_first', $requests->child_first ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="child_middle" class="birth-label">2. Child's Middle Name</label>
                <input type="text" name="child_middle" class="birth-form-control" id="child_middle" value="{{ old('child_middle', $requests->child_middle ?? '') }}">
            </div>

            <div class="form-group">
                <label for="child_last" class="birth-label">3. Child's Last Name</label>
                <input type="text" name="child_last" class="birth-form-control" id="child_last" value="{{ old('child_last', $requests->child_last ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="child_sex" class="birth-label">4. Child's Sex</label>
                <input type="text" name="child_sex" class="birth-form-control" id="child_sex" value="{{ old('child_sex', $requests->child_sex ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="child_birthdate" class="birth-label">5. Date of Birth</label>
                <input type="date" name="child_birthdate" class="birth-form-control" id="child_birthdate" value="{{ old('child_birthdate', $requests->child_birthdate ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="child_birthplace" class="birth-label">6. Place of Birth (City/Municipality, Province)</label>
                <input type="text" name="child_birthplace" class="birth-form-control" id="child_birthplace" value="{{ old('child_birthplace', $requests->child_birthplace ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="multiple_birth" class="birth-label">7. Multiple Birth</label>
                <input type="text" name="multiple_birth" class="birth-form-control" id="multiple_birth" value="{{ old('multiple_birth', $requests->multiple_birth ?? '') }}">
            </div>

            <div class="form-group">
                <label for="birth_type" class="birth-label">8. Birth Type</label>
                <input type="text" name="birth_type" class="birth-form-control" id="birth_type" value="{{ old('birth_type', $requests->birth_type ?? '') }}">
            </div>

            <div class="form-group">
                <label for="birth_order" class="birth-label">9. Birth Order</label>
                <input type="number" name="birth_order" class="birth-form-control" id="birth_order" value="{{ old('birth_order', $requests->birth_order ?? '') }}">
            </div>

            <div class="form-group">
                <label for="birth_weight" class="birth-label">10. Birth Weight (kg)</label>
                <input type="number" name="birth_weight" class="birth-form-control" id="birth_weight" value="{{ old('birth_weight', $requests->birth_weight ?? '') }}">
            </div>

            <!-- Mother Information -->
            <div class="form-group">
                <label for="mother_first_name" class="birth-label">11. Mother's First Name</label>
                <input type="text" name="mother_first_name" class="birth-form-control" id="mother_first_name" value="{{ old('mother_first_name', $requests->mother_first_name ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="mother_middle_name" class="birth-label">12. Mother's Middle Name</label>
                <input type="text" name="mother_middle_name" class="birth-form-control" id="mother_middle_name" value="{{ old('mother_middle_name', $requests->mother_middle_name ?? '') }}">
            </div>

            <div class="form-group">
                <label for="mother_last_name" class="birth-label">13. Mother's Last Name</label>
                <input type="text" name="mother_last_name" class="birth-form-control" id="mother_last_name" value="{{ old('mother_last_name', $requests->mother_last_name ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="citizenship" class="birth-label">14. Mother's Citizenship</label>
                <input type="text" name="citizenship" class="birth-form-control" id="citizenship" value="{{ old('citizenship', $requests->citizenship ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="religion" class="birth-label">15. Mother's Religion</label>
                <input type="text" name="religion" class="birth-form-control" id="religion" value="{{ old('religion', $requests->religion ?? '') }}">
            </div>
            <div class="form-group">
                <label for="total number" class="birth-label">16. Total Number</label>
                <input type="text" name="total_number" class="birth-form-control" id="total number" value="{{ old('total_number', $requests->total_number ?? '') }}">
            </div>
            <div class="form-group">
                <label for="children" class="birth-label">17. Children</label>
                <input type="text" name="children" class="birth-form-control" id="children" value="{{ old('children', $requests->children ?? '') }}">
            </div>
            <div class="form-group">
                <label for="dead_child" class="birth-label">18. dead_child</label>
                <input type="text" name="dead_child" class="birth-form-control" id="dead_child" value="{{ old('dead_child', $requests->dead_child ?? '') }}">
            </div>
            <div class="form-group">
                <label for="occupation" class="birth-label">19. occupation</label>
                <input type="text" name="occupation" class="birth-form-control" id="dead_child" value="{{ old('occupation', $requests->occupation ?? '') }}">
            </div>
            <div class="form-group">
                <label for="mother_age" class="birth-label">20. mother_age</label>
                <input type="text" name="mother_age" class="birth-form-control" id="mother_age" value="{{ old('mother_age', $requests->mother_age ?? '') }}">
            </div>
            <div class="form-group">
                <label for="mother_city" class="birth-label">21. mother_city</label>
                <input type="text" name="mother_city" class="birth-form-control" id="mother_city" value="{{ old('mother_city', $requests->mother_city ?? '') }}">
            </div>
            <div class="form-group">
                <label for="mother_province" class="birth-label">22. mother_province</label>
                <input type="text" name="mother_province" class="birth-form-control" id="mother_province" value="{{ old('mother_province', $requests->mother_province ?? '') }}">
            </div>
            <div class="form-group">
                <label for="mother_country" class="birth-label">23. mother_country</label>
                <input type="text" name="mother_country" class="birth-form-control" id="mother_country" value="{{ old('mother_country', $requests->mother_country ?? '') }}">
            </div>
            <div class="form-group">
                <label for="father_first_name" class="birth-label">24. father_first_name</label>
                <input type="text" name="father_first_name" class="birth-form-control" id="father_first_name" value="{{ old('father_first_name', $requests->father_first_name ?? '') }}">
            </div>
            <div class="form-group">
                <label for="father_middle_name" class="birth-label">25. father_middle_name</label>
                <input type="text" name="father_middle_name" class="birth-form-control" id="father_middle_name" value="{{ old('father_middle_name', $requests->father_middle_name ?? '') }}">
            </div>
            <div class="form-group">
                <label for="father_last_name" class="birth-label">26. father_last_name</label>
                <input type="text" name="father_last_name" class="birth-form-control" id="father_last_name" value="{{ old('father_last_name', $requests->father_last_name ?? '') }}">
            </div>
            <div class="form-group">
                <label for="citizenship2" class="birth-label">27. citizenship2</label>
                <input type="text" name="citizenship2" class="birth-form-control" id="citizenship2" value="{{ old('citizenship2', $requests->citizenship2 ?? '') }}">
            </div>
            <div class="form-group">
                <label for="religion2" class="birth-label">28. religion2</label>
                <input type="text" name="religion2" class="birth-form-control" id="religion2" value="{{ old('religion2', $requests->religion2 ?? '') }}">
            </div>
            <div class="form-group">
                <label for="occupation2" class="birth-label">29. occupation2</label>
                <input type="text" name="occupation2" class="birth-form-control" id="occupation2" value="{{ old('occupation2', $requests->occupation2 ?? '') }}">
            </div>
            <div class="form-group">
                <label for="father_age" class="birth-label">30. father_age</label>
                <input type="text" name="father_age" class="birth-form-control" id="father_age" value="{{ old('father_age', $requests->father_age ?? '') }}">
            </div>
            <div class="form-group">
                <label for="father_street" class="birth-label">31. father_street</label>
                <input type="text" name="father_street" class="birth-form-control" id="father_street" value="{{ old('father_street', $requests->father_street ?? '') }}">
            </div>
            <div class="form-group">
                <label for="father_city" class="birth-label">32. father_city</label>
                <input type="text" name="father_city" class="birth-form-control" id="father_city" value="{{ old('father_city', $requests->father_city ?? '') }}">
            </div>
            <div class="form-group">
                <label for="father_province" class="birth-label">33. father_province</label>
                <input type="text" name="father_province" class="birth-form-control" id="father_province" value="{{ old('father_province', $requests->father_province ?? '') }}">
            </div>
            <div class="form-group">
                <label for="father_country" class="birth-label">34. father_country</label>
                <input type="text" name="father_country" class="birth-form-control" id="father_country" value="{{ old('father_country', $requests->father_country ?? '') }}">
            </div>
            <div class="form-group">
                <label for="marriage_date" class="birth-label">35. marriage_date</label>
                <input type="text" name="marriage_date" class="birth-form-control" id="marriage_date" value="{{ old('marriage_date', $requests->marriage_date ?? '') }}">
            </div>
            <div class="form-group">
                <label for="marriage_street" class="birth-label">36. marriage_street</label>
                <input type="text" name="marriage_street" class="birth-form-control" id="marriage_street" value="{{ old('marriage_street', $requests->marriage_street ?? '') }}">
            </div>
            <div class="form-group">
                <label for="marriage_municipality" class="birth-label">37. marriage_municipality</label>
                <input type="text" name="marriage_municipality" class="birth-form-control" id="marriage_municipality" value="{{ old('marriage_municipality', $requests->marriage_municipality ?? '') }}">
            </div>
            <div class="form-group">
                <label for="marriage_province" class="birth-label">38. marriage_province</label>
                <input type="text" name="marriage_province" class="birth-form-control" id="marriage_province" value="{{ old('marriage_province', $requests->marriage_province ?? '') }}">
            </div>
            <div class="form-group">
                <label for="marriage_country" class="birth-label">39. marriage_country</label>
                <input type="text" name="marriage_country" class="birth-form-control" id="marriage_country" value="{{ old('marriage_country', $requests->marriage_country ?? '') }}">
            </div>
            <div class="form-group">
                <label for="attendant_role" class="birth-label">40. attendant_role</label>
                <input type="text" name="attendant_role" class="birth-form-control" id="attendant_role" value="{{ old('attendant_role', $requests->attendant_role ?? '') }}">
            </div>
            <div class="form-group">
                <label for="other_attendant_role" class="birth-label">41. other_attendant_role</label>
                <input type="text" name="other_attendant_role" class="birth-form-control" id="other_attendant_role" value="{{ old('other_attendant_role', $requests->other_attendant_role ?? '') }}">
            </div>
            <div class="form-group">
                <label for="father_name" class="birth-label">42. father_name</label>
                <input type="text" name="father_name" class="birth-form-control" id="father_name" value="{{ old('father_name', $requests->father_name ?? '') }}">
            </div>
            <div class="form-group">
                <label for="mother_name" class="birth-label">43. mother_name</label>
                <input type="text" name="mother_name" class="birth-form-control" id="mother_name" value="{{ old('mother_name', $requests->mother_name ?? '') }}">
            </div>
            <div class="form-group">
                <label for="name_child" class="birth-label">44. name_child</label>
                <input type="text" name="name_child" class="birth-form-control" id="name_child" value="{{ old('name_child', $requests->name_child ?? '') }}">
            </div>
            <div class="form-group">
                <label for="birth_date" class="birth-label">45. birth_date</label>
                <input type="text" name="birth_date" class="birth-form-control" id="birth_date" value="{{ old('birth_date', $requests->birth_date ?? '') }}">
            </div>
            <div class="form-group">
                <label for="birth_place" class="birth-label">46. birth_place</label>
                <input type="text" name="birth_place" class="birth-form-control" id="birth_place" value="{{ old('birth_place', $requests->birth_place ?? '') }}">
            </div>
            <div class="form-group">
                <label for="signature1" class="birth-label">47. signature1</label>
                <input type="text" name="signature1" class="birth-form-control" id="signature1" value="{{ old('signature1', $requests->signature1 ?? '') }}">
            </div>
            <div class="form-group">
                <label for="signature2" class="birth-label">48. signature2</label>
                <input type="text" name="signature2" class="birth-form-control" id="signature2" value="{{ old('signature2', $requests->signature2 ?? '') }}">
            </div>
            </div>
        </form>
<!--Live Birth End-->