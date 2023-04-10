         
<div class="box box-solid" style="border-top: 5px solid lightgreen;">
	<div class="panel-heading">
		  <div class="page-header">
		      <h2> <i class="fa fa-edit"></i> Mendaftar</h2>
		  </div>
	</div>  
	<div class="panel-body">

<!-- PENDAFTARAN-->
  <div class="col-md-8">
  <div class="register-box-body">
   <h4><b> <i class="fa fa-user"></i> Daftar Pengguna</b></h4>

    <form action="?page=proses" method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Lengkap">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
<!-- radio -->
<div class="form-group has-feedback">
	<label>Jenis Kelamin</label> <br>
<label> 
<input type="radio" name="jk" value="Laki-laki" class="flat-red" checked>
Laki -laki
</label>
<label>
<input type="radio" name="jk" value="Perempuan" class="flat-red" checked>
Perempuan
</label>
</div>

      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username Baru">
        <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password Baru">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah">
        <span class="glyphicon glyphicon-retweet form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
        <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
      </div>
      <div class="form-group">
      	<label for="foto"> Foto</label>
        <input type="file" name="foto" class="btn btn-default">
        <input type="hidden" name="keterangan" value="SEDANG DIPROSES OLEH PANITIA">
        
        <b style="color: red;">Gunkan Foto Berwarna Terbaru Ukuran 3x4 Max 2 MB</b>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="daftar" class="btn btn-success btn-block btn-flat">Daftarkan</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
<div class="col-md-4">
  <b><i class="fa fa-info"></i> Info Penting !! </b> Baca Dulu Sebelum Mendaftar <br>
  1. Siapkan Foto Berwar terbaru
  
</div>
</div><!--END PENDAFTARAN--> 
	         
	</div>      
</div>