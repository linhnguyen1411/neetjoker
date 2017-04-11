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
                       enctype="multipart/form-data" id="upload_form">
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
                            <label for="title" class="col-sm-2 control-label">Title</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="iTitle"
                                       placeholder="Input Name of Categories Groups">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image" class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-10">
                                {{--<input type="file" id="imgInp" name="a_image">--}}

                                <input type="file" name="Img" id="SelImg">
                                <img src="" id="ImgPrev" name="Img"/>
                                <i class="glyphicon glyphicon-info-sign" style="color: red">Chọn ảnh tải lên đi!</i>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <input type="checkbox" name="i_highlight"> Highlight?
                            </div>
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
    <script>
        $(document).ready(function () {
            $('#SelImg').change(function () {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#ImgPrev').src= e.target.result;
                };
            });
        });
    </script>
@endsection