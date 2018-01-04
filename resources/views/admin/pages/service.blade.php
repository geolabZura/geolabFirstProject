@extends('admin.index')
@section('content')

    <div class="col-md-12">
        <div class="imageupload panel panel-primary">

            <div class="panel-heading clearfix">
                <h3 class="panel-title pull-left">All Slider Items</h3>
            </div>

            <div class="table-responsive">
                <table class="table" id="service_edit_delete">
                    <thead>
                    <tr>
                        <td>#</td>
                        <td>Image</td>
                        <td>Title</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($services))
                        @foreach($services as $service)
                            <tr class="item_{{$service->id}}">
                                <td>{{$service->id}}</td>
                                <td><img src="{{asset($service->image)}}" width="100" height="100"></td>
                                <td>{{$service->title}}</td>
                                <td><a href="{{route('admin.service.edit', $service->id)}}"><button class="btn btn-success edit">Edit</button></a></td>
                                <td><button class="btn btn-danger delete" data-id="{{$service->id}}">Delete</button></td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="imageupload panel panel-primary">

            <div class="panel-heading clearfix">
                <h3 class="panel-title pull-left">Upload Image</h3>
            </div>

            <form action="" method="post" id="service_admin_update" class="admin_panel" enctype="multipart/form-data">

                <div class="col-md-13">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-default btn-file">
                                    <b>Upload File</b> <input type="file" name="image" id="imgInp" placeholder="Uploaded File Path">
                                </span>
                            </span>

                            <input type="text" class="form-control admin_panel_image" readonly>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control admin_panel_title" name="title" placeholder="Slider Name">
                </div>

                <button class="btn btn-success">Add Slider</button>

            </form>
        </div>

    </div>

@endsection