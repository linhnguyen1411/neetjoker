@extends('admin.layout.index')
@section('content')
    <section class="content-header">
        <h1>Insert Categories Groups</h1>
    </section>
    <section class="content">
        <div class="col-md-8">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Categories Groups</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="administrator/cate_group/insert" method="post">
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
                            <label for="inputName" class="col-sm-2 control-label">Name</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="CateName" name="CateName"
                                       placeholder="Input Name of Categories Groups">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <a href="administrator/cate_group/list" class="btn btn-default" id="btn-cancel">Cancel</a>
                        <button type="submit" class="btn btn-info pull-right" >Insert</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </section>
@endsection
