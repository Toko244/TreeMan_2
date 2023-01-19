<html lang="{{app()->getLocale()}}">
<head>
    @include('components.head')
</head>

<x-header></x-header>

<body>
    @yield('master')
</body>
    @include('components.script')
    <x-footer></x-footer>
</html>
