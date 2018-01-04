@extends('admin.index')
@section('content')
    <div class="col-md-12">
        <div class="imageupload panel panel-primary">

            <div class="panel-heading clearfix">
                <h3 class="panel-title pull-left">Edit Slider Item</h3>
            </div>

            <div>
                <form id="service_admin_edit" class="admin_panel" data-id="{{$service->id}}">
                    <div class="col-md-13">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        <b>Upload File</b> <input type="file" name="image" id="imgInp" placeholder="Uploaded File Path">
                                    </span>
                                </span>

                                <input type="text" class="form-control admin_panel_image" readonly value="{{$service->image}}">
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control admin_panel_title" name="title" placeholder="Slider Name" value="{{$service->title}}">
                    </div>

                    <button class="btn btn-success">Update Slider</button>

                </form>
            </div>
        </div>
    </div>
@endsection