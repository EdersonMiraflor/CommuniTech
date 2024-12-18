<!DOCTYPE html>
<html>
<head>
    <title>Display Records</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .table-container {
            overflow-x: auto;
            max-height: 400px; /* Adjust the height as needed */
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;  /* Reduce border size */
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .cell-grid {
            background-image: linear-gradient(to right, #ccc 1px, transparent 1px),
                              linear-gradient(to bottom, #ccc 1px, transparent 1px);
            background-size: 20px 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Display Records</h1>
        <form method="POST" action="{{ route('display.records.search') }}">
            @csrf
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="category">Select Category:</label>
                    <select name="category" id="category" class="form-control" required>
                        <option value="">Select Category</option>
                        <option value="1" {{ $category == '1' ? 'selected' : '' }}>Birth Certificate</option>
                        <option value="2" {{ $category == '2' ? 'selected' : '' }}>Marriage Certificate</option>
                        <option value="3" {{ $category == '3' ? 'selected' : '' }}>Death Certificate</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="search">Search:</label>
                    <input type="text" name="search" id="search" class="form-control" value="{{ $search }}">
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    <div class="table-wrapper">
    <!-- Scrollbar at the top -->
    <div class="scroll-wrapper">
        <div class="scroll-area"></div>
    </div>

 @if ($category == '1' && count($records) > 0)
    <h3>Birth Certificate Records</h3>
    <div class="table-container">
    <table class="table table-bordered mt-3">
    <thead>
    <tr>
        <th>#</th>
        <th>User Name</th>
        <th>Child's First Name</th>
        <th>Child's Middle Name</th>
        <th>Child's Last Name</th>
        <th>Child's Sex</th>
        <th>Child's Birthdate</th>
        <th>Child's Birthplace</th>
        <th>Multiple Birth</th>
        <th>Birth Type</th>
        <th>Birth Order</th>
        <th>Birth Weight</th>
        <th>Mother's First Name</th>
        <th>Mother's Middle Name</th>
        <th>Mother's Last Name</th>
        <th>Mother's Citizenship</th>
        <th>Mother's Religion</th>
        <th>Total Number of Children</th>
        <th>Children</th>
        <th>Dead Child</th>
        <th>Mother's Occupation</th>
        <th>Mother's Age</th>
        <th>Mother's Street</th>
        <th>Mother's City</th>
        <th>Mother's Province</th>
        <th>Mother's Country</th>
        <th>Father's First Name</th>
        <th>Father's Middle Name</th>
        <th>Father's Last Name</th>
        <th>Father's Citizenship</th>
        <th>Father's Religion</th>
        <th>Father's Occupation</th>
        <th>Father's Age</th>
        <th>Father's Street</th>
        <th>Father's City</th>
        <th>Father's Province</th>
        <th>Father's Country</th>
        <th>Marriage Date</th>
        <th>Marriage Street</th>
        <th>Marriage Municipality</th>
        <th>Marriage Province</th>
        <th>Marriage Country</th>
        <th>Attendant Role</th>
        <th>Other Attendant Role</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>Child's Name</th>
        <th>Birth Date</th>
        <th>Birth Place</th>
        <th>Signature 1</th>
        <th>Signature 2</th>
    </tr>
</thead>

<tbody>
    @foreach ($records as $index => $record)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $record->user_name }}</td>
            <td>{{ $record->child_first }} {{ $record->child_middle_name }} {{ $record->child_last }}</td>
            <td>{{ $record->mother_first_name }} {{ $record->mother_middle_name }} {{ $record->mother_last_name }}</td>
            <td>{{ $record->father_first_name }} {{ $record->father_middle_name }} {{ $record->father_last_name }}</td>
            <td>{{ $record->child_birthdate }}</td>
            <td>{{ $record->child_birthplace }}</td>
            <td>{{ $record->multiple_birth }}</td>
            <td>{{ $record->birth_type }}</td>
            <td>{{ $record->birth_order }}</td>
            <td>{{ $record->birth_weight }}</td>
            <td>{{ $record->citizenship }}</td>
            <td>{{ $record->religion }}</td>
            <td>{{ $record->total_number }}</td>
            <td>{{ $record->children }}</td>
            <td>{{ $record->dead_child }}</td>
            <td>{{ $record->occupation }}</td>
            <td>{{ $record->mother_age }}</td>
            <td>{{ $record->mother_street }}</td>
            <td>{{ $record->mother_city }}</td>
            <td>{{ $record->mother_province }}</td>
            <td>{{ $record->mother_country }}</td>
            <td>{{ $record->father_first_name }} {{ $record->father_middle_name }} {{ $record->father_last_name }}</td>
            <td>{{ $record->citizenship2 }}</td>
            <td>{{ $record->religion2 }}</td>
            <td>{{ $record->occupation2 }}</td>
            <td>{{ $record->father_age }}</td>
            <td>{{ $record->father_street }}</td>
            <td>{{ $record->father_city }}</td>
            <td>{{ $record->father_province }}</td>
            <td>{{ $record->father_country }}</td>
            <td>{{ $record->marriage_date }}</td>
            <td>{{ $record->marriage_street }}</td>
            <td>{{ $record->marriage_municipality }}</td>
            <td>{{ $record->marriage_province }}</td>
            <td>{{ $record->marriage_country }}</td>
            <td>{{ $record->attendant_role }}</td>
            <td>{{ $record->other_attendant_role }}</td>
            <td>{{ $record->father_name }}</td>
            <td>{{ $record->mother_name }}</td>
            <td>{{ $record->name_child }}</td>
            <td>{{ $record->birth_date }}</td>
            <td>{{ $record->birth_place }}</td>
            <td>{{ $record->signature1 }}</td>
            <td>{{ $record->signature2 }}</td>
        </tr>
    @endforeach
</tbody>

</table>
</div>
        @elseif ($category == '2' && count($records) > 0)
            <h3>Marriage Certificate Records</h3>
            <div class="table-container">
            <table class="table table-bordered mt-3">
            <thead>
    <tr>
        <th>user_name</th>
        <th>husband_first_name</th>
        <th>husband_middle_name</th>
        <th>husband_last_name</th>
        <th>husband_birthdate</th>
        <th>husband_age</th>
        <th>husband_city_municipality</th>
        <th>husband_province</th>
        <th>husband_country</th>
        <th>husband_citizenship</th>
        <th>husband_residence</th>
        <th>husband_religion</th>
        <th>husband_father_first_name</th>
        <th>husband_father_middle_name</th>
        <th>husband_father_last_name</th>
        <th>husband_father_citizenship</th>
        <th>husband_mother_first_name</th>
        <th>husband_mother_middle_name</th>
        <th>husband_mother_maiden_last_name</th>
        <th>husband_mother_citizenship</th>
        <th>wife_first_name</th>
        <th>wife_middle_name</th>
        <th>wife_last_name</th>
        <th>wife_birthdate</th>
        <th>wife_age</th>
        <th>wife_city_municipality</th>
        <th>wife_province</th>
        <th>wife_country</th>
        <th>wife_citizenship</th>
        <th>wife_residence</th>
        <th>wife_religion</th>
        <th>wife_father_first_name</th>
        <th>wife_father_middle_name</th>
        <th>wife_father_last_name</th>
        <th>wife_father_citizenship</th>
        <th>wife_mother_first_name</th>
        <th>wife_mother_middle_name</th>
        <th>wife_mother_maiden_last_name</th>
        <th>wife_mother_citizenship</th>
        <th>marriage_date1</th>
        <th>marriage_place</th>
        <th>officiant_name</th>
        <th>officiant_position</th>
        <th>witnesses</th>
        <th>affiant_name</th>
        <th>address</th>
        <th>marriage_registration_for</th>
        <th>marriage_date2</th>
        <th>ceremony_type</th>
        <th>license_required</th>
        <th>license_no</th>
        <th>license_date</th>
        <th>license_place</th>
        <th>license_required2</th>
        <th>article_no</th>
        <th>citizenship</th>
        <th>spouse_citizenship</th>
        <th>delay_reason</th>
        <th>day2</th>
        <th>month2</th>
        <th>year2</th>
        <th>location</th>
        <th>subscribed_day</th>
        <th>subscribed_month</th>
        <th>subscribed_year</th>
        <th>notary_location</th>
        <th>admin_officer_position</th>
        <th>admin_officer_name</th>
        <th>admin_officer_address</th>
    </tr>
</thead>

<tbody>
    @foreach ($records as $record)
        <tr>
            <td>{{ $record->user_name }}</td>
            <td>{{ $record->husband_first_name }} </td>
            <td>{{ $record->husband_middle_name }}</td>
            <td>{{ $record->husband_last_name }}</td>
            <td>{{ $record->husband_birthdate }}</td>
            <td>{{ $record->husband_age }}</td>
            <td>{{ $record->husband_city_municipality }}</td>
            <td>{{ $record->multiple_birth }}</td>
            <td>{{ $record->husband_province }} </td>
            <td>{{ $record->husband_country }}</td>
            <td>{{ $record->husband_citizenship }}</td>
            <td>{{ $record->husband_residence }}</td>
            <td>{{ $record->husband_religion }}</td>
            <td>{{ $record->husband_father_first_name }}</td>
            <td>{{ $record->husband_father_middle_name }} </td>
            <td>{{ $record->husband_father_last_name }}</td>
            <td>{{ $record->husband_father_citizenship }}</td>
            <td>{{ $record->husband_mother_first_name }}</td>
            <td>{{ $record->husband_mother_middle_name }}</td>
            <td>{{ $record->husband_mother_maiden_last_name }}</td>
            <td>{{ $record->husband_mother_citizenship }} </td>
            <td>{{ $record->wife_first_name }}</td>
            <td>{{ $record->wife_middle_name }}</td>
            <td>{{ $record->wife_last_name }}</td>
            <td>{{ $record->wife_birthdate }}</td>
            <td>{{ $record->wife_age }}</td>
            <td>{{ $record->wife_city_municipality }} </td>
            <td>{{ $record->wife_province }}</td>
            <td>{{ $record->wife_country }}</td>
            <td>{{ $record->wife_citizenship }}</td>
            <td>{{ $record->wife_residence }}</td>

            <td>{{ $record->wife_religion }}</td>
            <td>{{ $record->wife_father_first_name }}</td>
            <td>{{ $record->wife_father_middle_name }} </td>
            <td>{{ $record->wife_father_last_name }}</td>
            <td>{{ $record->wife_father_citizenship }}</td>
            <td>{{ $record->wife_mother_first_name }}</td>
            <td>{{ $record->wife_mother_middle_name }}</td>
            <td>{{ $record->wife_mother_maiden_last_name }}</td>
            <td>{{ $record->wife_mother_citizenship }} </td>
            <td>{{ $record->marriage_date1 }}</td>
            <td>{{ $record->marriage_place }}</td>
            <td>{{ $record->officiant_name }}</td>
            <td>{{ $record->officiant_position }}</td>
            <td>{{ $record->witnesses }}</td>
            <td>{{ $record->affiant_name }}</td>
            <td>{{ $record->address }} </td>
            <td>{{ $record->marriage_registration_for }}</td>
            <td>{{ $record->marriage_date2 }}</td>
            <td>{{ $record->ceremony_type }}</td>
            <td>{{ $record->license_required }}</td>
            <td>{{ $record->license_no }}</td>
            <td>{{ $record->license_date }} </td>
            <td>{{ $record->license_place }}</td>
            <td>{{ $record->license_required2 }}</td>
            <td>{{ $record->article_no }}</td>
            <td>{{ $record->citizenship }}</td>
            <td>{{ $record->spouse_citizenship }}</td>
            <td>{{ $record->delay_reason }}</td>
            <td>{{ $record->day2 }} </td>
            <td>{{ $record->month2 }}</td>
            <td>{{ $record->year2 }}</td>
            <td>{{ $record->location }}</td>
            <td>{{ $record->subscribed_day }}</td>
            <td>{{ $record->subscribed_month }}</td>
            <td>{{ $record->subscribed_year }} </td>
            <td>{{ $record->notary_location }}</td>
            <td>{{ $record->admin_officer_position }}</td>
            <td>{{ $record->admin_officer_name }}</td>
            <td>{{ $record->admin_officer_address }}</td>
        </tr>
    @endforeach
</tbody>
</table>
</div>
    @elseif ($category == '3' && count($records) > 0)
    <h3>Death Certificate Records</h3>
    <div class="table-container">
    <table class="table table-bordered mt-3">
    <thead>
    <tr>
        <th>#</th>
        <th>Full Name</th>
        <th>Date of Death</th>
        <th>Place of Death</th>
        <th>Cause of Death</th>
        <th>Place of Occurrence</th>
        <th>Immediate Cause</th>
        <th>Antecedent Cause</th>
        <th>Underlying Cause</th>
        <th>Other Conditions</th>
        <th>Maternal Condition</th>
        <th>Manner of Death</th>
        <th>Autopsy</th>
        <th>Type of Attendant</th>
        <th>Attendance Duration</th>
        <th>Certifying Officer</th>
        <th>Certification Date</th>
        <th>Corpse Disposal Method</th>
        <th>Other Disposal Method Specify</th>
        <th>Cemetery or Crematory Name</th>
        <th>Cemetery or Crematory Address</th>
        <th>Age of Mother</th>
        <th>Method of Delivery</th>
        <th>Length of Pregnancy</th>
        <th>Type of Birth</th>
        <th>Multiple Birth Position</th>
        <th>Affiant Name</th>
        <th>Legal Status</th>
        <th>Affiant Address</th>
        <th>Deceased Name</th>
        <th>Burial Place</th>
        <th>Attended By</th>
        <th>Attended By Person</th>
        <th>Not Attended</th>
        <th>Reason for Delay</th>
        <th>Day Signed</th>
        <th>Month Signed</th>
        <th>Year Signed</th>
        <th>Place Signed</th>
        <th>Day Sworn</th>
        <th>Month Sworn</th>
        <th>Year Sworn</th>
        <th>Place Sworn</th>
        <th>Tax Cert Date</th>
        <th>Tax Cert Place</th>
    </tr>
</thead>

<tbody>
    @foreach ($records as $index => $record)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $record->full_name }}</td>
            <td>{{ $record->date_of_death }}</td>
            <td>{{ $record->place_of_death }}</td>
            <td>{{ $record->cause_of_death }}</td>
            <td>{{ $record->place_of_occurrence }}</td>
            <td>{{ $record->immediate_cause }}</td>
            <td>{{ $record->antecedent_cause }}</td>
            <td>{{ $record->underlying_cause }}</td>
            <td>{{ $record->other_conditions }}</td>
            <td>{{ $record->maternal_condition }}</td>
            <td>{{ $record->manner_of_death }}</td>
            <td>{{ $record->autopsy }}</td>
            <td>{{ $record->type_of_attendant }}</td>
            <td>{{ $record->attendance_duration }}</td>
            <td>{{ $record->certifying_officer }}</td>
            <td>{{ $record->certification_date }}</td>
            <td>{{ $record->corpse_disposal_method }}</td>
            <td>{{ $record->other_disposal_method_specify }}</td>
            <td>{{ $record->cemetery_or_crematory_name }}</td>
            <td>{{ $record->cemetery_or_crematory_address }}</td>
            <td>{{ $record->age_of_mother }}</td>
            <td>{{ $record->method_of_delivery }}</td>
            <td>{{ $record->length_of_pregnancy }}</td>
            <td>{{ $record->type_of_birth }}</td>
            <td>{{ $record->multiple_birth_position }}</td>
            <td>{{ $record->affiant_name }}</td>
            <td>{{ $record->legal_status }}</td>
            <td>{{ $record->affiant_address }}</td>
            <td>{{ $record->deceased_name }}</td>
            <td>{{ $record->burial_place }}</td>
            <td>{{ $record->attended_by }}</td>
            <td>{{ $record->attended_by_person }}</td>
            <td>{{ $record->not_attended }}</td>
            <td>{{ $record->reason_delay }}</td>
            <td>{{ $record->day_signed }}</td>
            <td>{{ $record->month_signed }}</td>
            <td>{{ $record->year_signed }}</td>
            <td>{{ $record->place_signed }}</td>
            <td>{{ $record->day_sworn }}</td>
            <td>{{ $record->month_sworn }}</td>
            <td>{{ $record->year_sworn }}</td>
            <td>{{ $record->place_sworn }}</td>
            <td>{{ $record->tax_cert_date }}</td>
            <td>{{ $record->tax_cert_place }}</td>
        </tr>
    @endforeach
</tbody>
</table>
</div>
    @else
        <p class="text-center">No records found.</p>
    @endif
    </div>
</body>
</html>