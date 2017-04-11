@extends('admin.layout.index')
@section('content')
    <section class="content-header">
        <h1>Update Categories Groups</h1>
    </section>
    <section class="content">
        <div class="col-md-8">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Categories Groups</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="administrator/images/update/{{$image->i_id}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="SelCate" class="col-sm-2 control-label">Categories</label>
                            <div class="col-sm-10">
                                <select name="SelCategories" id="SelCate">
                                    @foreach($categories as $category)
                                        <option value="{{$category->c_id}}">{{$category->c_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="updateTitle" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="i_title" name="i_title"
                                       placeholder="{{$image->i_title}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="updateImage" class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-10">
                                <img src="public/upload/images/{{$image->i_preview}}"/>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info " >Update</button>
                            <a href="administrator/images/list" class="btn btn-default pull-right" >Cancel</a>
                        </div>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </section>
@endsection