<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    @include('dashboard.layouts.navbar')
    <div id="app">
        <main class="lg:ps-72 lg:my-0 px-3">
            @yield('content')
        </main>
    </div>
</body>

</html>
