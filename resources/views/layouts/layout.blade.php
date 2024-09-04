<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Basic Pages</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!--Bootstrap CSS, If You Choose To Use A Framework-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       
        <!-- Styles -->
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
            /* New CSS for horizontal nav items */
            .nav-item.inline-block {
                display: inline-block;
                margin-right: 10px; /* Adjust spacing between items */
            }
            .nav-item.inline-block:last-child {
                margin-right: 0; /* Remove margin from the last item */
            }
        </style>

           <!-- Scripts -->
         @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <header class="header-bar">
            <!-- Date and time (hidden on small screens) -->
            <div class="hide-on-small">
                <span id="current-date-time" style="margin-left: 50px;"></span>
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
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto" style="margin-right: 50px; display: inline-block;">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item inline-block">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item inline-block">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
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
