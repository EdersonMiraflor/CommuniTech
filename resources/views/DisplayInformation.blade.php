
<form action="{{ route('DisplayInformationController') }}" method="GET">
    <label for="user_name">Enter User Name:</label>
    <input type="text" id="user_name" name="uDisplayInformationControllerser_name" placeholder="Search by Name" required>
    <button type="submit">Search</button>
</form>

@if(isset($birthRegistration))
    <h2>Birth Registration</h2>
    <p>User Name: {{ $birthRegistration->user_name }}</p>
    <p>Child Name: {{ $birthRegistration->child_first }} {{ $birthRegistration->child_last }}</p>
    <p>Mother: {{ $birthRegistration->mother_first_name }} {{ $birthRegistration->mother_last_name }}</p>
    <p>Father: {{ $birthRegistration->father_first_name }} {{ $birthRegistration->father_last_name }}</p>
    <!-- Display other fields here as necessary -->
@endif

@if(isset($marriageRegistration))
    <h2>Marriage Registration</h2>
    <p>Husband: {{ $marriageRegistration->husband_first_name }} {{ $marriageRegistration->husband_last_name }}</p>
    <p>Wife: {{ $marriageRegistration->wife_first_name }} {{ $marriageRegistration->wife_last_name }}</p>
    <p>Marriage Date: {{ $marriageRegistration->marriage_date1 }}</p>
    <!-- Display other fields here as necessary -->
@endif

@if(isset($deathRegistration))
    <h2>Death Registration</h2>
    <p>Deceased Name: {{ $deathRegistration->deceased_name }}</p>
    <p>Cause of Death: {{ $deathRegistration->cause_of_death }}</p>
    <p>Place of Death: {{ $deathRegistration->place_of_death }}</p>
    <!-- Display other fields here as necessary -->
@endif