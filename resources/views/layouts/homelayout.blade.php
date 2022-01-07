<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="../../css/styles.css">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <section class="bg-neutral-900 flex justify-between">
        <a href="/">
            <div class="p-4">
                <img src="../../images/logo.png" alt="" class="w-8 h-8">
            </div>
        </a>
        <div class="p-4 text-lg text-white font-semibold">
            <ul class="flex justify-end">
                <li class="px-4"><a href="#">Home</a></li>
                <li class="px-4"><a href="#">Products</a></li>
                <li class="px-4"><a href="/login">Login</a></li>
                <li class="px-4"><a href="/register">Register</a></li>
            </ul>
        </div>
    </section>
    
    @yield('body')

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>