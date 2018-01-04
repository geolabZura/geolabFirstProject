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

    <form id="subscriber" method="post" action="">
        name:
        <input type="text" name="name"/><br>
        email:
        <input type="email" name="email"/><br>
        subject:
        <input type="text" name="subject"/><br>
        text:
        <textarea name="text">
        </textarea><br>
        gender:<br>
        <input type="radio" name="gender" value="1"><br>
        <input type="radio" name="gender" value="2"><br>
        newsletter:<br>
        <input type="checkbox" name="newsletter[]" value="1"><br>
        <input type="checkbox" name="newsletter[]" value="2"><br>
        <input type="checkbox" name="newsletter[]" value="3"><br>
        <input type="checkbox" name="newsletter[]" value="4"><br>

        <button>emma</button>
    </form>

</body>
<script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/site.js')}}"></script>

</html>