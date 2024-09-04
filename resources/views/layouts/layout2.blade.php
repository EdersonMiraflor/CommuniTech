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

    <!-- Styles -->
    <link rel="stylesheet" href="css/main.css">
    <style>
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
        .nav-item.inline-block {
            display: inline-block;
            margin-right: 10px;
        }
        .nav-item.inline-block:last-child {
            margin-right: 0;
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
    </header>

    <div class="container">
        @yield('content')
    </div>

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
