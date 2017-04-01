@extends('admin.layout.index')
@section('content')
    <section class="content-header">
        <h1>Insert Images</h1>
    </section>
    <section class="content">
        <div class="col-md-8">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add new image</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="administrator/images/insert" method="post"
                      target="picture-element-iframe" enctype="multipart/form-data">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible" style="width:100%">
                            <i class="glyphicon glyphicon-info-sign"></i>
                            @foreach($errors->all() as $err)
                                {{ $err }}<br/>
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
                        {{--<div class="form-group">--}}
                        {{--<div id="interface" class="page-interface">--}}
                        {{--<img src="upload/article/2IJp_screenshot-20160607-125146-1465282336132-1465814028022.png"--}}
                        {{--id="target"></div>--}}
                        {{--<div class="nav-box">--}}
                        {{--<form onsubmit="return false;" id="text-inputs">--}}
                        {{--<span class="input-group"><b>X</b>--}}
                        {{--<input type="text" name="cx" id="crop-x" class="span1"></span>--}}
                        {{--<span class="input-group"><b>Y</b>--}}
                        {{--<input type="text" name="cy" id="crop-y" class="span1"></span>--}}
                        {{--<span class="input-group"><b>W</b>--}}
                        {{--<input type="text" name="cw" id="crop-w" class="span1"></span>--}}
                        {{--<span class="input-group"><b>H</b>--}}
                        {{--<input type="text" name="ch" id="crop-h" class="span1"></span>--}}
                        {{--</form>--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            <div id="container_image"></div>
                        </div>
                        <!-- /.box-body -->
                        <a href="administrator/cate_group/list" class="btn btn-default" id="btn-cancel">Cancel</a>
                        <button type="submit" class="btn btn-info pull-right">Insert</button>

                    </div>
                </form>

            </div>
        </div>
    </section>
@endsection
@section('script')
    {{--<script type="text/javascript">--}}
    {{--jQuery(function ($) {--}}
    {{--var d = document, ge = 'getElementById';--}}

    {{--$('#interface').on('cropmove cropend', function (e, s, c) {--}}
    {{--d[ge]('crop-x').value = c.x;--}}
    {{--d[ge]('crop-y').value = c.y;--}}
    {{--d[ge]('crop-w').value = c.w;--}}
    {{--d[ge]('crop-h').value = c.h;--}}
    {{--});--}}

    {{--// Most basic attachment example--}}
    {{--$('#target').Jcrop({--}}
    {{--setSelect: [175, 100, 250, 250]--}}
    {{--});--}}

    {{--$('#text-inputs').on('change', 'input', function (e) {--}}
    {{--$('#target').Jcrop('api').animateTo([--}}
    {{--parseInt(d[ge]('crop-x').value),--}}
    {{--parseInt(d[ge]('crop-y').value),--}}
    {{--parseInt(d[ge]('crop-w').value),--}}
    {{--parseInt(d[ge]('crop-h').value)--}}
    {{--]);--}}
    {{--});--}}

    {{--});--}}

    {{--</script>--}}
    <script type="text/javascript">
        $("#container_image").PictureCut({

            //  InputOfImageDirectory       : "image",
            PluginFolderOnServer: "neetjoker/public/Picture-cut",
            FolderOnServer: "/neetjoker/public/upload/",
            EnableCrop: true,
            CropWindowStyle: "Bootstrap"
        });
    </script>

@endsection