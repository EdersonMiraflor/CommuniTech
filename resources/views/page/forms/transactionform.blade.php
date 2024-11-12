@extends('layouts.layout')
@section('contents')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<!-- Displays the Users Who Have Requests -->
<h1 style="padding-top: 40px; text-align:center;">Lists of Users With Transaction</h1>
<!-- TRANSACTION HISTORY 1
Explanation:

    -The variable doc will have the value of the  variable document
    -The variable document is used to store the value in the controller called FormsController
    -The values after the "->" are the attributes(column) in the entity(table)
-->
    @foreach($document as $doc)
        <div>
            {{ $doc->User_Id }} (->)   {{ $doc->Pick_Up_Date }} (->)   {{ $doc->User_Appointment }} (->) {{ $doc->Status }}
        </div>    
    @endforeach
@endsection 