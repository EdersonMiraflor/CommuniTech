@extends('layouts.layout')
@section('contents')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<h1 style="padding-top: 40px; text-align:center;">Lists of Users With Transaction</h1>
    @foreach($document as $doc)
        <div>
            {{ $doc->User_Id }} (->)   {{ $doc->Pick_Up_Date }} (->)   {{ $doc->User_Appointment }} (->) {{ $doc->Status }}
        </div>    
    @endforeach
    
@endsection 