<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NEET Joker Registration</title>
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
    <link rel="stylesheet" href="public/admin/bootstrap/css/bootstrap-datetimepicker.min.css">

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
        <a href="index2.html"><b>NEET</b> Joker</a>
    </div>
    <!-- User name -->
    <div class="lockscreen-name">Welcome <span style="color: green">New Member</span></div>
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
    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" action="user/registration" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="input-group" style="width: 80%">
            </br>
            <label>Tell me some thing about you ^.^</label>
            <label>Tên bạn là gì <span style="color: red">*</span></label>
            <input type="text" name="u_fullname" class="form-control" placeholder="Cho chúng tôi biết tên đầy đủ của bạn" required>
        </div>
        <div class="input-group" style="width: 80%">
            <label>Email của bạn là gì <span style="color: red">*</span></label>
            <input type="email" name="u_email" class="form-control" placeholder="Cho chúng tôi biết email của bạn" required>
        </div>
        <div class="input-group" style="width: 80%">
            <label>Password <span style="color: red">* </span></label>
            <input type="password" name="u_pass" id="password" class="form-control" onkeyup="CheckPasswordStrength(this.value)" placeholder="Mật khẩu của bạn" required>
            <span id="password_strength"></span>
        </div>
        <div class="input-group" style="width: 80%">
            <label>Password Again <span style="color: red">*</span></label>
            <input type="password" name="u_passAgn" id="passwordAgain" onkeyup="checkPass(); return false;" class="form-control" placeholder="Mật khẩu của bạn" required>
            <span id="confirmMessage" class="confirmMessage"></span>
        </div>
        <div class="input-group" style="width: 80%">
            <label>Ngày sinh của bạn là <span style="color: red">*</span></label>
            <input type="date" class="form-control" name="u_birthday" required>
        </div>
        <div class="input-group" style="width: 80%">
            <label>Địa chỉ của bạn?</label>
            <input type="text" name="u_address" class="form-control" placeholder="Cho Chúng tôi biết nơi bạn sống">
        </div>
        <div class="input-group" style="width: 80%">
            <label>Số điện thoại liên hệ <span style="color: red">*</span> </label>
            <input type="text" name="u_phone" class="form-control" placeholder="Cho Chúng tôi biết số điện thoại của bạn" required>
        </div>
        <div class="input-group" style="width: 80%">
            <label>Chọn ảnh đại diện <span style="color: red">*</span> </label>
            <input type="file" name="u_avatar" class="form-control" required>
        </div>
        <div class="input-group" style="width: 80%">
            <input name="roles" type="checkbox" required> <span style="color: blue"> Bạn đồng ý với các <button class="btn-link" id="myBtn" style="padding: 0px;color: red"> điều khoản</button> của website?</span>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Điều khoản sử dụng:</h4>
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
        </br>
        <div class="input-group" style="width: 80%">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <button type="submit" id="register" class="btn">REGISTER <i class="fa fa-arrow-right text-muted"></i></button>
            </div>
            <div class="col-md-4"></div>
        </div>
    </form>
    <!-- /.lockscreen credentials -->

    <!-- /.lockscreen-item -->
    <div class="help-block text-center">
        register
    </div>
    <div class="text-center">
        <a href="../">Or get out of here</a>
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
<script src="public/admin/bootstrap/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
    });
    function CheckPasswordStrength(password) {
        var password_strength = document.getElementById("password_strength");

        //TextBox left blank.
        if (password.length == 0) {
            password_strength.innerHTML = "";
            return;
        }

        //Regular Expressions.
        var regex = new Array();
        regex.push("[A-Z]"); //Uppercase Alphabet.
        regex.push("[a-z]"); //Lowercase Alphabet.
        regex.push("[0-9]"); //Digit.
        regex.push("[$@$!%*#?&]"); //Special Character.

        var passed = 0;
        if(password.length>6){
            passed++;
        }
        //Validate for each Regular Expression.
        for (var i = 0; i < regex.length; i++) {
            if (new RegExp(regex[i]).test(password)) {
                passed++;
            }
        }

        //Validate for length of Password.
        if (passed > 2 && password.length > 8) {
            passed++;
        }

        //Display status.
        var color = "";
        var strength = "";
        switch (passed) {
            case 0:
            case 1:
                strength = "Weak";
                color = "red";
                break;
            case 2:
                strength = "Good";
                color = "darkorange";
                break;
            case 3:
            case 4:
                strength = "Strong";
                color = "green";
                break;
            case 5:
                strength = "Very Strong";
                color = "darkgreen";
                break;
            case 6:
                strength ="Awesome";
                color = "darkgreen";
                break;
        }
        password_strength.innerHTML = strength;
        password_strength.style.color = color;
    }
    function checkPass()
    {
        //Store the password field objects into variables ...
        var pass1 = document.getElementById('password');
        var pass2 = document.getElementById('passwordAgain');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessage');
        //Set the colors we will be using ...
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        //Compare the values in the password field
        //and the confirmation field
        if(pass1.value == pass2.value){
            //The passwords match.
            //Set the color to the good color and inform
            //the user that they have entered the correct password
            pass2.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Passwords Match!"
        }else{
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            pass2.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Passwords Do Not Match!"
        }
    }
</script>
</body>
</html>
