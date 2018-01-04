<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/light-bootstrap-dashboard.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/site.css')}}">
</head>
<body>
    <div class="wrapper">

        @include('admin.partials.sidebar')

        <div class="main-panel">

            @include('admin.partials.navbar')

            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        @yield('content')

                    </div>
                </div>
            </div>

            @include('admin.partials.footer')

        </div>

    </div>
</body>

<script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/site.js')}}"></script>

</html>