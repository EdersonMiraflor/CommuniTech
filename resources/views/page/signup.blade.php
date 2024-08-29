@extends('layouts.layout2')
@section('contents2')

<h1>Signup Page</h1>
<br>
<!--Form Section Start-->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-success text-white">
                    <h4>CREATE NEW CIVIL REGISTRY ONLINE ACCOUNT</h4>
                </div>
                <div class="card-body">
                <!--The Input here will be passed on controller in order for controller to put it in the model-->
                    <form action="/signup" method="POST">
                        @csrf <!-- Include this to generate a CSRF token for security -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="lastName">Last Name:</label>
                                <input type="text" class="form-control" id="lastName" name="last_name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="firstName">First Name:</label>
                                <input type="text" class="form-control" id="firstName" name="first_name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="middleName">Middle Name:</label>
                                <input type="text" class="form-control" id="middleName" name="middle_name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="extensionName">Extension Name:</label>
                                <input type="text" class="form-control" id="extensionName" name="extension_name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="birthMonth">Birth Month:</label>
                                <select class="form-control" id="birthMonth" name="month" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <!-- Options for months -->
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="birthYear">Birth Year:</label>
                                <select class="form-control" id="birthYear" name="year" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <!-- Options for years -->
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="birthDay">Birth Day:</label>
                                <select class="form-control" id="birthDay" name="day" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <!-- Options for days -->
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="sex">Sex:</label>
                                <input type="text" class="form-control" id="sex" name="sex" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="mobileNumber">Mobile Number:</label>
                                <input type="text" class="form-control" id="mobileNumber" name="mobile_number" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="emailAddress">Email Address:</label>
                                <input type="email" class="form-control" id="emailAddress" name="email_address" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="houseNo">Current Address:</label>
                                <input type="text" class="form-control" id="houseNo" name="house_no" placeholder="House No:" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="zone">&nbsp;</label>
                                <input type="text" class="form-control" id="zone" name="zone" placeholder="Zone:">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="barangay">&nbsp;</label>
                                <select class="form-control" id="barangay" name="barangay" required>
                                    <option value="Barangay 1">Barangay 1</option>
                                    <option value="Barangay 2">Barangay 2</option>
                                    <option value="Barangay 3">Barangay 3</option>
                                    <!-- Options for barangays -->
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms" name="terms_accepted" required>
                                <label class="form-check-label" for="terms">
                                    I accept the terms and conditions
                                </label>
                            </div>
                        </div>
                        <div class="form-group text-center">
                        <input type="submit" value="Submit" class="btn btn-success">
                        <input type="button" value="Cancel" class="btn btn-danger" onclick="window.location.href='{{ url('login') }}';">
                        </div>
                    </form>

                </div>
                <div class="card-footer text-muted text-center">
                    <small>By registering on the website, you agree to the terms and conditions.</small>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Form Section End-->
@endsection
