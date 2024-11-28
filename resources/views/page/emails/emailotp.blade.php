<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Here is your Document Sample, Please Confirm!</h1>

    <p>{{ $get_user_name }}</p>
    <p>{{ $validToken }}</p>

    <!-- Direct link to generate PDF -->
    <p>
        <a href="{{ url('/verify-account') }}" style="text-decoration: none; color: blue;">
            Click here to direct to OTP form and download your certificate
        </a>
    </p>
    
</body>
</html>
