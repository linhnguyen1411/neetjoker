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
                        <label for="inputName" class="col-sm-4 control-label">UserName</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputName" name="u_name"
                                   placeholder="{{$update->u_name}}">
                        </div>
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label for="inputEmail" class="col-sm-4 control-label">Email</label>

                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="inputEmail" name="u_email" disabled
                                   placeholder="{{$update->u_email}}">
                        </div>
                    </div>
                    <div class="form-group" style="width:50%;">
                        <label for="resetPasswords" class="col-sm-4 control-label">Reset Password</label>
                        <div class="col-sm-8">
                            <input type="checkbox" name="passreset"> Reset Password?
                        </div>
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label for="inputAvatar" class="col-sm-4 control-label">Choose Avatar</label>

                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="inputAvatar">
                        </div>
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label for="inputRoles" class="col-sm-4 control-label">Roles</label>
                        <div class="col-sm-8">
                            <input type="radio" value="1" name="u_roles" checked="">Administrator &nbsp;&nbsp;&nbsp;
                            <input type="radio" value="2" name="u_roles">Photographer &nbsp;&nbsp;&nbsp;
                            <input type="radio" value="4" name="u_roles">User &nbsp;&nbsp;&nbsp;
                            <input type="radio" value="3" name="u_roles">Blogger &nbsp;&nbsp;&nbsp;
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="form-group" style="width: 15%">
                            <a href="administrator/users/list" class="btn btn-default" id="btn-cancel">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection