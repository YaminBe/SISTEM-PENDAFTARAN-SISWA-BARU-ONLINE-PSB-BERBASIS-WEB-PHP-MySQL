<?php
session_start();
if (@$_SESSION['admin']) {
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Admin || MA KMM Kauman</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- ../bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
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
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>SB</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PSB</b>MA KMM</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
          <?php
include '../koneksi.php';
$jml =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_siswa"));
$t =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_siswa WHERE keterangan='TIDAK LULUS' "));
$l =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_siswa WHERE keterangan='LULUS' "));
$b =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_siswa WHERE keterangan='SEDANG DIPROSES OLEH PANITIA' "));
if (@$_SESSION['admin']) {
$sesi = @$_SESSION['admin'];
}

$sql = mysqli_query($con,"select * from tb_admin where id_admin = '$sesi'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../foto/siswa/<?php echo $data['foto']; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo $data['nama_lengkap']; ?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../foto/siswa/<?php echo $data['foto']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $data['nama_lengkap']; ?>
                  <small><?php echo date (" d F Y") ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Edit Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
         <img src="../foto/siswa/<?php echo $data['foto']; ?>" class="img-thumbnail" width="50" height="50">
        </div>
        <div class="pull-left info">
          <p><?php echo $data['nama_lengkap']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU UTAMA</li>
        <li class="active treeview">
          <a href="?page=home">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li class="treeview">
          <a href="?page=v_siswa">
            <i class="fa fa-table"></i>
            <span>Data Pendaftar</span>
            <span class="pull-right-container">
              <span class="label label-danger pull-right"><?php echo "".$jml." ";?></span>
            </span>
          </a>
        </li>
        <li>
          <a href="?page=v_penentuan">
            <i class="fa fa-edit"></i> <span>Penentuan</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">Set</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Grafik</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=grafik"><i class="fa fa-circle-o"></i> Grafik Kelulusan</a></li>
            <li><a href="?page=grafik_g"><i class="fa fa-circle-o"></i> Grafik Gender</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-print"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
              <span class="label label-danger pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=l_pendaftar"><i class="fa fa-circle-o"></i> Data Pendaftar & Data Pribadi</a></li>
            <li><a href="?page=lulus"><i class="fa fa-circle-o"></i> Laporan Lulus</a></li>
            <li><a href="?page=t_lulus"><i class="fa fa-circle-o"></i> Laporan Tidak Lulus</a></li>
            <li><a href="?page=l_kota"><i class="fa fa-circle-o"></i> Laporan Perkota</a></li>
          </ul>
        </li>

     <!--    <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i> <span>Pengaturan</span>
          </a>
        </li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->


    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-home"></i> Halaman Admin
        <small><?php echo date (" d F Y") ?></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <?php
      error_reporting();
      $page= @$_GET['page'];
      if ($page=="home") {
         include 'home_admin.php';

       } elseif ($page=="v_siswa") {
        include 'Page/v_datasiswa.php';

       } elseif ($page=="del_siswa") {
        include 'Page/del_siswa.php';

       } elseif ($page=="detail_siswa") {
        include 'Page/detail.php';

       } elseif ($page=="e_siswa") {
        include 'Page/update.php';

       } elseif ($page=="proses") {
        include 'Page/proses.php';

       } elseif ($page=="cek") {
        include 'Page/v_cek.php';
        
       } elseif ($page=="status") {
        include 'Page/v_status.php';
        
       } elseif ($page=="grafik") {
        include 'Page/G_ket.php';
        
       } elseif ($page=="grafik_g") {
        include 'Page/G_gender.php';
        
       } elseif ($page=="l_pendaftar") {
        include 'Page/l_pendaftar.php';
        
       } elseif ($page=="v_penentuan") {
        include 'Page/v_penentuan.php';

       } elseif ($page=="lulus") {
        include 'Page/l_lulus.php';

       } elseif ($page=="t_lulus") {
        include 'Page/l_tlulus.php';

       } elseif ($page=="l_kota") {
        include 'Page/l_kota.php';

       }elseif ($page=="") {
       include 'home_admin.php';
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
      
    </div>
    <strong>Copyright &copy; 2018 <a href=""> Rahmatillah</a>.</strong> PSB MA KMM Kauman
  </footer>

</div>


<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- ../bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script>
  $(function () {
    $("#data").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

</body>
</html>



<?php
} else{
echo "<script> window.location='../login.php';</script>";

}