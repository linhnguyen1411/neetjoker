@extends('admin.layout.index')
@section('content')
    <section class="content-header">
        <h1>Add new Roles</h1>
    </section>
    <section class="content">
        <div class="col-md-8">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Roles</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="administrator/roles/insert" method="post">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible" style="width:100%">
                            <i class="glyphicon glyphicon-info-sign"></i>
                            @foreach($errors->all() as $err)
                                {{ $err }}<br />
                            @endforeach
                        </div>
                    @endif
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="box-body">

                        <div class="form-group">
                            <label for="rolesName" class="col-sm-2 control-label">Roles</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="rolesName" name="r_name"
                                       placeholder="Input name of new Roles">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rolesDescription" class="col-sm-2 control-label">Description</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="rolesDescription" name="r_description"
                                       placeholder="Input name of new Roles">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <a href="administrator/roles/list" class="btn btn-default" id="btn-cancel">Cancel</a>
                        <button type="submit" class="btn btn-info pull-right" >Insert</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </section>
@endsection
