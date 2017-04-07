@extends('admin.layout.index')
@section('content')

    <section class="content-header">
        <h1>
            Categories Group
            <small>List of CG</small>
        </h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">CateGroups</h3>
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
                                        style="width: 100px;text-align: center">Appear
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending"
                                        style="width: 100px;text-align: center">Seo
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Engine version: activate to sort column ascending"
                                        style="width: 100px;text-align: center">Create at
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending"
                                        style="width: 100px;text-align: center">
                                        Update at
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending"
                                        style="width: 100px;text-align: center">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cate_groups as $ctg)
                                    <tr style="text-align: center">
                                        <td class="sorting_1">{{$ctg->cate_id}}</td>
                                        <td>{{$ctg->cate_name}}</td>
                                        <td>
                                        @if($ctg->appear ==1)
                                        Yes
                                        @else
                                        No
                                        @endif
                                        </td>
                                        <td>{{$ctg->cate_seo}}</td>
                                        <td>{{$ctg->created_at}}</td>
                                        <td>{{$ctg->updated_at}}</td>
                                        <td>
                                            <a href="administrator/cate_group/update/{{$ctg->cate_id}}" class="">Update</a>
                                            <a href="administrator/cate_group/delete/{{$ctg->cate_id}}" class=""
                                               style="padding: 20px">Delete</a>
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