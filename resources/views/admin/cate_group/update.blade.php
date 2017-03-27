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
                <form class="form-horizontal" action="administrator/cate_group/update/{{$cate_groups->cate_id}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="Cate_Name" name="CateName"
                                       placeholder="{{$cate_groups->cate_name}}">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info " >Update</button>
                            <a href="administrator/cate_group/list" class="btn btn-default pull-right" >Cancel</a>
                        </div>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </section>
@endsection