<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in PSB</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page" style="background-image: url(slide/ik.jpg);">
<div class="login-box">
  <div class="login-logo">
    <a href="" style="color: #fff;"><b>PSB</b></a>
    <P class="text-center" style="font-size: 24px;color: #fff;"> ( Pendaftaran Siswa Baru )</P>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="border-radius: 10px 10px 10px 10px; border:2px solid #4a148c;">
    <center><img src="Laporan/logo.png" height="160"></center><br> <br>
    <p class="text-left"><b style="color: #4a148c;">Login Disini !!</b></p> <br>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="user" class="form-control" placeholder="Username" style="border-radius: 100px;">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="hidden" name="level" value="siswa">
        <input type="password" name="pass" class="form-control" placeholder="Password" style="border-radius: 100px;">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-12">
          <input type="submit" name="login" class="btn btn-info btn-block" value="Login" style="border-radius: 100px; background-color: #4a148c; outline: none;">
          <a href="index.php" class="btn btn-danger btn-block" style="border-radius: 100px; background-color: #e91e63;"> <span class="glyphicon glyphicon-home"></span></a>
        <!-- /.col -->
      </div>
    </form>
    <br> <br> <br>

 <!-- AWAL: KODING LOGIN -->
<?php
session_start();
include"koneksi.php";
if (@$_POST['login']) {
   $user = trim(mysqli_real_escape_string($con, $_POST['user']));
   $pass = trim(mysqli_real_escape_string($con, $_POST['pass']));
   $level = trim(mysqli_real_escape_string($con, $_POST['level']));

  if ($level == 'siswa') {
      $sql = mysqli_query($con,"SELECT * FROM tb_siswa WHERE username ='$user' AND password='$pass' ") or die(mysqli_error($con)) ;
      $data = mysqli_fetch_array($sql);
      $id = $data [0];
      $cek = mysqli_num_rows($sql);

      if ($cek >0 ){
      $_SESSION['siswa'] = $id;
      ?>
      <script type="text/javascript">
      alert(" Sukses ...", " sukses lh tu!!:(", "success");
      window.location.href="_siswa";   
      </script>
      <?php              
      }else{
        echo" <br> <br> <br><div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4 class='text-center'><i class='glyphicon glyphicon-ban-circle'></i> Gagal Login !!</h4>
                <p class='text-center'>Username / Password Tidak Valid !!</p>
              </div>
        ";


      }

  } else  if ($level == 'guru') { 
              $sql = mysqli_query($db,"SELECT * FROM data_guru WHERE username ='$user' AND password='$pass' ") or die($db -> $error) ;
              $data = mysqli_fetch_array($sql);
              $id = $data [0];
              $cek = mysqli_num_rows($sql);

              if ($cek >0 ){
              $_SESSION['guru'] = $id;
              ?>
              <script type="text/javascript">
              alert(" Sukses ...", " sukses lh tu!!:(", "success");
              window.location.href="_guru";   
              </script>
              <?php              
              }else{
              ?>
              <script type="text/javascript">                  
              alert(" Login Gagal ...", " Periksa Kembali Username dan Password Kamu Gaes !!", "error");
              </script> 
              <?php

              }


}
}
?>

  <!-- end: CODING LOGIN -->
  <br> <br>

    <div class="social-auth-links text-center">
      Depelop By : Rahmatillah

    </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
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
