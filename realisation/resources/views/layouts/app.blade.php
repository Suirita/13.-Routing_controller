<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Blog Minimaliste')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-nav/>
    <x-aside/>

    <div class="content-wrapper">
        @yield('content')
    </div>

    <x-footer/>
</body>
</html>
