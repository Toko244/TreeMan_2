<html lang="{{app()->getLocale()}}">
<x-head :section="$section"></x-head>
<x-header  :languageSlugs="$language_slugs"></x-header>

<body class="{{ isset($home) ? 'homepage_0100' : '' }}">

    @yield('master')

    
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-63fdeb2a80d380cd"></script>
</body>
    <x-footer></x-footer>
    <x-script></x-script>
</html>
