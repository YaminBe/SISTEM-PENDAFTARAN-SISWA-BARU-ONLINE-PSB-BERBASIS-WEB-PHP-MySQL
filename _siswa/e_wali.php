<!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Data Wali Siswa</b></h3>

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

$sql_formulir = mysqli_query($con,"select * from tb_wali where id_siswa = '$sesi'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql_formulir);
?>
          <form action="?page=proses" method="post">
          	<div class="col-md-6">
          		<div class="row">
	          		<div class="form-group">
	          		<label>Nama Wali</label>
	          		   <input type="text" name="nama_wali" class="form-control" value="<?=$data['nama_wali']?>">
	          		   <input type="hidden" name="kd_wali" class="form-control" value="<?=$data['id_siswa']?>">
	          		</div>
	          		<div class="form-group">
	          		<label>NIK Wali</label>
	          		   <input type="text" name="nik_wali" class="form-control" value="<?=$data['nik_wali']?>">
	          		</div>
	          		<div class="form-group">
	          		<label>Tempat Lahir Wali</label>
	          		   <input type="text" name="tmp_wali" class="form-control" value="<?=$data['tmp_wali']?>">
	          		</div>
	          		<div class="form-group">
	          			 <label>Tanggal Lahir Wali</label>
		                <div class="input-group date">
		                  <div class="input-group-addon">
		                    <i class="fa fa-calendar"></i>
		                  </div>
		                  <input type="date" name="tgl_wali" class="form-control pull-right" id="datepicker" value="<?=$data['tgl_wali']?>">
		                </div>
	          		</div>
	          		<div class="form-group">
	          		<label>Agama</label>
	          		<select name="agama_wali" class="form-control">
	          			<option value="Islam">Islam</option>
	          		</select>
	          		</div>
	          	
	          		<div class="form-group">
	          			<input type="submit" name="update_wali" class="btn btn-info btn-lg" value="Simpan Data">
	          		</div>


          	    </div>          		
          	</div>
          	<div class="col-md-6">
          		<div class="form-group">
	          		<label>Pendidikan Wali</label>
	          		   <input type="text" name="pddk_wali" class="form-control" value="<?=$data['pddk_wali']?>">
	          		</div>
	          		<div class="form-group">
	          		<label>Pekerjaan Wali</label>
	          		   <input type="text" name="kerja_wali" class="form-control" value="<?=$data['kerja_wali']?>">
	          		</div>
	          		<div class="form-group">
	          		<label>Penghasilan Wali Perbulan</label>
	          		   <input type="text" name="penghasilan_wali" class="form-control" value="<?=$data['penghasilan_wali']?>">
	          		</div>
	          		<div class="form-group">
	          		<label>Warga Negara / Suku</label>
	          		   <input type="text" name="wns_wali" class="form-control" value="<?=$data['wns_wali']?>">
	          		</div>
	          		<div class="form-group">
	          		<label>Alamat</label>
	          		   <textarea type="text" name="alamat_wali" class="form-control"><?=$data['alamat_wali']?></textarea>
	          		</div>
          		
          	</div>


          </form>
  </div>
</div>
