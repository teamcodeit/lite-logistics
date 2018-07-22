<?php
require_once("../config/dbconfig.php");

//Starting Admin Login Session
session_start();

//Process SIgn in

//Get FOrm Input
if($config->if_submit("Login")){
  $username = $config->post_value("username");
  $password = $config->post_value("password");

  //check if input is empty
  if($username == ""){
    $msg = $config->error_message("Username is Required!");
  }
  else if($password == ""){
    $msg = $config->error_message("Username is Required!");
  }
  else{
    $chkLogin = $config->login($username, $password);

    if($chkLogin == true){

     $msg = $config->success_message("Successful, Redirecting <img src='management/images/spin.gif'> ");

     echo "<script> setTimeout(function() { window.location ='management/'; }, 1500); </script>";
   }
   else{
    $msg = $config->error_message("Login Failed!");
  }
}
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin| Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="management/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="management/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="management/plugins/iCheck/square/blue.css">
</head>
<body class="hold-transition login-page" style="background:url(../img/overlay_finance_major.jpg) no-repeat; background-size: cover;">
  <div class="login-box">
   <!-- /.login-logo -->
   <div class="login-box-body">
     <p class="login-box-msg"><?php echo $msg; ?></p>

     <form method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="username" placeholder="Email" required autocomplete="off">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>


     <!--  <div class="form-group has-feedback input-group">
        
        <div class="input-group-addon">
          <span class="glyphicon glyphicon-envelope"></span>
        </div>

        <input type="email" class="form-control" name="username" placeholder="Email" required autocomplete="off">
      </div>
 -->

      <div class="row">
        <div class="col-xs-8"></div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="Login" class="btn btn-info btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->

    <a href="forgot-password">I forgot my password</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="management/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="management/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="management/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>


</body>
</html>
