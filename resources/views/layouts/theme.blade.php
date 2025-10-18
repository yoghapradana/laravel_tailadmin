<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>
        @yield('title', 'eCommerce Dashboard | TailAdmin - Tailwind CSS Admin Dashboard Template')
        {{-- eCommerce Dashboard | TailAdmin - Tailwind CSS Admin Dashboard Template --}}
        {{-- Title can be changed from individual pages using @section('title','Page Title') --}}
        {{-- If no title is set for a page, the default title above will be used --}}
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body @yield('alpineData')>
    <!-- ===== Preloader Start ===== -->
    @include('layouts.partials.preloader')
    <!-- ===== Preloader End ===== -->
    @yield('body')
</body>
</html>