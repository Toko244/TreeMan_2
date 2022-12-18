<html lang="{{app()->getLocale()}}">
	<head>
        @include('website.components.head')
	</head>
	<body id="kt_body" class="header-fixed header-mobile-fixed sidebar-enabled page-loading">
		@include('website.components.header')
		@yield('main')
		@include('website.components.footer')
        @include('website.components.scripts')
	</body>
</html>
