<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    @livewireStyles
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    @vite(['resources/js/app.js', 'resources/js/script.js'])

    <!-- Scripts -->
    @stack('style')
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="stater-kit, laravel, mazer, spatie, role, permission">
    <meta name="author" content="Laravel">
    <meta property="og:title" content="{{ config('app.name', 'Laravel') }}">
    <link rel="canonical" href="{{url()->full()}}">
</head>


<body>
    <div id="app">
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">Laravel</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <form class="d-flex gap-3">
                        @auth
                        <a class="btn btn-outline-info" href="/dashboard">dashboard</a>
                        @else
                        <a class="btn btn-outline-info" href="/login">Login</a>
                        <a class="btn btn-outline-success" href="/register">Register</a>
                        @endauth
                        
                    </form>
                    </div>
                </div>
            </nav>
        </div>
        <x-session-message.session-message />
        <main class="">
            {{ $slot }}
        </main>
    </div>
    @livewireScripts
    @stack('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
