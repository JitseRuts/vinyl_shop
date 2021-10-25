<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('css_after')
    <title>@yield('title', 'The Vinyl Shop')</title>
    @include('shared.icons')
</head>
<body>
@include('shared/navigation')
<main class="container">
    @yield('main', 'Page under construction ...')
</main>
@include('shared/footer')
<script src="{{ mix('js/app.js') }}"></script>
@yield('script_after')
</body>
</html>
