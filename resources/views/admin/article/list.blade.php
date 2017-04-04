@extends('admin.layout.index')
@section('content')

    <section class="content-header">
        <h1>
            Article
            <small>List of Article</small>
        </h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Article</h3>
            </div>
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
        <!-- /.box-header -->
            <div class="box-body">
                <a class="glyphicon glyphicon-plus" href="administrator/article/insert"> Thêm bài mới nào ?</a>

                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">

                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                                   aria-describedby="example1_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Rendering engine: activate to sort column ascending">Id
                                    </th>
                                    <th class="sorting" style="width: 15%" tabindex="0" aria-controls="example2"
                                        rowspan="1" colspan="1"
                                        aria-label="Rendering engine: activate to sort column ascending">Article
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Rendering engine: activate to sort column ascending">Categories
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Rendering engine: activate to sort column ascending">User
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Rendering engine: activate to sort column ascending">Created_at
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Rendering engine: activate to sort column ascending">Update_at
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Rendering engine: activate to sort column ascending">Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($articles as $article)
                                    <tr style="text-align: center">
                                        <td class="sorting_1">{{$article->a_id}}</td>
                                        <td><a href="administrator/article/{{$article->a_id}}">{{$article->a_title}}</a>
                                        </td>
                                        <td>{{$article->category->c_name}}</td>
                                        <td>{{$article->user->u_name}}</td>
                                        <td>{{$article->created_at}}</td>
                                        <td>{{$article->updated_at}}</td>
                                        <td>
                                            <a href="administrator/article/update/{{$article->a_id}}"
                                               class="glyphicon glyphicon-pencil"></a>
                                            <a href="administrator/article/delete/{{$article->a_id}}"
                                               class="glyphicon glyphicon-remove"
                                               style="padding: 20px"></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                {{$articles->links()}}
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </section>

@endsection