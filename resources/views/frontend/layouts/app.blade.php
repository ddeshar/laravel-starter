<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app_frontend.css') }}" rel="stylesheet">

</head>

<body class="app container">
    <header class="app-header navbar">
        <h3 class="text-center">{{ config('app.name', 'Laravel') }}</h3>

    </header>
    <div class="app-body">
        <main class="main">


            @yield('content')

        </main>
    </div>
    <footer class="app-footer">
        <p>Built with ♥ by <a href="https://nasirkhn.com">Nasir Khan Saikat</a>.</p>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app_frontend.js') }}"></script>
</body>
<!-- <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">{{ config('app.name', 'Laravel') }}</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="{{ url('/') }}">Home</a>
                    @guest
                    <a class="nav-link" href="{{ route('frontend.auth.login') }}">Login</a>
                    <a class="nav-link" href="{{ route('frontend.auth.register') }}">Register</a>
                    @else
                    <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                    <a class="nav-link" href="{{ route('frontend.auth.logout') }}">Logout</a>
                    @endguest
                </nav>
            </div>
        </header>


        @yield('content')


        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>Built with ♥ by <a href="https://nasirkhn.com">Nasir Khan Saikat</a>.</p>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/app_frontend.js') }}"></script>
</body> -->
</html>
