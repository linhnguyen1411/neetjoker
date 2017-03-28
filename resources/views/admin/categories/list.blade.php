@extends('admin.layout.index')
@section('content')

    <section class="content-header">
        <h1>
            Categories
            <small>List of</small>
        </h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Categories</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                                   aria-describedby="example1_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending"
                                        style="width: 50px;text-align: center">ID
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending"
                                        style="width: 100px; text-align: center">
                                        NAME
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending"
                                        style="width: 100px;text-align: center">Seo
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending"
                                        style="width: 100px;text-align: center">Highlight
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending"
                                        style="width: 100px;text-align: center">Cate groups
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Engine version: activate to sort column ascending"
                                        style="width: 100px;text-align: center">Created at
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending"
                                        style="width: 100px;text-align: center">
                                        Updated at
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending"
                                        style="width: 100px;text-align: center">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cate as $ct)
                                    <tr style="text-align: center">
                                        <td class="sorting_1">{{$ct->c_id}}</td>
                                        <td>{{$ct->c_name}}</td>
                                        <td>{{$ct->c_seo}}</td>
                                        @if($ct->c_highlight == 1)
                                            <td>Yes</td>
                                        @else
                                            <td>No</td>
                                        @endif
                                        <td>{{$ct->cate_group->cate_name}}</td>
                                        <td>{{$ct->created_at}}</td>
                                        <td>{{$ct->updated_at}}</td>
                                        <td>
                                            <a href="administrator/categories/update/{{$ct->c_id}}" class="glyphicon glyphicon-pencil"></a>
                                            <a href="administrator/categories/delete/{{$ct->c_id}}" class="glyphicon glyphicon-remove"
                                               style="padding: 20px"></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </section>

@endsection