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
        .navbar-menu a:hover {
    background-color: #90D7A4; /* Hover background color */
    color: #fff;
    transform: translateY(-3px); /* Small upward movement on hover */
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
                background-color: #04AA6D;
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
                background-color: #04AA6D; /* Light gray hover effect */
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
    /*START OF FOOTER*/

    a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }

        a,
        a:active,
        a:focus {
            color: #333;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
        max-width: 100%;
        height: auto;
        }
        section {
            padding: 60px 0;
        /* min-height: 100vh;*/
        }
        .btn {
        padding: 14px 25px;
        text-transform: uppercase;
        -webkit-transition: all 0.8s;
        -moz-transition: all 0.8s;
        -o-transition: all 0.8s;
        transition: all 0.8s;
        }
        .apply-btn {
        background: #00bd2c;
        border: 2px solid #00bd2c;
        color: #fff;
        }

        .apply-btn:hover{
        background: #22AF4A;
        color: #fff;
        border-color: #ffffff;
        }

        /*---------footer---------*/
/* Footer styling */
.footer {
    background-color: #90D7A4;
    padding: 1.5rem 2rem;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap; /* Allow wrapping on small screens */
    gap: 2rem; /* Space between left and right sections */
}

/* Left section */
.footer-left {
    display: flex;
    align-items: center;
    justify-content: flex-start; /* Align logo and text to the left */
}

.footer-logo {
    height: 3.125rem; /* 50px equivalent */
    margin-right: 1rem;
}

.footer-text {
    font-size: 1rem; /* 16px equivalent */
    font-weight: bold;
}

/* Right section */
.footer-right {
    display: flex;
    justify-content: flex-start; /* Align social icons to the left by default */
}

.footer-social {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-social-item {
    margin-left: 1.25rem; /* Space between social icons */
}

.footer-icon {
    font-size: 1.25rem; /* 20px equivalent */
    color: inherit;
    text-decoration: none;
}

ul.footer-social li {
    display: inline;
    margin-right: 16px;
}

ul.footer-social i {
    width: 30px;
    height: 30px;
    background: #fff;
    color: #222025;
    text-align: center;
    line-height: 30px;
    border-radius: 30px;
    font-size: 16px;
    transition: all 0.5s;
    font-weight: 800;
}

ul.footer-social i:hover {
    background: #22AF4A;
    color: #fff;
}

/* Responsiveness */
@media (max-width: 768px) {
    .footer-text {
        font-size: 0.875rem; /* 14px equivalent */
    }

    .footer-icon {
        font-size: 1.125rem; /* 18px equivalent */
    }

    .footer-container {
        flex-direction: column; /* Stack the sections on small screens */
        gap: 1rem; /* Adjust space between sections */
    }

    .footer-right {
        justify-content: center; /* Center social icons on medium screens */
    }
}

@media (max-width: 576px) {
    .footer-text {
        font-size: 0.75rem; /* 12px equivalent */
    }

    .footer-icon {
        font-size: 1rem; /* 16px equivalent */
    }

    .footer-container {
        flex-direction: column; /* Stack the sections on smaller screens */
        gap: 1rem; /* Adjust space between sections */
    }

    .footer-left {
        justify-content: center; /* Center left section items on small screens */
    }

    .footer-right {
        justify-content: center; /* Center social icons on small screens */
    }

    .footer-social-item {
        margin-left: 0.5rem; /* Reduce space between social icons on smaller screens */
    }
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



    <div class="container">
        @yield('content')
    </div>

    <!-- Footer Section -->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-left">
            <img src="{{ asset('img/communitechlogo.png') }}" alt="Communitech Logo" class="footer-logo">
            <span class="footer-text">CommuniTech</span>
        </div>

        <div class="footer-right">
            <ul class="footer-social">
                <li class="footer-social-item">
                    <a href="https://www.facebook.com/ManitoLGU2022" target="_blank">
                        <i class="fab fa-facebook-f footer-icon"></i>
                    </a>
                </li>
                <li class="footer-social-item">
                    <a href="https://www.instagram.com/manitomdrrmo/" target="_blank">
                        <i class="fab fa-instagram footer-icon"></i>
                    </a>
                </li>
                <li class="footer-social-item">
                    <a href="#" target="_blank">
                        <i class="fab fa-linkedin-in footer-icon"></i>
                    </a>
                </li>
            </ul>
        </div>
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