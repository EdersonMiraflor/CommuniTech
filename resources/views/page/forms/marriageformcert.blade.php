@extends('layouts.layout')

@section('contents')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<div class="container birth-form-page" style="padding: 20px; margin-top: 50px; margin-bottom: 50px; position: relative; text-align: center;">
    <!-- Background Image -->
    <div class="background-image-container" style="position: relative; overflow: hidden;">
    <img src="{{ asset('img/Certificate-of-Marriage-/page-0.jpg') }}" alt="Certificate of Marriage" style="width: 100%; height: auto; opacity: 0.8;">
    <img src="{{ asset('img/Certificate-of-Marriage-/page-1.jpg') }}" alt="Certificate of Marriage" style="width: 100%; height: auto; opacity: 0.8;">
        <form action="/home/services/marriageform/marriageformcert" method="POST" id="marriageformcert">
            @csrf
            

                <!-- Submit Button -->
                <div class="col-md-12 mt-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
