<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Live Quiz Client">
    <meta name="author" content="EHU Quiz & Party Game Society">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/b915efe1c2.js" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/quizclient.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    {{--Import Laravel Echo--}}
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</head>
<body>
{{-- Session Alerts --}}
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible" id="alert" style="margin-bottom: 0px">{{ Session::get('success') }}</div>
@endif
@if (Session::has('info'))
    <div class="alert alert-info alert-dismissible" id="alert" style="margin-bottom: 0px">{{ Session::get('info') }}</div>
@endif
@if (Session::has('warning'))
    <div class="alert alert-info alert-dismissible" id="alert" style="margin-bottom: 0px">{{ Session::get('warning') }}</div>
@endif
@if (Session::has('danger'))
    <div class="alert alert-danger alert-dismissible" id="alert" style="margin-bottom: 0px">{{ Session::get('danger') }}</div>
@endif
<!-- Begin page content -->
@yield('content')
@yield('footer')
</body>
</html>
