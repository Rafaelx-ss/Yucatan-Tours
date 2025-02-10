<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-CGjm6ur5.css') }}">
    <script src="{{ asset('build/assets/app-BGYJCR6z.js') }}" defer></script> --}}
    @php
    $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    @endphp
    <link rel="stylesheet" href="{{ asset('build/' . $manifest['resources/css/app.css']['file']) }}">
    <script src="{{ asset('build/' . $manifest['resources/js/app.js']['file']) }}" defer></script>
    <title>@yield('title', 'Tours in Yucatán')</title>
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script> --}}
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



