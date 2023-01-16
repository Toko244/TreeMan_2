<html lang="{{app()->getLocale()}}">
<head>
    @include('components.head')
</head>

<header>
    @include('components.header')
</header>

<body>
    @yield('master')
</body>
    @include('components.script')
<footer>
    @include('components.footer')
</footer>
</html>
