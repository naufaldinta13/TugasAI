<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Aplikasi - {{ $title }}</title>

    {{--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <link href="{{ asset('css/app.css') }}?v={{ config('app.asset_version') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}?v={{ config('app.asset_version') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}?v={{ config('app.asset_version') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}?v={{ config('app.asset_version') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}?v={{ config('app.asset_version') }}" rel="stylesheet">
    <link href="{{ asset('js/bootstrap.min.js') }}?v={{ config('app.asset_version') }}" rel="stylesheet">

</head>

<body>

<!--================ Start Header Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ route('menu') }}"><h2 class="text-bold">SMP Caution Brad Bogor</h2></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item {{ $home_tab }}"><a class="nav-link" href="{{ route('menu') }}">Home</a></li>
                        <li class="nav-item {{ $calculation_tab }}"><a class="nav-link" href="{{ route('calculation::calculation.rangking') }}">Calculation</a></li>
                        <li class="nav-item {{ isset($report_tab) ? $report_tab : '' }}"><a class="nav-link" href="{{ route('report::report') }}">Report</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Area =================-->