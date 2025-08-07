<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>
<body>
<header>
    <nav>
        <title>@yield('title')</title>

        @yield('header')

    </nav>
</header>
<main>

    @yield('maincontent')

</main>
</body>


<footer>
    @yield('footer')
</footer>
</html>

