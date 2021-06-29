<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AidanVon Blog</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{  asset('js/nav.js') }}"></script>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class=" h-screen antialiased leading-none font-sans">

    <div id="app">
        <header class="bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-black-800 no-underline">
                        {{( 'AidanVon Blog') }}
                    </a>
                </div>
                <nav class="space-x-4 text-black-300 font-semibold text-sm sm:text-base">
                    <div>
                    <div class="hidden md:flex items-center space-x-4">
                    <a class="no-underline hover:underline" href="/">Home</a>
                    <a class="no-underline hover:underline" href="/blog">Blog</a>
                    @guest
                    <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                    <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                    <span>{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}" class="no-underline hover:underline" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    @endguest
                    </div>
                    <!-- mobile button goes here -->
                      <div class="md:hidden flex items-center">
                          <button class="mobile-menu-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        </button>
                      </div>
                   </div>

                </nav>

            </div>
            <!--mobile menu -->
            <div class="mobile-menu hidden md:hidden">
                <a class="no-underline hover:underline block py-2 px-4" href="/">Home</a>
                <a class="no-underline hover:underline block py-2 px-4" href="/blog">Blog</a>
            </div>
        </header>

        <div>
            @yield('content')
        </div>
        <div>
            @include('layouts.footer')
        </div>
    </div>

</body>

</html>
