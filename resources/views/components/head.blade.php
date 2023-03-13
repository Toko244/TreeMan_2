<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Favicon -------- --}}
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/site.webmanifest">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    {{-- Favicon END -------- --}}

    <link rel="stylesheet" type="text/css" href="/assets/style/slick.css">
    <link rel="stylesheet" type="text/css" href="/assets/style/fonts.css">
    <link rel="stylesheet" type="text/css" href="/assets/style/gorda.css">
    <link rel="stylesheet" type="text/css" href="/assets/style/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/style/responsive.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
 
    @if(isset($section) && ($section != []))
        <title>TreeMan - {{ $section->translate(app()->getlocale())->title }}</title>
        <meta property="og:description" content="{!! $section->translate(app()->getlocale())->desc !!}"/> 
    @elseif(isset($post))
        <title>TreeMan - {{ $post->translate(app()->getlocale())->title }}</title>
        <meta property="og:description" content="{!! $post->translate(app()->getlocale())->desc !!}"/>
    @else
        <title>TreeMan</title>
        <meta property="og:description" content="Test"/>
    @endif


    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="{{URL::to('/')}}/assets/img/header-logo.png">

