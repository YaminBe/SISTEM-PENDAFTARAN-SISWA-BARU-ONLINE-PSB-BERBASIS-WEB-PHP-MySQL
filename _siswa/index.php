<?php
session_start();
if (@$_SESSION['siswa']) {
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PSB | MA KMM Kauman</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
      <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../dist/css/font-awesome.css">
        <link rel="stylesheet" href="../dist/css/font-awesome.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-green sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">


  <header class="main-header">
    <!-- Logo -->
    <a href="../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PS</b>B</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PSB </b>MA KKM Kauman</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
      <?php
include '../koneksi.php';
if (@$_SESSION['siswa']) {
$sesi = @$_SESSION['siswa'];
}

$sql = mysqli_query($con,"select * from tb_siswa where id_siswa = '$sesi'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../foto/siswa/<?php echo $data['foto']; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $data['nama_siswa']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../foto/siswa/<?php echo $data['foto']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $data['nama_siswa']; ?>
                  <small><?php echo date (" d F Y") ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-danger btn-flat"> <i class="fa fa-sign-out"></i> Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="logout.php" class="btn btn-danger"><i class="fa fa-sign-out"></i></a>
          </li>
        </ul>
      </div>


    </nav>
  </header>


  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">

          <img src="../foto/siswa/<?php echo $data['foto']; ?>" class="img-thumbnail" width="50" height="50">
        </div>
        <div class="pull-left info">
          <p><?php echo $data['nama_siswa']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU UTAMA</li>
        <li class="treeview">
          <a href="?page=home">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Lengkapi Formulir</span>
            <span class="pull-right-container">
              <span class="label label-danger pull-right">6</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=edit1"><i class="fa fa-circle-o text-aqua"></i> Data Pribadi</a></li>
            <li><a href="?page=edit5"><i class="fa fa-circle-o text-aqua"></i> Data Pendidikan</a></li>
            <li><a href="?page=edit2"><i class="fa fa-circle-o text-aqua"></i> Data Orang Tua</a></li>
            <li><a href="?page=edit3"><i class="fa fa-circle-o text-aqua"></i> Data Wali</a></li>
            <li><a href="?page=edit4"><i class="fa fa-circle-o text-aqua"></i> Data Nilai</a></li>
             <li><a href="?page=edit6"><i class="fa fa-circle-o text-aqua"></i> Upload File Ijazah</a></li>
          </ul>
        </li>
          <li>
          <a href="?page=status">
            <i class="fa fa-check"></i> <span>Penerimaan</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">Cek</small>
            </span>
          </a>
        </li>
        <li>
          <a href="?page=cetak">
            <i class="fa fa-print"></i> <span>Cetak Formulir</span>
          </a>
        </li>
       <!--  <li>
          <a href="?page=id">
            <i class="fa fa-book"></i> <span>Panduan</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">View</small>
            </span>
          </a>
        </li> -->


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
<b><i class="fa fa-home"></i> Home </b> / <span class="label label-success"> Pendaftaran Siswa Baru </span>
 <ol class="breadcrumb">
        <li>
          <b><?php echo date (" d F Y") ?></b>
        </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <?php
      error_reporting();
      $page= @$_GET['page'];
      if ($page=="home") {
        include 'home.php';

       } elseif ($page=="edit1") {
        include 'e_pribadi.php';

       }elseif ($page=="proses") {
         include 'proses.php';

       }elseif ($page=="edit2") {
        include 'e_ortu.php';

       }elseif ($page=="edit3") {
         include 'e_wali.php';

       }elseif ($page=="edit4") {
         include 'e_nilai.php';

       }elseif ($page=="edit5") {
         include 'e_pddk.php';

       }elseif ($page=="edit6") {
         include 'e_ijazah.php';

       }elseif ($page=="status") {
         include 'detail.php';

       }elseif ($page=="cetak") {
         include 'Cetak_detail.php';

       }elseif ($page=="") {
       include 'home.php';
         # code...
       }else{
        include '404.php';
       }


       ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="background-color: #263238; color: white;">
    <div class="pull-right hidden-xs">
      <!-- <b>Version</b> 0.1 -->
    </div>
    <strong>Copyright &copy; 2018 <a href="http://yaminbae.blogspot.com"> Rahmatillah</a>.</strong> PSB MA KMM Kauman
  </footer>

</div>
<!-- ./wrapper -->
<!-- Page script -->
<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page script -->

</body>
</html>

<?php
} else{
echo "<script> window.location='../login.php';</script>";

}


