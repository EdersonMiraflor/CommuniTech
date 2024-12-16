<!--Layout for Default Pages-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CommuniTECH</title>

    <!--favicon-->
    <link rel="icon" href="{{ asset('img/communitechlogo.png') }}" type="image/png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- For menu icon -->

    <!-- Styles -->
     <!--Directory of this is: Public Folder/csss/main-->
    <link rel="stylesheet" href="css/main.css">
    <style>
       /* Responsive Header Bar */
       .header-bar {
    background-color: #e8f7ec;
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

.header-title {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    text-align: center;
    flex: 1;
    flex-wrap: nowrap; /* Prevents wrapping of items in larger screens */
}

.header-title img {
    height: 50px;
    width: auto;
}

.header-title span {
    font-size: 1rem;
    line-height: 1.5;
}

#current-date-time {
    font-size: 1rem;
    line-height: 1.2;
}

.navbar-nav {
    flex-wrap: wrap;
    justify-content: center;
}

@media (max-width: 576px) {
    .header-bar {
        flex-direction: column;
        text-align: center;
    }

    .header-title {
        flex-direction: row; /* Keep items horizontal */
        gap: 5px;
        justify-content: center;
    }

    .header-title img {
        height: 40px;
    }

    #current-date-time {
        font-size: 1rem;
        margin-top: 5px;
    }

    .navbar-nav {
        margin-top: 10px;
    }

    .navbar-nav .nav-link {
        font-size: 0.9rem;
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
            background-color: #04AA6D;
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
        background: #04AA6D;
        border: 2px solid #00bd2c;
        color: #fff;
        }

        .apply-btn:hover{
        background: #04AA6D;
        color: #fff;
        border-color: #ffffff;
        }

        /*---------footer---------*/
       

        /*---------footer---------*/
        /* General Footer Styles */
    footer {
        background-color: #95D2B3; /* Footer background color */
        color: #333; /* Text color */
        font-size: 15px; /* Default font size */
        padding: 10px 0; /* Adjust padding to reduce footer thickness */
        line-height: 1; /* Improve readability */
    }

    .footer-container {
        
        max-width: 1500px; /* Restrict content width for better alignment */
        margin: 0 auto; /* Center the container */
        padding: 0 15px; /* Prevent content from touching edges */
    }         
        footer h3 {
        font-size: 24px;
        font-weight: 600;
        letter-spacing: 1px;
        }
        footer h4 {
        font-size: 20px;
        font-weight: 600;
        letter-spacing: 1px;
        display: inline-block;
        margin-bottom: 1px;
        }
        .about-footer li i {
        position: absolute;
        left: 0;
        }
        .about-footer li {
        padding-left: 40px;
        position: relative;
        margin-bottom: 40px;
        }

        .about-footer ul {
        margin-top: 40px;
        }

        footer a {
        color: #292929;
        }

        footer a:hover {
        color: #22AF4A;
        }
        .footer-title {
        border-bottom: 2px solid #22AF4A;
        padding-bottom: 25px;
        margin-bottom: 35px;
        }

        ul.footer-social {
        float: right;
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
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
        font-weight: 800;
        }

        ul.footer-social li:last-child {
        margin-right: 0px;
        }

        ul.footer-social i:hover {
        background: #22AF4A;
        color: #fff;
        }

        .page-more-info li {
        margin-bottom: 31px;
        }

        footer .table td:first-child {
        font-weight: 600;
        padding-left: 33px;
        background-color: #95D2B3;
        line-height: 1.9; /* Improve readability */
        }

        footer .table td:last-child {text-align: right;}
        footer .table td {
        padding: 0px;
        border: 0;
        background-color: #95D2B3;
        }

        footer .table td i {
        position: absolute;
        left: 0px;
        font-size: 21px;
        top: 6px;
        }

        footer .table td {
        position: relative;
        padding: 4px 0;
        margin-bottom: 5rem;
        }
        .footer-logo td {
        padding-right: 4px !important;
        }

        .footer-logo td:last-child {
        padding-right: 0px !important;
        
        }


        footer hr {
        border-color: #212121;
  
        }

        .footer-bottom p {
        text-align: right;
        }
        .footer-bottom {
        margin-top: 30px;
        }
        .open-hours hr {
        margin: 30px 0;
        }



        /*search css*/
        .navbar-search {
    position: relative;
}
.navbar-search {
    position: relative;
    display: inline-block;
}

