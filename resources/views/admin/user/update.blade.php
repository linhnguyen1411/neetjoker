@extends('admin.layout.index')
@section('content')
    <section class="content-header">
        <h1>Update Categories Groups</h1>
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
            <form class="form-horizontal" action="administrator/users/update/{{$update->u_id}}" method="post"
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
                                    <input type="text" class="form-control" id="u_name" name="u_name" value="{{$update->u_name}}" placeholder="Name"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" value="{{$update->u_email}}" name="u_email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label for="inputPhone" class="col-sm-2 control-label">Phone</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" name="u_phone" value="{{$update->u_phone}}" placeholder="Phone">
                        </div>
                    </div>
                    <div class="form-group" style="width:50%;">
                        <label for="resetPasswords" class="col-sm-2 control-label">Reset Password</label>
                        <div class="col-sm-10">
                            <input type="checkbox" name="passreset"> Reset Password?
                        </div>
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label for="inputAvatar" class="col-sm-2 control-label">Choose Avatar</label>

                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="inputAvatar" name="u_avatar">
                        </div>
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label for="inputRoles" class="col-sm-2 control-label">Roles</label>
                        <div class="col-sm-10">
                            <input type="radio" value="1" name="u_roles" checked="">Administrator &nbsp;&nbsp;&nbsp;
                            <input type="radio" value="2" name="u_roles">Photographer &nbsp;&nbsp;&nbsp;
                            <input type="radio" value="4" name="u_roles">User &nbsp;&nbsp;&nbsp;
                            <input type="radio" value="3" name="u_roles">Blogger &nbsp;&nbsp;&nbsp;
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="form-group" style="width: 20%">
                            <a href="administrator/users/list" class="btn btn-default" id="btn-cancel">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection