<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
</head>
<body>

    @if(auth()->check())
        {{auth()->user()->email}}
    @endif

    @yield('content')

</body>

<script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('/js/site.js')}}"></script>

</html>