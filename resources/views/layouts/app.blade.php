<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title> @yield('title') </title>
</head>

<body>
    <header>
        <nav class="text-gray-600 bg-white border-b">
            <div class="container mx-auto">
                <div class="flex py-6">

                    <div class="flex flex-shrink-0 text-gray mr-6">
                        <svg class="fill-current text-teal-600 h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
                        </svg>
                        <span class="font-semibold text-xl tracking-tight text-gray-600"><a
                                href="{{ route('welcome') }}">Larastack</a></span>
                    </div>

                    <div class="block lg:hidden">
                        <button
                            class="flex items-center px-3 border rounded text-gray-600 border-teal-400 hover:underline hover:border-white">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>

                    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                        <div class="lg:flex-grow">
                            <a href="#responsive-header" class="text-gray-600 hover:underline lg:inline-block mr-4">
                                Articles
                            </a>
                            <a href="{{ route('forum.index') }}"
                                class="{{ set_active('forum', 'text-teal-500') }} block lg:inline-block text-gray-600 hover:underline mr-4">
                                Forum
                            </a>
                            <a href="#responsive-header"
                                class="block lg:inline-block text-gray-600 hover:underline mr-4">
                                Blog
                            </a>
                            <a href="{{ route('about') }}" class="{{ set_active('about', 'text-teal-500') }} block lg:inline-block text-gray-600 hover:underline">
                                About
                            </a>
                        </div>

                        <div>
                            @guest
                            <a href="{{ route('login') }}" class="{{ set_active('login', 'text-teal-500') }} text-gray-600 hover:underline mr-4">Login</a>

                            <a href="{{ route('register') }}"
                                class="{{ set_active('register', 'text-teal-500') }} text-gray-600 hover:underline border-white hover:text-gray">Sign up</a>

                            @else

                            <a href="{{ route('logout') }}"
                                class="text-gray-600 hover:underline border-white hover:text-gray" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>

                                <form action="{{ route('logout') }}" id="logout-form" method="POST">
                                    @csrf
                                </form>
                            @endguest
                        </div>

                    </div>

                </div>
            </div>
        </nav>
    </header>

    <main>
        @include('partials.alerts')
        @yield('content')
    </main>

    <footer>
        <div class="container mx-auto">
            <h1>footer</h1>
        </div>
    </footer>
</body>

{{-- <script src="{!! asset('js/app.js') !!}"></script> --}}

</html>
