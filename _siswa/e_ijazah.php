<!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Upload File Ijazah</b></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
			<?php
			include '../koneksi.php';
			if (@$_SESSION['siswa']) {
			$sesi = @$_SESSION['siswa'];
			}

			$sql_formulir = mysqli_query($con,"select * from tb_ijazah where id_siswa = '$sesi'") or die(mysqli_error($con));
			$data = mysqli_fetch_array($sql_formulir);
			?>
          <form action="?page=proses" method="post" enctype="multipart/form-data">
            <input type="hidden" name="kd_ijazah" value="<?=$data['id_siswa']?>" class="form-control">
      <div class="form-group">
          <br>
          <p class="text-danger"><b>Perhatian !! </b> <br> Untuk Dapat menggunkan Fitur ini , Kamu Scan Ijazah Terlebih dahulu .. <br> Silahkan Upload File Ijazah dalam Bebtuk JPG.JPEG,PNG . Maksimum 2 MB <br> </p>
     <span class="fa fa-file" style="font-size: 50px;"></span> <br>
      <label>File Ijazah</label>
      <input type="file" name="foto" class="btn btn-default">

      </div>
      <div class="form-group">
        <label>Keterangan</label>

      <input type="text" name="ket" class="form-control" placeholder="Keterangan">

      </div>
         <div class="form-group">
      <input type="submit" name="update_ijazah" class="btn btn-success btn-lg" value="Simpan Data">

      </div>
       

          </form>
</div>
</div>

