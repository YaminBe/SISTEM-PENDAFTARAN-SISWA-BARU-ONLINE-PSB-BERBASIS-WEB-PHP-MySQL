<!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Data Keterangan Pendidikan</b></h3>

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

$sql_formulir = mysqli_query($con,"select * from tb_pddk where id_siswa = '$sesi'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql_formulir);
?>
          <form action="?page=proses" method="post">
          	<div class="col-md-6">
          		<div class="row">
	          		<div class="form-group">
	          		<label>Pendidikan Sebelumnya</label>
	          		   <input type="text" name="pddk_sebelum" class="form-control" value="<?=$data['pddk_sebelum']?>">
	          		   <input type="hidden" name="kd_pddk" class="form-control" value="<?=$data['id_siswa']?>">
	          		</div>
	          		<div class="form-group">
	          		<label>Lulus Dari</label>
	          		   <input type="text" name="lulus_dr" class="form-control" value="<?=$data['lulus_dr']?>">
	          		</div>
	          		<div class="form-group">
	          		<label>Tanggal Dan Nomor STTB</label>
	          		   <input type="text" name="tg_no_sttb" class="form-control" value="<?=$data['tg_no_sttb']?>" placeholder="dd/mm/yyy / 00000000000000">
	          		</div>
	          		<div class="form-group">
	          			 <label>Lama Belajar</label>
		                  <input type="text" name="lama" class="form-control pull-right" id="datepicker" value="<?=$data['lama']?>">
	          		</div>
	          		<div class="form-group">
	          			 <label>No. UN SMP/MTs</label>
		                  <input type="text" name="no_un" class="form-control pull-right" id="datepicker" value="<?=$data['no_un']?>">
	          		</div>
	          		<div class="form-group">
	          			 <label>No. Seri Ijazah</label>
		                  <input type="text" name="no_seri" class="form-control pull-right" id="datepicker" value="<?=$data['no_seri']?>">
	          		</div>
	          		<div class="form-group">
	          			 <label>No. Seri SKHUN</label>
		                  <input type="text" name="no_skhu" class="form-control pull-right" id="datepicker" value="<?=$data['no_skhu']?>">
	          		</div>

	          	<!-- 	<div class="form-group">
	          		<label>Agama</label>
	          		<select name="agama_wali" class="form-control">
	          			<option value="Islam">Islam</option>
	          		</select>
	          		</div> -->
	          	
	          	
	          	


          	    </div>          		
          	</div>
          	<div class="col-md-6">

          		<div class="form-group">
          			<h4 class="box-title"><span class="label label-success">Rangking di SMP/MTs</span></h4>
          			<table class="table">
          				<thead>
          					<tr>
          						<th>Semester 1</th>
          						<th>:</th>
          						<th>
          						 <input type="text" name="r1" class="form-control" value="<?=$data['r1']?>">
          						</th>          						
          					</tr>
          						<tr>
          						<th>Semester 2</th>
          						<th>:</th>
          						<th>
          						 <input type="text" name="r2" class="form-control" value="<?=$data['r2']?>">
          						</th>          						
          					</tr>
          						<tr>
          						<th>Semester 3</th>
          						<th>:</th>
          						<th>
          						 <input type="text" name="r3" class="form-control" value="<?=$data['r3']?>">
          						</th>          						
          					</tr>
          						<tr>
          						<th>Semester 4</th>
          						<th>:</th>
          						<th>
          						 <input type="text" name="r4" class="form-control" value="<?=$data['r4']?>">
          						</th>          						
          					</tr>
          						<tr>
          						<th>Semester 5</th>
          						<th>:</th>
          						<th>
          						 <input type="text" name="r5" class="form-control" value="<?=$data['r5']?>">
          						</th>          						
          					</tr>
          				</thead>
          			</table>




				<div class="form-group">
				<input type="submit" name="update_pddk" class="btn btn-info btn-lg" value="Simpan Data">
				</div>

	          		
          		
          	</div>


          </form>
  </div>
</div>
