<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Kiniko Art Management')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-ivory">


    @include('partials.navbar')


    <main class="py-5">
        @yield('content')
    </main>


    @include('partials.footer')


</body>

</html>
