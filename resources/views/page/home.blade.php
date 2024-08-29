@extends('layouts.layout')
@section('contents')

<h1>Home Page</h1>
<p>This is Home Page</p>

<p class=mssg> {{  session('msg') }} </p>

@if (session('msg2'))
    <div class="alert alert-success">
        {{ session('msg2') }}
    </div>
@endif

@endsection