<html lang="{{app()->getLocale()}}">
<head>
    @include('components.head')
</head>

<x-header></x-header>

<body>
    @yield('master')
</body>

<footer>
    @include('components.footer')
</footer>
</html>
