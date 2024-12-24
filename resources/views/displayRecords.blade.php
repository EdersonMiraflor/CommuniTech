@extends('layouts.layout')
@section('contents')
<head>
    <title>Display Records</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
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
    </tr>
</thead>

<tbody>
    @foreach ($records as $index => $record)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $record->user_name }}</td>
            <td>{{ $record->child_first }} </td>
            <td>{{ $record->child_middle }} </td>
            <td>{{ $record->child_last }} </td>
            <td>{{ $record->child_sex }}</td>
            <td>{{ $record->child_birthdate }}</td>
            <td>{{ $record->child_birthplace }}</td>
            <td>{{ $record->multiple_birth }}</td>
            <td>{{ $record->birth_type }}</td>
            <td>{{ $record->birth_order }}</td>
            <td>{{ $record->birth_weight }}</td>
            <td>{{ $record->mother_first_name }}</td>
            <td>{{ $record->mother_middle_name }}</td>
            <td>{{ $record->mother_last_name }}</td>
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
            <td>{{ $record->father_first_name }}</td>
            <td>{{ $record->father_middle_name }}</td>
            <td>{{ $record->father_last_name }}</td>
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
    <th>#</th>
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
    </tr>
</thead>

<tbody>
@foreach ($records as $index => $record)
        <tr>
        <td>{{ $index + 1 }}</td>
            <td>{{ $record->user_name }}</td>
            <td>{{ $record->husband_first_name}} </td>
            <td>{{ $record->husband_middle_name }}</td>
            <td>{{ $record->husband_last_name }}</td>
            <td>{{ $record->husband_birthdate }}</td>
            <td>{{ $record->husband_age }}</td>
            <td>{{ $record->husband_city_municipality }}</td>
            <td>{{ $record->husband_province }}</td>
            <td>{{ $record->husband_country }} </td>
            <td>{{ $record->husband_citizenship }}</td>
            <td>{{ $record->husband_residence }}</td>
            <td>{{ $record->husband_religion }}</td>
            <td>{{ $record->husband_father_first_name }}</td>
            <td>{{ $record->husband_father_middle_name }}</td>
            <td>{{ $record->husband_father_last_name }} </td>
            <td>{{ $record->husband_father_citizenship }}</td>
            <td>{{ $record->husband_mother_first_name }}</td>
            <td>{{ $record->husband_mother_middle_name }}</td>
            <td>{{ $record->husband_mother_maiden_last_name }}</td>
            <td>{{ $record->husband_mother_citizenship }}</td>
            <td>{{ $record->wife_first_name }} </td>
            <td>{{ $record->wife_middle_name }}</td>
            <td>{{ $record->wife_last_name }}</td>
            <td>{{ $record->wife_birthdate }}</td>
            <td>{{ $record->wife_age }}</td>
            <td>{{ $record->wife_city_municipality }}</td>
            <td>{{ $record->wife_province }} </td>
            <td>{{ $record->wife_country }}</td>
            <td>{{ $record->wife_citizenship }}</td>
            <td>{{ $record->wife_residence }}</td>
            <td>{{ $record->wife_religion }}</td>
            <td>{{ $record->wife_father_first_name }}</td>
            <td>{{ $record->wife_father_middle_name }}</td>
            <td>{{ $record->wife_father_last_name }} </td>
            <td>{{ $record->wife_father_citizenship }}</td>
            <td>{{ $record->wife_mother_first_name }}</td>
            <td>{{ $record->wife_mother_middle_name }}</td>
            <td>{{ $record->wife_mother_maiden_last_name }}</td>
            <td>{{ $record->wife_mother_citizenship }}</td>
            <td>{{ $record->marriage_date1 }} </td>
            <td>{{ $record->marriage_place }}</td>
            <td>{{ $record->officiant_name }}</td>
            <td>{{ $record->officiant_position }}</td>
            <td>{{ $record->witnesses }}</td>
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
        <th>user_name</th>f
        <th>Full Name</th>
        <th>Sex</th>
        <th>Date of Death</th>
        <th>date_of_birth</th>
        <th>completed_years</th>
        <th>months_days</th>
        <th>hours_minutes_seconds</th>
        <th>place_of_death</th>
        <th>civil_status</th>
        <th>religion</th>
        <th>citizenship</th>
        <th>residence</th>
        <th>father_name</th>
        <th>mother_maiden_name</th>
        <th>immediate_cause</th>
        <th>antecedent_cause</th>
        <th>underlying_cause</th>
        <th>other_conditions</th>
        <th>maternal_condition</th>
        <th>manner_of_death</th>
        <th>place_of_occurrence</th>
        <th>autopsy</th>
        <th>type_of_attendant</th>
        <th>attendance_duration</th>
        <th>certifying_officer</th>
        <th>certification_date</th>
        <th>corpse_disposal_method</th>
        <th>other_disposal_method_specify</th>
        <th>cemetery_or_crematory_name</th>
        <th>cemetery_or_crematory_address</th>
        <th>age_of_mother</th>
        <th>method_of_delivery</th>
        <th>length_of_pregnancy</th>
        <th>type_of_birth</th>
        <th>multiple_birth_position</th>
    </tr>
</thead>

<tbody>
    @foreach ($records as $index => $record)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $record->user_name }}</td>
            <td>{{ $record->full_name }}</td>
            <td>{{ $record->sex }}</td>
            <td>{{ $record->date_of_death }}</td>
            <td>{{ $record->date_of_birth }}</td>
            <td>{{ $record->completed_years }}</td>
            <td>{{ $record->months_days }}</td>
            <td>{{ $record->hours_minutes_seconds }}</td>
            <td>{{ $record->place_of_death }}</td>
            <td>{{ $record->civil_status }}</td>
            <td>{{ $record->religion }}</td>
            <td>{{ $record->citizenship }}</td>
            <td>{{ $record->residence }}</td>
            <td>{{ $record->father_name }}</td>
            <td>{{ $record->mother_maiden_name }}</td>
            <td>{{ $record->immediate_cause }}</td>
            <td>{{ $record->antecedent_cause }}</td>
            <td>{{ $record->underlying_cause }}</td>
            <td>{{ $record->other_conditions }}</td>
            <td>{{ $record->maternal_condition }}</td>
            <td>{{ $record->manner_of_death }}</td>
            <td>{{ $record->place_of_occurrence }}</td>
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
@endsection