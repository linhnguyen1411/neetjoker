@extends('admin.layout.index')
@section('content')
    <section class="content-header">
        <h1>Update article</h1>
    </section>
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Article</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="administrator/article/update/{{$article->a_id}}" method="post"enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="SelCateGroup" class="col-sm-2 control-label">CateGroup</label>
                        <div class="col-sm-10">
                            <select name="SelCateGroup" id="SelCateGroup">
                                <option value="{{$article->category->cate_group->cate_id}}">{{$article->category->cate_group->cate_name}}</option>
                                @foreach($cate_group as $ctg)
                                    <option value="{{$ctg->cate_id}}">{{$ctg->cate_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="SelCate" class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-10">
                            <select name="SelCate" id="SelCate">
                                <option value="{{$article->c_id}}">{{$article->category->c_name}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Cate_Name" name="a_title"
                                   value="{{$article->a_title}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Description" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="Description" name="a_description"
                                      rows="3">{{$article->a_description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Content" class="col-sm-2 control-label">Content</label>
                        <div class="col-sm-10">
                            <textarea id="demo" class="ckeditor form-control" rows="10"
                                      name="a_content">{{$article->a_content}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Tags" class="col-sm-2 control-label">Tags</label>
                        <div class="col-sm-10">
                                <textarea class="form-control" id="Tags" name="a_tag" rows="3"
                                          placeholder="some tags here...Ví dụ: hotgirl, gamer, tình yêu, ảnh nóng, ...">{{$article->a_tag}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-sm-2 control-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" id="imgInp" name="a_image">
                            <img id="preview" src="upload/article/{{$article->a_image}}" />
                            <i class="glyphicon glyphicon-info-sign" style="color: red">Chọn ảnh đại diện cho bài viết
                                của bạn!</i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            @if($article->highlight ==1 )
                                <input type="checkbox" id="highlight" name="highlight" checked> Highlight ?
                            @else
                                <input type="checkbox" id="highlight" name="highlight"> Highlight ?
                            @endif
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info ">Update</button>
                        <a href="administrator/article/list" class="btn btn-default pull-right">Cancel</a>
                    </div>
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

@endsection