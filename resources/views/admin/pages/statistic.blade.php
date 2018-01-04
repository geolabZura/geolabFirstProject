@extends('admin.index')
@section('content')
    <div class="col-md-12">
        <div class="col-md-6">
            Amount Services
        </div>
        <div class="col-md-6">
            {{$services_count}}
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            Amount Subscribers
        </div>
        <div class="col-md-6">
            {{$subscribers_count}}
        </div>
    </div>
@endsection