@extends('admin.layout.index')
@section('content')
    <section class="content-header">
        <h1>Add new user</h1>
    </section>
    <section class="content">
        <div class="box ">
            <div class="box-header with-border">
                <h3 class="box-title">User Information:</h3>
            </div>
            @if(count($errors) > 0)
                <div class="alert alert-danger alert-dismissible" style="width:100%">
                    <i class="glyphicon glyphicon-info-sign"></i>
                    @foreach($errors->all() as $err)
                        {{ $err }}<br/>
                    @endforeach
                </div>
            @endif
            @if(session('flash_message'))
                <script>
                    alert("{{ Session::get('flash_message') }}");
                </script>
            @endif
            <form class="form-horizontal" action="administrator/users/insert" method="post"
                  enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="box-body">
                    <div class="form-group" style="width: 50%">
                        <label for="email" class="col-sm-2 control-label">
                            Name</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-md-4">
                                    <select class="form-control" id="u_gender" name="u_gender">
                                        <option value="1">Mr.</option>
                                        <option value="2">Ms.</option>
                                        <option value="3">Mrs.</option>
                                    </select>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="u_name" name="u_name" placeholder="Name"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" name="u_email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label for="inputPhone" class="col-sm-2 control-label">Phone</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" name="u_phone" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label for="inputPass" class="col-sm-2 control-label">Password</label>

                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPass" name="u_pass"
                                   placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label for="inputPassAgain" class="col-sm-2 control-label">Password</label>

                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassAgain" name="u_passAgain"
                                   placeholder="Type Password Again">
                        </div>
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label for="inputAvatar" class="col-sm-2 control-label">Choose Avatar</label>

                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="inputAvatar" name="u_avatar">
                        </div>
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label for="SelRoles" class="col-sm-2 control-label">Roles</label>
                        <div class="col-sm-10">
                            <select class="form-control " name="roles">
                                @foreach($roles as $role)
                                    <option value="{{$role->r_id}}">{{$role->r_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-11">
                            <a href="administrator/roles/insert" style="color: red">Thêm roles mới?</a>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="form-group" style="width: 15%">
                            <a href="administrator/cate_group/list" class="btn btn-default" id="btn-cancel">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Insert</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
