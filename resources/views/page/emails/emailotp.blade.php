<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CommuniTECH</title>

    <style>
        body.emailotp-body {
            font-family: Arial, sans-serif;
            background-color: #e8f7ec; /* Light green background */
            color: #28a745; /* Primary green text color */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full screen height */
        }
        .emailotp-container {
            max-width: 600px;
            width: 100%;
            padding: 30px;
            background: white; /* White background for the content area */
            border: 2px solid #28a745;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center; /* Center all text */
        }
        h1.emailotp-header {
            color: #04aa6d; /* Darker green for the header */
            margin-bottom: 20px;
            font-size: 1.8rem;
        }
        p.emailotp-text {
            margin: 10px 0;
            font-size: 1rem;
            color: #333; /* Neutral text color for better contrast */
        }
        a.emailotp-link {
            display: inline-block;
            background-color: #28a745; /* Button green */
            color: white; /* Text color for the button */
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 25px; /* Rounded button for a modern look */
            font-weight: bold;
            margin-top: 20px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        a.emailotp-link:hover {
            background-color: #04aa6d; /* Darker green for hover */
            transform: translateY(-3px); /* Subtle hover animation */
        }
        .emailotp-container p:nth-of-type(1) {
            font-weight: bold;
            color: #28a745; /* Highlight user name in green */
        }
    </style>

</head>
<body class="emailotp-body">
    <div class="emailotp-container">
        <h1 class="emailotp-header">Here's a copy of your personal information for your review.</h1>

    <p class="emailotp-text" >{{ $get_user_name }}</p>
    <p class="emailotp-text" >{{ $validToken }}</p>

    <!-- Direct link to generate PDF -->
    <p class="emailotp-text">
        <a href="{{ url('/verify-account') }}" class="emailotp-link">
            Click here to direct to OTP form and download your certificate.
        </a>
    </p>
    </div>
    
</body>
</html>
