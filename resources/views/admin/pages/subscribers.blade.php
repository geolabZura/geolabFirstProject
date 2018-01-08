@extends('admin.index')
@section('content')
    <div class="col-md-12">
        <div class="imageupload panel panel-primary">

            <div class="panel-heading clearfix">
                <h3 class="panel-title pull-left">All Slider Items</h3>
            </div>

            <div class="table-responsive">
                <table class="table" id="social_edit_delete">
                    <thead>
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Subject</td>
                        <td>Text</td>
                        <td>Gender</td>
                        <td>Newsletters</td>
                        <td>Registration Date</td>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($subscribers))
                        @foreach($subscribers as $subscriber)
                            <tr class="item_{{$subscriber->id}}">
                                <td>{{$subscriber->id}}</td>
                                <td>{{$subscriber->name}}</td>
                                <td>{{$subscriber->email}}</td>
                                <td>{{$subscriber->subject}}</td>
                                <td>{{$subscriber->text}}</td>
                                <td>{{\App\Models\Gender::where('subscriber_id', $subscriber->gender_id)->first()->name}}</td>

                                <td>
                                    @foreach($subscriber->newsletters as $newsletter)
                                        {{$newsletter->name }},
                                    @endforeach
                                </td>
                                <td>{{$subscriber->created_at}}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection