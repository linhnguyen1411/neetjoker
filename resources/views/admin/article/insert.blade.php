@extends('admin.layout.index')
@section('content')
    <section class="content-header">
        <h1>Add new Article</h1>
    </section>
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Article</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="administrator/article/insert" method="post" enctype="multipart/form-data">
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
                        <label for="SelCateGroup" class="col-sm-2 control-label">CateGroup</label>
                        <div class="col-sm-10">
                            <select name="SelCateGroup" id="SelCateGroup">
                                <option>Chọn thể loại</option>
                                @foreach($cate_group as $ctg)
                                    <option value="{{$ctg->cate_id}}">{{$ctg->cate_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="SelCate" class="col-sm-2 control-label">Categories</label>
                        <div class="col-sm-10">
                            <select name="SelCate" id="SelCate">
                                @foreach($categories as $category)
                                    <option value="{{$category->cate_id}}">{{$category->cate_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Title" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Title" name="a_title"
                                   placeholder="Title of article">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Description" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                                <textarea class="form-control" id="Description" name="a_description" rows="3"
                                          placeholder="Type description of article..."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Content" class="col-sm-2 control-label">Content</label>
                        <div class="col-sm-10">
                            <textarea id="demo" class="ckeditor form-control" rows="10" name="a_content" ></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Tags" class="col-sm-2 control-label">Tags</label>
                        <div class="col-sm-10">
                                <textarea class="form-control" id="Tags" name="a_tag" rows="3"
                                          placeholder="some tags here...Ví dụ: hotgirl, gamer, tình yêu, ảnh nóng, ..."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-sm-2 control-label">Image</label>
                        <div class="col-sm-10">
                            {{--<input type="file" id="imgInp" name="a_image">--}}
                            {{--<img id="blah" src="#" alt="your image" />--}}
                            <div id="container_image"></div>
                            <i class="glyphicon glyphicon-info-sign" style="color: red">Chọn ảnh đại diện cho bài viết của bạn!</i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <input type="checkbox" id="highlight" name="highlight"> Highlight ?
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <a href="administrator/article/list" class="btn btn-default" id="btn-cancel">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">Insert</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#SelCateGroup').change(function () {
                var idCateGroup = $(this).val();
                $.get("administrator/ajax/categories/" + idCateGroup, function (data) {
                    $("#SelCate").html(data);
                });
            });
        });
    </script>
    {{--<script>--}}
        {{--function readURL(input) {--}}

            {{--if (input.files && input.files[0]) {--}}
                {{--var reader = new FileReader();--}}

                {{--reader.onload = function (e) {--}}
                    {{--$('#blah').attr('src', e.target.result);--}}
                {{--}--}}

                {{--reader.readAsDataURL(input.files[0]);--}}
            {{--}--}}
        {{--}--}}
        {{--$("#imgInp").change(function(){--}}
            {{--readURL(this);--}}
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
