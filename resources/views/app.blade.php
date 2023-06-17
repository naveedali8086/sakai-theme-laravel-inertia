<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="/favicon.ico">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <link id="theme-css" rel="stylesheet" type="text/css" href="/themes/lara-light-indigo/theme.css">
    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.ts', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>
<body>
@inertia
</body>
</html>
