@extends('welcome')
@section('content')

    <form action="" method="post" id="login">
        {{ csrf_field() }}

        <input type="text" name="email">
        <input type="password" name="password">
        <button>asdasd</button>
    </form>

    {{--@if(count($errors))--}}
        {{--@foreach ($errors->all() as $error)--}}
            {{--<div>{{ $error }}</div>--}}
        {{--@endforeach--}}
    {{--@endif--}}

@endsection