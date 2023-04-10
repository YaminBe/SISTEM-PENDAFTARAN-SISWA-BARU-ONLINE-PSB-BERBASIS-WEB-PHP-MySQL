<!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Data Nilai</b></h3>

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

			$sql_formulir = mysqli_query($con,"select * from tb_nilai where id_siswa = '$sesi'") or die(mysqli_error($con));
			$data = mysqli_fetch_array($sql_formulir);
			?>
          <form action="?page=proses" method="post">
          	<table class="table table-striped table-hover">
          		<input type="hidden" name="kd_nilai" value="<?=$data['id_siswa']?>" class="form-control">
          			<tr>
          				<th>No</th>
          				<th>Mata Pelajaran</th>
          				<th>Nilai</th>
          			</tr>
          			<tr>
          				<td>1</td>
          				<td>Matematika</td>
          				<td><input type="number" name="nilai1" class="form-control" value="<?=$data['nilai1']?>"></td>
          			</tr>
          			<tr>
          				<td>2</td>
          				<td>Bahasa Indonesia</td>
          				<td><input type="number" name="nilai2" class="form-control" value="<?=$data['nilai2']?>"></td>
          			</tr>
          			<tr>
          				<td>3</td>
          				<td>Bahasa Inggris</td>
          				<td><input type="number" name="nilai3" class="form-control" value="<?=$data['nilai3']?>"></td>
          			</tr>
          			<tr>
          				<td>4</td>
          				<td>Ilmu Pengetahuan Alam (IPA)</td>
          				<td><input type="number" name="nilai4" class="form-control" value="<?=$data['nilai4']?>"></td>
          			</tr>
          			<tr>
          				<td>5</td>
          				<td>Ilmu Pengetahuan Sosial (IPS)</td>
          				<td><input type="number" name="nilai5" class="form-control" value="<?=$data['nilai5']?>"></td>
          			</tr>
          			<tr>
          				<td></td>
          				<td></td>
          				<td>
          					<input type="submit" name="update_nilai" class="btn btn-info btn-lg" value="Simpan Data">
          				</td>
          			</tr>
          	</table>

          </form>
</div>
</div>

