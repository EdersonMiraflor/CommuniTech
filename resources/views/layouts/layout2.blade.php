<!--Layout for Default Pages-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Basic Pages</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- For menu icon -->

    <!-- Styles -->
     <!--Directory of this is: Public Folder/csss/main-->
    <link rel="stylesheet" href="css/img-auth.css">
    <style>
        /* Responsive Header Bar */
        .header-bar {
            background-color: #90D7A4;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: nowrap;
        }
        .header-title {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-align: center;
            flex: 1;
        }
        .header-title img {
            height: 50px;
            width: auto;
        }
        @media (max-width: 576px) {
            .hide-on-small {
                display: none !important;
            }
            .header-title {
                gap: 5px;
            }
            .header-title img {
                height: 40px;
            }
        }

        /* Navbar Styling */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: #ffffff;
            border-bottom: 1px solid #ddd;
            position: relative;
            font-size: 1rem;
            flex-wrap: nowrap; /* Allow items to wrap on smaller screens */
        }

        .menu-icon {    
            margin-left: 10px;
            font-size: 1.2rem;
            cursor: pointer;
            display: none; /* Hidden by default, shown on smaller screens */
        }

        .navbar-menu {
            padding: 0px 10px 0px 10px;
            display: flex;
            align-items: center;
            gap: 20px;
            margin-right: -2.5px;
            margin-left: 2.5rem; /* Margin to separate from menu icon */
            flex-wrap: wrap;
            flex-grow: 1; /* Allows the menu to grow and take available space */
        }

        .navbar-menu a {
            
            text-decoration: none;
            color: #000;
            padding: 8px 16px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .navbar-menu a.active {
            background-color: #7bc782;
            color: #fff;
            border-radius: 4px;
        
        }

        .navbar-search {
            margin-left: auto; /* Push search input to the right */
            position: relative;
            display: flex;
            align-items: center;
        }

        .navbar-search input[type="text"] {
            padding: 5px 10px;
            border-radius: 15px;
            border: 1px solid #ddd;
            font-size: 0.9rem;
            margin-right: 2.5rem;
        }

        /* Responsive Styling */
        @media (max-width: 1232px) { /* Updated breakpoint */
            .navbar-menu {
                display: none; /* Hide main menu on smaller screens */
            }

            .menu-icon {
                display: block;
                margin-left: 2.5rem; /* Show menu icon on smaller screens */
            }

            .dropdown-menu {
                display: none;
                position: absolute;
                top: 50px;
                left: 0;
                right: 0;
                background-color: white;
                flex-direction: column;
                padding: 10px 0;
                border-top: 1px solid #ddd;
                z-index: 1;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow for a simple design */
                border-radius: 8px; /* Rounded corners */
            }

            .dropdown-menu.show {
                display: flex;
            }

            .dropdown-menu a {
                text-decoration: none;
                color: #000;
                padding: 10px 20px;
                display: block;
                width: 100%;
                text-align: center;
                transition: background-color 0.2s;
                font-size: 1rem;
            }

            .dropdown-menu a:hover {
                background-color: #f0f0f0; /* Light gray hover effect */
            }
        }

        /* Font Scaling for Different Screens */
        @media (max-width: 576px) {
            .navbar {
                font-size: 0.9rem; /* Slightly smaller font size on extra small screens */
            }
            .navbar-menu a {
                font-size: 0.9rem;
            }
            .navbar-search input[type="text"] {
                font-size: 0.8rem;
            }
        }

        @media (min-width: 1233px) { /* Updated breakpoint */
            .menu-icon {
                display: none; /* Hide menu icon on larger screens */
            }
        }

        /* Footer Styling */
    .footer-bar {
        background-color: #90d7a4; /* Light green color for the footer */
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        color: #000;
    }

    .footer-content {
        display: flex;
        align-items: center;
    }

    .footer-logo {
        height: 40px;
        margin-right: 10px;
    }

    .footer-text {
        font-weight: bold;
        font-size: 1.1rem;
    }

    .footer-social-icons {
        display: flex;
        gap: 10px;
    }

    .footer-social-icons .social-icon img {
        height: 30px;
        width: auto;
        transition: transform 0.2s;
    }

    .footer-social-icons .social-icon img:hover {
        transform: scale(1.1);
    }


    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header class="header-bar">
       
        <div class="header-title">
            <img src="{{ asset('img/communitechlogo.png') }}" alt="Logo of Communitech" class="img-fluid">
            <span>
                Republic of the Philippines<br>
                Province of Albay<br>
                Municipality of Manito
            </span>
            <img src="{{ asset('img/manito-logo.png') }}" alt="Logo of Manito" class="img-fluid">
        </div>
        <div class="d-flex align-items-center hide-on-small">
        <div class="d-flex align-items-center hide-on-small">
</div>


    </header>

    <script>
        // JavaScript for Toggling the Dropdown Menu in Mobile View
        document.getElementById('menu-icon').addEventListener('click', function() {
            const dropdownMenu = document.getElementById('dropdown-menu');
            dropdownMenu.classList.toggle('show');
        });

        // JavaScript for Hiding the Dropdown Menu when Screen Resizes to Larger Sizes
        window.addEventListener('resize', function() {
            const dropdownMenu = document.getElementById('dropdown-menu');
            if (window.innerWidth > 1232 && dropdownMenu.classList.contains('show')) { // Adjusted breakpoint
                dropdownMenu.classList.remove('show');
            }
        });
    </script>


    <!-- Conditionally hide the navbar on the login page -->
    @if (!request()->is('login'))
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <!-- Navbar content -->
            </nav>
        @endif


    <div class="container">
        @yield('content')
    </div>

    <!-- Footer Section -->
    <footer class="footer-bar">
        <div class="footer-content-left">
            <img src="{{ asset('img/communitechlogo.png') }}" alt="CommuniTECH Logo" class="footer-logo">
            <span class="footer-text">CommuniTECH</span>
        </div>
        <div class="footer-center">
            <span>© 2024 CommuniTECH. All Rights Reserved.</span>
        </div>
        <div class="footer-social-icons">
            <a href="#" class="social-icon">
                <img src="{{ asset('img/facebook.png') }}" alt="Facebook">
            </a>
            <a href="#" class="social-icon">
                <img src="{{ asset('img/instagram.png') }}" alt="Instagram">
            </a>
            <a href="#" class="social-icon">
                <img src="{{ asset('img/youtube.png') }}" alt="YouTube">
            </a>
        </div>
    </footer>


    <!--time and date in header section-->
    <script>
        function updateDateTime() {
            const now = new Date();
            document.getElementById('current-date-time').textContent = now.toLocaleString();
        }
        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>

    <!-- Include Popper.js and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz39BpwPqv92mGhFCc3C2wWwOtc1HbP5mrxG6ZAwXjC5K8tb1HBeI2xfPv" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-QTW0l0k/QwG7m8CZv/t5bO5PBWxP8MXZ3zFgLeMw6b00pYX/mbU8vcUQj9uZQe6b5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QTW0l0k/QwG7m8CZv/t5bO5PBWxP8MXZ3zFgLeMw6b00pYX/mbU8vcUQj9uZQe6b5" crossorigin="anonymous"></script>
</body>
</html>
