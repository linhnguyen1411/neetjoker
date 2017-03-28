@extends('admin.layout.index')
@section('content')
    <section class="content-header">
        <h1>Update Categories Groups</h1>
    </section>
    <section class="content">
        <div class="col-md-8">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Categories </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="administrator/categories/update/{{$update->c_id}}" method="post">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible" style="width:100%">
                            <i class="glyphicon glyphicon-info-sign"></i>
                            @foreach($errors->all() as $err)
                                {{ $err }}<br/>
                            @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-success alert-dismissible" style="width: 100%">
                            <i class="glyphicon glyphicon-ok"></i>
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputName" class="col-sm-3 control-label">Categories group</label>
                            <div class="col-sm-9">
                                <select class="form-control select2-close-mask" name="cateGroup">
                                    @foreach($cate_group as $ctg)
                                        <option value="{{$ctg->cate_id}}">{{$ctg->cate_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cname" class="col-sm-3 control-label">Categories Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="cname" name="c_name"
                                       placeholder="{{$update->c_name}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="highlight" class="col-sm-3 control-label">HighLight</label>
                            <div class="col-sm-9">
                                <input type="checkbox" id="highlight" name="highlight">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="administrator/categories/list" class="btn btn-default"
                               id="btn-cancel">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Update</button>
                        </div>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </section>
@endsection