
<?php
include 'koneksi.php';
$sql = mysqli_query($con,"SELECT *FROM tb_siswa ORDER BY id_siswa DESC LIMIT 1") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);

?>
         
<div class="box box-solid">
  <div class="panel-heading">
      <div class="page-header">
          <h2> <i class="fa fa-info"></i> Notifikasi</h2>
      </div>

<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-check"></i> Sukses Terdaftar!</h4>
  Selamat !! Akun Pendaftaran anda telah Berhasil Di Proses, Silahkan Lanjutkan Untuk Menyelesaikan Pendaftaran !!
</div>






  </div>  
  <div class="panel-body">
 
     <div class="col-md-3">
     <!-- Profile Image -->
          <div class="box box-info">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="foto/siswa/<?php echo $data ['foto']; ?>" alt="User profile picture" height="70" width="70">

              <h3 class="profile-username text-center"><?php echo $data ['nama_siswa']; ?></h3>
              <p class="text-muted text-center">Calon Siswa Baru</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Username</b> <a class="pull-right"><code><?php echo $data ['username']; ?></code> </a>
                </li>
                <li class="list-group-item">
                  <b>Password</b> <a class="pull-right"><code><?php echo $data ['password']; ?></code> </a>
                </li>
              </ul>

              <a href="login.php" class="btn btn-info btn-block"><b><span class="fa fa-lock"></span> Login</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-9">
          <div class="box box-info">
          <div class="well">
             <b>Baca !!</b> <br>
             <p>Disamping Adalah Akun Untuk Login Ke Sistem </p>  
             <p>Gunakan Username Dan Password Yang Telah Terdaftar !!</p> 
                 <p><b>Silahkan</b> Klik Tombol <a href="login.php" title="Login" class="btn btn-info"> <span class="fa fa-lock"></span> Login</a> Untuk Melanjutkan Proses Pendaftaran 
             </p>  
             
            
          </div>
        </div>
      </div>






</div>
</div>
