@extends('admin.layout.index')
@section('content')
    <section class="content-header">
        <h1>Change Infor of {{$roles->r_name}}</h1>
    </section>
    <section class="content">
        <div class="col-md-8">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Roles</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="administrator/roles/update/{{$roles->r_id}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="rolesName" class="col-sm-2 control-label">Roles</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="rolesName" name="r_name"
                                       placeholder="{{$roles->r_name}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rolesDescription" class="col-sm-2 control-label">Descripton</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="rolesDescription" name="r_description"
                                       placeholder="{{$roles->r_description}}">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info " >Update</button>
                            <a href="administrator/roles/list" class="btn btn-default pull-right" >Cancel</a>
                        </div>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </section>
@endsection