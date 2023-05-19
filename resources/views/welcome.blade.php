<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Text&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/website.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 text-center">
                    <img src="{{ asset('img/dragao.png') }}" class="mt-3 mb-3 img w-50"></img>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 text-center">
                    <img src="{{ asset('img/texto.png') }}" class="mt-3 mb-3 img w-100"></img>
                </div>

                <div class="col-12 site-content">

                </div>

                <footer class="col-12">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12 text-center p-5">
                            <img src="{{ asset('img/fd_logo_branco_g.png') }}" class="mt-3 mb-3 img w-75"></img>
                        </div>

                        <div class="col-md-4 col-lg-4 col-sm-12 p-5">
                            <h5> Links </h5>
                            <ul>
                                <li>Sites</li>
                                <li>Sistemas</li>
                                <li</li>
                            </ul>
                        </div>

                        <div class="col-md-4 col-lg-4 col-sm-12 p-5">
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>
