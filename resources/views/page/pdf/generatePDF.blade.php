@extends('layouts.layout')
@section('contents')
   

    <h2>Title: {{ $title }}</h2>
    <h2>Date: {{ $date }}</h2>
    
    <table class="table table-bordered">
        <thead>
            <th>Transaction_Id: </th>
            <th>User_Id: </th>
            <th>Certificate_Id: </th>
            <th>Submitted_Date: </th>
            <th>Pick_Up_Date: </th>
            <th>Cert_Type: </th>
            <th>Quantity: </th>
            <th>Request_Id: </th>
            <th>User_Appointment: </th>
            <th>Status: </th>
            <th>progress: </th>
            <th>created_at: </th>
            <th>updated_at: </th>
        </thead>
        <tbody>
            @foreach($request as $item)
            <tr>
                <td>{{ $item->Transaction_Id }}</td>
                <td>{{ $item->User_Id }}</td>
                <td>{{ $item->Certificate_Id }}</td>
                <td>{{ $item->Submitted_Date }}</td>
                <td>{{ $item->Pick_Up_Date }}</td>
                <td>{{ $item->Cert_Type }}</td>
                <td>{{ $item->Quantity }}</td>
                <td>{{ $item->Request_Id }}</td>
                <td>{{ $item->User_Appointment }}</td>
                <td>{{ $item->Status }}</td>
                <td>{{ $item->progress }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection