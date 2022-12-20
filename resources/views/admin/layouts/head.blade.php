<head>
    <meta charset="utf-8" />
    <title>სამართავი პანელი</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="/admin/favicon_package_v0.16/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/admin/favicon_package_v0.16/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/admin/favicon_package_v0.16/favicon-16x16.png">
<link rel="manifest" href="/admin/favicon_package_v0.16/site.webmanifest">
<link rel="mask-icon" href="/admin/favicon_package_v0.16//safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
    <!-- App css -->
    <link href="{{ asset('/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin/css/admin.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('/admin/css/style.css')}}" rel="stylesheet" type="text/css" />

    @stack('styles')
</head>
