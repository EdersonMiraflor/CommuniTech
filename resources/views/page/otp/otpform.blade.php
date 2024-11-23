<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Form</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Optional -->
</head>
<body>
    <div class="container mt-5">
<!-- Sending OTP Code with OTP Form 1
  Explanation: 
    -Get the input of user in the form
 -->
        <h1>OTP Form</h1>
        <form action="/otpform" method="POST">
        @csrf
            <input type="text" name="Name" required>
            <input type="email" name="Email" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
