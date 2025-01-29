<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Tours in Yucatán')</title>
    <<link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
    </head>
<body>
    @include('layouts.header')
    @include('components.slider')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
</body>
</html>



