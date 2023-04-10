<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PSB | MA KMM Kauman</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">  
      <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
   <link rel="stylesheet" href="dist/css/font-awesome.css">
    <link rel="stylesheet" href="dist/css/font-awesome.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-red layout-top-nav" style="background-color: green;>
 <div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="?page" class="navbar-brand" style="font-size: 25px;"><b> <i class="fa fa-graduation-cap"></i> PSB</b> MA KMM</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav" style="font-size: 18px;">
            <li class="active"><a href="?page=home"> <i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a></li>
            <li><a href="?page=info"><i class="fa fa-edit"></i> Informasi Pendaftaran</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-graduation-cap"></i> Profile Sekolah <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="?page=profil"> Profil Sekolah </a></li>
                <li><a href="?page=visi"> Visi Dan Misi</a></li>
                <li><a href="?page=sarana"> Sarana Dan Prasarana</a></li>
                <!-- <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li> -->
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- <li class="dropdown user user-menu">
              <a href="login.php" class="btn btn-success"><span class="fa fa-lock"></span> Login</a>
            </li> -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lock"></i> Login<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="login.php">Calon Siswa </a></li>
                <li><a href="login_admin.php"> Admin / Kepsek</a></li>
                <!-- <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li> -->
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1 style="font-family: arial;">
          <img src="slide/logo.png" width="200" style="border-top-left-radius: 7px;border-top-right-radius: 7px;border-bottom-left-radius: 7px;border-bottom-right-radius: 7px;">
         
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-mobile"></i> (0752) 83421</a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i> kmmuhammadiyah@yahoo.com</a></li>
          <li><a href="https://id-id.facebook.com/kmm.muhammadiyah"> <i class="fa fa-facebook-f"></i>kmm.muhammadiyah</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <!-- CAROUSEL-->
                    <div class="box box-solid" style="border-bottom: 5px solid lightgreen;border-top: 5px solid lightgreen; ">
            <div class="box-header with-border">
              <marquee direction="up" height="10%;" scrolldelay="500"><h3 class="box-title">Selamat Datang !!</h3></marquee>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="slide/1.jpg" alt="First slide">

                    <div class="carousel-caption">
                      ...
                    </div>
                  </div>
                  <div class="item">
                    <img src="slide/2.jpg" alt="Second slide">

                    <div class="carousel-caption">
                      ..
                    </div>
                  </div>
                  <div class="item">
                    <img src="slide/3.jpg" alt="Third slide">

                    <div class="carousel-caption">
                      ..
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- END CAROUSEL-->

          <!--IKO CONTENT-->


        <?php 
          error_reporting();
          $page = @$_GET['page'];
          if ($page == "home") {
            include 'home.php';
          }elseif ($page == "daftar") {
            include 'daftar.php';
          }elseif ($page == "proses") {
            include 'proses.php';

          }elseif ($page == "lihat") {
           include 'limit.php';
          }elseif ($page == "profil") {
            include 'profil_sekolah.php';
          }elseif ($page == "visi") {
            include 'visi_misi.php';
          }elseif ($page == "visi") {
            include 'visi_misi.php';
          }elseif ($page == "info") {
            include 'informasi.php';
          }elseif ($page == "panduan") {
            include 'panduan.php';
          }elseif ($page == "biaya") {
            include 'biaya.php';
          }elseif ($page == "") {
            include 'home.php';
            # code...
          }else{
            echo "tidak ada halaman";
          }
           ?> 


           <!-- END KONTEN-->



      </section>
      <!-- /.content -->
    </div>

    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer" style="background-color: green; color: white;">
    <div class="container">
      <div class="pull-right hidden-xs">
         <h4><b><i class="fa fa-map"></i> Lokasi Kami</b></h4> <br>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3757.0354940527045!2d100.40348381475336!3d-0.4662542996598267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd5251ebc6fdd1f%3A0x57f2bda61f48d84b!2sMA+KMM+KAUMAN!5e1!3m2!1sid!2sid!4v1522302397818" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <h4><b> Kunjungi Kami</b></h4> <br>
       <a target="_blank" href="kmmuhammadiyah@yahoo.com" title=""><b style="color: black; font-size: 20px;"><i class="fa fa-google-plus"></i> | Gmail</b> : <b style="color: white;">kmmuhammadiyah@yahoo.com</b></a>  <br>
      <a target="_blank" href="https://id-id.facebook.com/kmm.muhammadiyah" title=""><b style="color: black; font-size: 20px;"><i class="fa fa-facebook-f"></i> | Facebook</b> : <b style="color: white;">kmm.muhammadiyah</b></a>  <br>


      <a target="_blank" href="hhttp://makmm.sch.id/index.php" title=""><b style="color:black; font-size: 20px;"><i class="fa fa-wordpress"></i> | Website</b> : <b style="color: white;">http://makmm.sch.id/index.php</b></a>  <br>

      <a target="_blank" href="https://www.youtube.com/watch?v=rBkrXJYohKw" title=""><b style="color:red; font-size: 20px;"><i class="fa fa-youtube"></i> | Youtube</b> : <b style="color: white;">Profil MA KMM Kauman Padangpanjang</b></a>  <br> <br>
      <hr>

      <strong>Copyright &copy;2018 <a href="http://yaminbae.blogspot.com">SI-PSB | MA KMM Kauman</a> Rahmatillah</strong>
    </div>
    <!-- /.container -->
    
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
