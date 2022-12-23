<html lang="{{app()->getLocale()}}">
<head>
    @include('components.head')
</head>

<header>
    <x-header :sections="$sections" />
</header>

<body>
    @yield('master')
</body>

<footer>
    @include('components.footer')
</footer>
</html>
