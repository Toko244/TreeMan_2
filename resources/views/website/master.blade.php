<html lang="{{app()->getLocale()}}">
<x-head :section="$section"></x-head>
<x-header  :languageSlugs="$language_slugs"></x-header>

<body>
    @yield('master')
</body>
    <x-footer></x-footer>
    <x-script></x-script>
</html>
