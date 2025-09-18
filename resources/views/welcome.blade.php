<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @endif
</head>
<body class="flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18]">
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6">
        @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                    <span class="me-3">Welcome, {{ auth()->user()->name }}</span>
                    <a
                        href="{{ url('/dashboard') }}"
                        class="btn btn-primary"
                    >
                        Dashboard
                    </a>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                    </form>
                @endauth
            </nav>
        @endif
    </header>
    <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
            <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                <h1 class="mb-1 font-medium">Welcome to Game Management</h1>
                <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
                    Please note that you don't need to log in or register to access the actual dashboard.
                </p>
                <ul class="flex flex-col mb-4 lg:mb-6"></ul>
                <ul class="flex gap-3 text-sm leading-normal">
                    <li>
                        <a href="{{ route('games.index') }}" class="btn btn-dark">
                            See actual page, YES?
                        </a>
                    </li>
                </ul>
            </div>
        </main>
    </div>
    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
    @if (session('status'))
        <div class="alert alert-success text-center my-3">
            {{ session('status') }}
        </div>
    @endif
</body>
</html>
