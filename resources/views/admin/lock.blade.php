<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NEET Joker LockScreen</title>
    <base href="{{asset('')}}"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="public/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/admin/dist/css/AdminLTE.min.css">
    <style type="text/css">
        .nav-tabs {
            margin-bottom: 15px;
        }

        .sign-with {
            margin-top: 25px;
            padding: 20px;
        }

        div#OR {
            height: 30px;
            width: 30px;
            border: 1px solid #C2C2C2;
            border-radius: 50%;
            font-weight: bold;
            line-height: 28px;
            text-align: center;
            font-size: 12px;
            float: right;
            position: absolute;
            right: -16px;
            top: 40%;
            z-index: 1;
            background: #DFDFDF;
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
    <div class="lockscreen-logo">
        <a href=""><b>NEET</b> Joker</a>
    </div>
    <!-- User name -->
    <div class="lockscreen-name">Who are you ?</div>
    @if(count($errors) > 0)
        @foreach($errors->all() as $err)
            <script>
                alert("{{ $err }}");
            </script>
        @endforeach
    @endif
    @if(session('flash_message'))
        <script>
            alert("{{ Session::get('flash_message') }}");
        </script>
@endif
<!-- START LOCK SCREEN ITEM -->
    <div class="lockscreen-item">
        <!-- lockscreen image -->
        <div class="lockscreen-image">
            <img src="public/admin/dist/img/anonymous.jpg" alt="User Image">
        </div>
        <!-- /.lockscreen-image -->
        <!-- lockscreen credentials (contains the form) -->
        <form class="lockscreen-credentials" action="administrator/auth" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="input-group">
                <input type="email" name="u_email" class="form-control" placeholder="Your Email">

                <div class="input-group-btn">
                    <button type="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
                </div>
            </div>
        </form>
        <!-- /.lockscreen credentials -->
        <!-- Large modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Registration - <a href="">NEETjoker.com</a></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li><span style="color: red;font-size: 20px">Registration</span></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="Registration">
                                        <form action="user/registration" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <div class="form-group">
                                                <label for="email" class="col-sm-3 control-label">
                                                    Name</label>
                                                <div class="col-sm-9">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <select class="form-control" id="u_gender" name="u_gender">
                                                                <option value="1">Mr.</option>
                                                                <option value="2">Ms.</option>
                                                                <option value="3">Mrs.</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="u_name" name="u_name" placeholder="Name"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-sm-3 control-label">
                                                    Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" id="u_email" name="u_email"
                                                           placeholder="Email"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="mobile" class="col-sm-3 control-label">
                                                    Mobile</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="u_phone" name="u_phone"
                                                           placeholder="Mobile"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="col-sm-3 control-label">
                                                    Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="u_pass" name="u_pass"
                                                           placeholder="Password"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="col-sm-3 control-label">
                                                    Password Again</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="u_passAgn" name="u_passAgn"
                                                           placeholder="Password"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="col-sm-3 control-label">
                                                    Avatar</label>
                                                <div class="col-sm-9">
                                                    <input type="file" class="form-control" id="u_avatar"  name="u_avatar"
                                                           /> Chọn hình đại diện
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-9">
                                                    <input type="checkbox" name="rules"> Bạn có đồng ý với
                                                    <a href="javascript:" class="btn-link" id="dieukhoan" data-target="#rules" name="rules"
                                                            style=" padding: 0px;color: blue"> điều khoản
                                                    </a>
                                                    của website?
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                </div>
                                                <div class="col-sm-9">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        Save & Continue
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-md-4">
                                <div class="row text-center sign-with">
                                  <img src="public/front/images/neetjoker.png">
                                  <h2>Chúc các bạn một ngày vui vẻ</h2>
                                  <h4>Theo dõi chúng tôi tại</h4>
                                </div>
                                <div class="fb-follow" data-href="https://www.facebook.com/neetjokerdn/" data-layout="standard" data-width="270px" data-size="small" data-show-faces="true"></div>

                                <div id="fb-root"></div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert alert-danger hide">

        </div>
        <div class="alert alert-success hide">

        </div>
        <div class="modal fade" id="rules" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title">Điều khoản sử dụng website</h2>
                    </div>
                    <div class="modal-body">
                        <p>1. Không vi phạm pháp luật và các quy định của Nhà nước Cộng hòa XHCN việt Nam </p></br>
                        <p>2. Không vi phạm đạo đức, thuần phong mỹ tục </p></br>
                        <p>3. Không vu cáo, bôi nhọ, miệt thị bất kì các cá nhân tổ chức nào. Muốn thì gặp trực tiếp đừng đá đểu sau lưng. </p></br>
                        <p>4. Không chửi bới và dùng lời lẽ thô tục </p></br>
                        <p>5. ... Tự suy nghĩ đi hết rồi </p></br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.lockscreen-item -->
    <div class="help-block text-center">
        Enter your Email to retrieve your session. If you dont have account yet?</br>
        <button class="btn-link" id="register" data-target="#myModal"
                style=" padding: 0px; font-size: 17px;color: red"> Register Here!
        </button>
    </div>
    <div class="text-center">
        <a href="">Or get out of here</a>
    </div>
    <div class="lockscreen-footer text-center">
        Copyright &copy;2017 <b><a href="http://almsaeedstudio.com" class="text-black"> NEET Joker </a></b><br>
        All rights reserved
    </div>
</div>
<!-- /.center -->

<!-- jQuery 2.2.3 -->
<script src="public/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="public/admin/bootstrap/js/bootstrap.min.js"></script>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=262324097514857";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script>
    $('#register').click(function () {
        $('#myModal').modal();
    })
    $('#dieukhoan').click(function () {
        $('#rules').modal();
    })
</script>
<script>
    $(document).ready(function(){

        // Khi người dùng click Đăng ký
        $('#register-btn').click(function(){

            // Lấy dữ liệu
            var data = {
                u_name    : $('#u_name').val(),
                u_pass    : $('#u_pass').val(),
                u_email       : $('#u_email').val(),
                u_gender    : $('#u_gender').val(),
                u_phone    : $('#u_phone').val(),
                u_avatar    : $('#u_avatar').val(),

            };

            // Gửi ajax
            $.ajax({
                type : "post",
                dataType : "JSON",
                url : "user/registration",
                data : data,
                success : function(result)
                {
                    // Có lỗi, tức là key error = 1
                    if (result.hasOwnProperty('error') && result.error == '1'){
                        var html = '';

                        // Lặp qua các key và xử lý nối lỗi
                        $.each(result, function(key, item){
                            // Tránh key error ra vì nó là key thông báo trạng thái
                            if (key != 'error'){
                                html += '<li>'+item+'</li>';
                            }
                        });
                        $('.alert-danger').html(html).removeClass('hide');
                        $('.alert-success').addClass('hide');
                    }
                    else{ // Thành công
                        $('.alert-success').html('Đăng ký thành công!').removeClass('hide');
                        $('.alert-danger').addClass('hide');

                        // 4 giay sau sẽ tắt popup
                        setTimeout(function(){
                            $('#myModal').modal('hide');
                            // Ẩn thông báo lỗi
                            $('.alert-danger').addClass('hide');
                            $('.alert-success').addClass('hide');
                        }, 4000);
                    }
                }
            });
        });
    });
</script>
</body>
</html>
