@extends('admin.index')
@section('content')
    <div class="col-md-12">
        <div class="imageupload panel panel-primary">

            <div class="panel-heading clearfix">
                <h3 class="panel-title pull-left">Edit Slider Item</h3>
            </div>
            <div class="table-responsive">
                <table class="table" id="social_edit_delete">
                    <thead>
                    <tr>
                        <td> Amount Services</td>
                        <td>Amount Subscribers</td>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$services_count}}</td>
                            <td>{{$subscribers_count}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection