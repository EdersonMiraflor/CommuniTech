<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manito Online Services</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/communitechlogo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        .header-bar {
            background-color: #e8f7ec;
            padding: 10px;
            display: flex;
            justify-content: center; /* Center all items within the header */
            align-items: center;
            flex-wrap: wrap; /* Allow wrapping of content */
        }
        .header-title {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px; /* Adds equal spacing between elements */
            text-align: center;
            flex: 1; /* Allows header-title to take available space */
        }
        .header-title img {
            height: 50px;
            width: auto;
        }
        @media (max-width: 576px) {
            /* Hide date/time and user info on small screens */
            .hide-on-small {
                display: none !important;
            }
            /* Adjust header title on small screens */
            .header-title {
                gap: 5px; /* Reduce gap for smaller screens */
            }
            .header-title img {
                height: 40px; /* Adjust logo size for smaller screens */
            }
        }
    </style>
</head>
<body>
    <header class="header-bar">
        <!-- Date and time (hidden on small screens) -->
        <div class="hide-on-small">
            <span id="current-date-time"></span>
        </div>
        <!-- Header title, logos, and text -->
        <div class="header-title">
            <!-- Left Logo -->
            <img src="{{ asset('img/communitechlogo.png') }}" alt="Logo of Communitech" class="img-fluid">
            <!-- Center Text -->
            <span>
                Republic of the Philippines<br>
                Province of Albay<br>
                Municipality of Manito
            </span>
            <!-- Right Logo -->
            <img src="{{ asset('img/manito-logo.png') }}" alt="Logo of Manito" class="img-fluid">
        </div>
        <!-- User info (hidden on small screens) -->
        <div class="d-flex align-items-center hide-on-small">
            <span>Logged in as User</span>
            <i class="bi bi-person ms-2"></i> <!-- User icon -->
        </div>
    </header>

    <div class="container">
        @yield('contents')
    </div>

    <script>
        function updateDateTime() {
            const now = new Date();
            document.getElementById('current-date-time').textContent = now.toLocaleString();
        }
        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
