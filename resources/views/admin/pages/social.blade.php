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
                            <td>Image</td>
                            <td>Title</td>
                            <td>Edit</td>
                        </tr>
                    </thead>
                    <tbody>
                    @if(!empty($socials))
                        @foreach($socials as $social)
                            <tr class="item_{{$social->id}}">
                                <td>{{$social->id}}</td>
                                <td><img src="{{asset($social->image)}}" width="100" height="100"></td>
                                <td>{{$social->link}}</td>
                                <td><a href="{{route('admin.social.edit', $social->id)}}"><button class="btn btn-success edit">Edit</button></a></td>
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

            <form action="" method="post" id="social_admin_update" class="admin_panel" enctype="multipart/form-data">

                <div class="col-md-13">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-default btn-file">
                                    <b>Upload Icon</b> <input type="file" name="image" id="imgInp" placeholder="Uploaded Icon Path">
                                </span>
                            </span>

                            <input type="text" class="form-control admin_panel_image" readonly>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control admin_panel_title" name="link" placeholder="Link">
                </div>

                <button class="btn btn-success">Add Social</button>

            </form>
        </div>

    </div>

@endsection