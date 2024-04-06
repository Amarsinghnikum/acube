<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AcubeAvenue Technologies') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light header-background">
        <div class="container">
            <div style="display: flex; align-items: center;">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" width="50px" height="50px"
                    style="border-radius: 30px; margin-right: 10px;">
                <a class="header-text-color header_title" href="{{ url('/') }}"
                    style="font-size: 22px; font-weight: bold;">AcubeAvenue Technologies</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="header-text-color" href="{{route('contact-us')}}">Contact Us</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status'))
    <script>
    swal("{{ session('status') }}");
    </script>
    @endif
</body>

</html>