.search-results {
    display: none; /* Hidden by default */
    position: absolute;
    top: 100%; /* Below the input field */
    left: 0;
    right: 0;
    background-color: #fff;
    border: 1px solid #ddd;
    max-height: 200px;
    overflow-y: auto;
    z-index: 1000;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.result-item {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    cursor: pointer;
}

.result-item:hover {
    background-color: #f1f1f1;
}

.no-results {
    padding: 10px;
    text-align: center;
    color: #888;
}

    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<header class="header-bar">
    <div class="hide-on-small">
        <span id="current-date-time" ></span>
    </div>
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
        <ul class="navbar-nav ms-auto d-flex flex-row align-items-center">
            @if (!request()->is('home/user-profile'))
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item me-3"> <!-- Margin End for spacing -->
                            <a class="nav-link d-flex align-items-center" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                            <i class="fas fa-user ms-2"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/home/user-profile">
                                {{ __('My Account') }}
                            </a>

                            @auth
    @if (Auth::user()->Credential == 'user')
        <a href="/home/pending-deliveries" 
           class="dropdown-item {{ Request::is('home/pending-deliveries') ? 'active' : '' }}">
            {{ __('PENDING DELIVERY') }}
            <i class="fas fa-truck ms-2"></i> <!-- Updated icon to represent deliveries -->
        </a>
    @endif
@endauth


                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                <i class="fas fa-sign-out-alt ms-2"></i>
                            </a>
                          
                            @auth
        @if (Auth::user()->Credential == 'user')
                            <hr class="dropdown-divider"> <!-- Horizontal line divider -->
                            <a class="dropdown-item" href="/rider_application">
                                {{ __('Apply as a Rider!') }}
                            </a>
                            @endif
                            @endauth
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            @endif
        </ul>
    </div>
</header>

    <!-- Navbar Section -->
    <nav class="navbar">
    <span class="menu-icon" id="menu-icon"><i class="fas fa-bars"></i></span>
    <div class="navbar-menu">
        <a href="/home" class="{{ Request::is('home') ? 'active' : '' }}">HOME</a>
        
        @auth
        @if (Auth::user()->Credential == 'user')
        <a href="/home/services" class="{{ Request::is('home/services*') ? 'active' : '' }}">SERVICES</a>
        @endif
        @endauth
        
        @auth
        @if (Auth::user()->Credential == 'user')
        <a href="/home/usermanual" class="{{ Request::is('home/usermanual') ? 'active' : '' }}">USER MANUAL</a>
        @endif
        @endauth
        <!--
        @auth
            {{-- Check if the user is admin --}}
            @if (Auth::user()->Credential == 'admin')
                <a href="/home/transactionhistory" class="{{ Request::is('home/transactionhistory') ? 'active' : '' }}">TRANSACTION HISTORY</a>
            @endif
        @endauth
  
        @auth
            {{-- Check if the user is admin --}}
            @if (Auth::user()->Credential == 'admin')
                <a href="/home/usermanagement" class="{{ Request::is('home/usermanagement') ? 'active' : '' }}">USER MANAGEMENT</a>
            @endif
        @endauth
    -->
        <a href="/home/about" class="{{ Request::is('home/about') ? 'active' : '' }}">ABOUT</a>
        <a href="/home/privacy-policy" class="{{ Request::is('home/privacy-policy') ? 'active' : '' }}">PRIVACY POLICY</a>     
        @auth
@if (Auth::user()->Credential == 'user' || Auth::user()->Credential == 'rider')
<a href="/home/contact" class="{{ Request::is('home/contact') ? 'active' : '' }}">CONTACT</a>
@endif
@endauth

    </div>
    <div class="navbar-search">
    <input type="text" id="searchInput" placeholder="Search" oninput="searchWebsiteText()">
</div>
<div id="searchResults" class="search-results"></div>


    <!-- Hidden Dropdown Menu for Small Screens -->
    <div class="dropdown-menu" id="dropdown-menu">
        <a href="/home" class="{{ Request::is('home') ? 'active' : '' }}">HOME</a>

        @auth
        @if (Auth::user()->Credential == 'user')
        <a href="/home/services" class="{{ Request::is('home/services*') ? 'active' : '' }}">SERVICES</a>
        @endif
        @endauth
<!--
        @auth
            {{-- Check if the user is admin --}}
            @if (Auth::user()->Credential == 'admin')
                <a href="/home/transactionhistory" class="{{ Request::is('home/transactionhistory') ? 'active' : '' }}">TRANSACTION HISTORY</a>
            @endif
        @endauth

        <a href="/home/usermanual" class="{{ Request::is('home/usermanual') ? 'active' : '' }}">USER MANUAL</a>
  
        @auth
            {{-- Check if the user is admin --}}
            @if (Auth::user()->Credential == 'admin')
                <a href="/home/usermanagement" class="{{ Request::is('home/usermanagement') ? 'active' : '' }}">USER MANAGEMENT</a>
            @endif
        @endauth
    -->
        <a href="/home/privacy-policy" class="{{ Request::is('home/privacy-policy') ? 'active' : '' }}">PRIVACY POLICY</a>
        <a href="/home/about" class="{{ Request::is('home/about') ? 'active' : '' }}">ABOUT</a>

        @auth
        @if (Auth::user()->Credential == 'user' || Auth::user()->Credential == 'rider')
        <a href="/home/contact" class="{{ Request::is('home/contact') ? 'active' : '' }}">CONTACT</a>
        @endif
        @endauth
    </div>
</nav>

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
        @yield('contents')
    </div>
    

  
<!-- Footer Section-->
<footer>
    <div class="footer-container">
        <div class="footer-top">
        <br>
            <div class="row">
                <div class="col-md-6 col-lg-3 about-footer">
                   
                    <h3>CommuniTECH </h3>
                    <ul>
                        <li><a href="mailto:lgumanitoofficial@gmail.com"><i class="fas fa-envelope fa-flip-horizontal"></i>lgumanitoofficial@gmail.com</a></li>
                        <li><i class="fas fa-map-marker-alt"></i>
                            Municipal Hall, Rizal St.,  
                            <br>It-ba(Poblacion), Manito,
                            <br>Philippines
                        </li>
                    </ul>

    <!--
                    <a href="" class="btn apply-btn">Register Now</a>
    -->
                    
                    <hr>
                    <div class="footer-logo">
                        <table>
                            <tbody>
                                <tr>
                                <td><img src="{{ asset('img/communitechlogo.png') }}" alt="Communitech Logo"></td>
                                <td><img src="{{ asset('img/manito-logo.png') }}" alt="Manito Logo"></td>
                                <td><img src="{{ asset('img/new-bagongPH.png') }}" alt="Bagong Pilipinas Logo"></td>
                                <td><img src="{{ asset('img/new-dpo.png') }}" alt="DPO Logo"></td>     
                            </tbody>
                        </table>
                    </div>
                    <br>
                </div>
                <div class="col-md-6 col-lg-2 page-more-info">
                    <div class="footer-title">
                        <h4>Page links</h4>
                    </div>
                    <ul>
                        <li><a href="/home">Home</a></li>
                        <li><a href="/home/services">Services</a></li>
                        <li><a href="/home/usermanual">User Manual</a></li>
                        <li><a href="/home/about">About</a></li>
                        <li><a href="/home/privacy-policy">Privacy Policy</a></li>
                        <li><a href="/home/contact">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-3 page-more-info">
                    <div class="footer-title">
                        <h4>More Info</h4>
                    </div>
                    <ul>
                        <li>This serves as the official public information page of the Municipal Government of Manito.</li>
                        <li>Accessible Services: Apply online for Certificates of Live Birth, Death Certificates, and Marriage Certificates with ease.</li>
                        <li>Convenient Process: Simplified steps to ensure quick and hassle-free access to vital records.</li>
            
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 open-hours">
                    <div class="footer-title">
                        <h4>Open hours</h4>
                        <ul class="footer-social">
                            <li><a href="https://www.facebook.com/ManitoLGU2022" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/manitomdrrmo/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><i class="far fa-clock"></i>Monday</td>
                                <td>8:00am - 5:00pm</td>
                            </tr>
                            <tr>
                                <td><i class="far fa-clock"></i>Tuesday</td>
                                <td>8:00am - 5:00pm</td>
                            </tr>
                            <tr>
                                <td><i class="far fa-clock"></i>Wednesday</td>
                                <td>8:00am - 5:00pm</td>
                            </tr>
                            <tr>
                                <td><i class="far fa-clock"></i>Thursday</td>
                                <td>8:00am - 5:00pm</td>
                            </tr>
                            <tr>
                                <td><i class="far fa-clock"></i>Friday</td>
                                <td>8:00am - 5:00pm</td>
                            </tr>
                            <tr>
                                <td><i class="far fa-clock"></i>Saturday</td>
                                <td>CLOSED</td>
                            </tr>
                            <tr>
                                <td><i class="far fa-clock"></i>Sunday</td>
                                <td>CLOSED</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <hr>
        <div class="footer-bottom">
            <div class="row">
                <div class="col-sm-4">
                    <a href="/home/privacy-policy">Privacy policy</a>
                </div>
                <div class="col-sm-8">
                    <p>Communitech @ 2024 All rights reserved</p>
                </div>
            </div>
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

<!--search result js-->
    <script>
  let hideResultsTimeout;

function searchWebsiteText() {
    const query = document.getElementById('searchInput').value.toLowerCase();
    const resultsContainer = document.getElementById('searchResults');
    const allTextElements = document.body.querySelectorAll('*:not(script):not(style)'); // Exclude scripts and styles
    
    resultsContainer.innerHTML = ''; // Clear previous results

    if (query.trim() === '') {
        resultsContainer.style.display = 'none';
        return;
    }

    const results = [];
    allTextElements.forEach((element, index) => {
        if (element.children.length === 0 && element.textContent.trim() !== '') {
            const textContent = element.textContent.toLowerCase();
            if (textContent.includes(query)) {
                const id = `search-result-${index}`; // Assign a unique ID to the element
                element.id = id;
                results.push({ text: element.textContent.trim(), id });
            }
        }
    });

    if (results.length > 0) {
        resultsContainer.style.display = 'block';
        results.forEach(result => {
            const resultItem = document.createElement('div');
            resultItem.classList.add('result-item');
            resultItem.textContent = result.text;
            resultItem.onclick = () => {
                document.getElementById(result.id).scrollIntoView({ behavior: 'smooth', block: 'center' });
                highlightElement(result.id); // Optional: Highlight the target element
            };
            resultsContainer.appendChild(resultItem);
        });
    } else {
        resultsContainer.style.display = 'block';
        resultsContainer.innerHTML = '<div class="no-results">No results found</div>';
    }
}

function highlightElement(id) {
    const element = document.getElementById(id);
    element.style.transition = 'background-color 0.5s';
    element.style.backgroundColor = 'yellow'; // Temporary highlight
    setTimeout(() => {
        element.style.backgroundColor = '';
    }, 1500);
}

function showResults() {
    const resultsContainer = document.getElementById('searchResults');
    if (resultsContainer.innerHTML.trim() !== '') {
        resultsContainer.style.display = 'block';
    }
}

function hideResultsWithDelay() {
    hideResultsTimeout = setTimeout(() => {
        const resultsContainer = document.getElementById('searchResults');
        resultsContainer.style.display = 'none';
    }, 200); // Add a slight delay to avoid premature hiding
}

document.getElementById('searchResults').addEventListener('mouseenter', () => {
    clearTimeout(hideResultsTimeout);
});

document.getElementById('searchResults').addEventListener('mouseleave', () => {
    hideResultsWithDelay();
});

    </script>

    <!-- Include Popper.js and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz39BpwPqv92mGhFCc3C2wWwOtc1HbP5mrxG6ZAwXjC5K8tb1HBeI2xfPv" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-QTW0l0k/QwG7m8CZv/t5bO5PBWxP8MXZ3zFgLeMw6b00pYX/mbU8vcUQj9uZQe6b5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QTW0l0k/QwG7m8CZv/t5bO5PBWxP8MXZ3zFgLeMw6b00pYX/mbU8vcUQj9uZQe6b5" crossorigin="anonymous"></script>
</body>
</html>