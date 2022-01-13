<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="../../css/styles.css">
    
    <title>
        @yield('title')
    </title>
    <script>
        let FF_FOUC_FIX;
    </script>
    {{-- <script src="resources\js\menu-toggle.js" defer></script> --}}
    <script src="../../js/menu-toggle.js" defer></script>
</head>
<body>
    <section class="bg-neutral-900 flex justify-between">
        <div class="flex">
            <a href="/">
                <div class="p-4 ml-4 w-max">
                    <img src="../../images/logo.png" alt="" class="w-8 h-8">
                </div>
            </a>
            @auth
                <span class="text-white font-semibold p-4 text-lg sm:text-sm whitespace-nowrap">{{ auth()->user()->name }}</span>
            @endauth
        </div>
        <div class="p-4 mr-4 text-lg text-white font-semibold flex">
            <div class="mr-2">
                <form @admin action="/products" @else action="/all-products" @endadmin method="GET">
                    <input type="text" name="search" placeholder="Search a product" value="{{ request('search') }}" class="h-6 w-60 pr-4 border-b-white bg-neutral-900 text-white sm:text-sm sm:width-sm">
                </form>
            </div>
            <ul class="flex justify-end sm:display-none">
                <li class="px-4 sm:text-sm"><a href="/all-products">Products</a></li>
                @auth
                    @admin
                        <li class="px-4 sm:text-sm"><a href="/products">Dashboard</a></li>
                    @endadmin
                    <li class="px-4 sm:text-sm">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="px-4 sm:text-sm"><a href="/login">Login</a></li>
                    <li class="px-4 sm:text-sm"><a href="/register">Register</a></li>
                @endauth
            </ul>
            <div class="sidebar">
                <div class="toggle-menu-btn">
                    <div class="click-area" onclick="toggle()">
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                    </div>
                </div>

                <div id="side-menu-bar" class="side-menu-bar bg-neutral-900 rounded">
                    <ul class="text-center my-8">
                        <li class="mb-10 p-2 mm:text-p"><a href="/all-products">Products</a></li>
                        @auth
                            @admin
                                <li class="mb-10 p-2 mm:text-p"><a href="/products">Dashboard</a></li>
                            @endadmin
                                <li class="mb-10 p-2 mm:text-p">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                        @else
                            <li class="mb-10 p-2 mm:text-p"><a href="/login">Login</a></li>
                            <li class="mb-10 p-2 mm:text-p"><a href="/register">Register</a></li>
                        @endauth
                    </ul>
                </div>
            </div>

        </div>
    </section>
    
    @yield('body')
    
    @if(session()->has('success'))
    <div x-data="{ show: true }" 
        x-init="setTimeout(()=>show = false, 3000)"
        x-show="show">
        <p class="fixed bg-gray-800 text-white rounded p-2 top-0 right-0">{{ session('success') }}</p>
    </div>
    @endif

    <footer class="footer w-full bg-neutral-900 mt-4">
        <p class="text-white">&copy; Raman Shakya, 2022</p>
    </footer>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>