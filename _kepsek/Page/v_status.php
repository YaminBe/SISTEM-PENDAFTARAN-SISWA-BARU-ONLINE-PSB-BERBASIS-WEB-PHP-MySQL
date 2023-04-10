 <div class="row">
        <div class="col-md-8">

          <!-- Profile Image -->
          <?php
$id = @$_GET['id'];
$sql = mysqli_query($con,"select * from tb_siswa where id_siswa = '$id'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>
          <div class="box box-info">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive" src="../foto/siswa/<?php echo $data['foto']; ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $data['nama_siswa']; ?></h3>

         <!--      <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Username</b> <a class="pull-right"><span class="label label-info"><?php echo $data['username']; ?></span> </a>
                </li>
                <li class="list-group-item">
                  <b>Password</b> <a class="pull-right"><span class="label label-info"><?php echo $data['password']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>To Day</b> <a class="pull-right"><?php echo date (" d F Y") ?></a>
                </li>
              </ul> -->

              <a href="#" class="btn bg-maroon btn-block"><b><?php echo $data['keterangan']; ?></b></a> 
              <br> <br>
			  <form action="" method="post" accept-charset="utf-8">
			  		<div class="form-group">
					<label style="font-size: 30px;">
					<input name="keterangan" value="LULUS" type="checkbox" class="flat-red" style="height: 30px;
					width: 30px; border-radius: 10px;">
					<b>LULUS</b>
					</label> <br>
					<label style="font-size: 30px;">
					<input name="keterangan" value="TIDAK LULUS" type="checkbox" class="flat-red" style="height: 30px;
					width: 30px;">
					<b>TIDAK LULUS</b>
					</label> <br>
						<label style="font-size: 30px;">
					<input name="keterangan" value="CADANGAN" type="checkbox" class="flat-red" style="height: 30px;
					width: 30px;">
					<b>CADANGKAN</b>
					</label>
				</div>
				<input type="submit" name="proses" class="btn btn-info btn-block" value="OK">
			  </form>

<?php

if (isset($_POST['proses'])) {
$keterangan = trim(mysqli_real_escape_string($con, $_POST['keterangan']));

mysqli_query($con,"UPDATE tb_siswa SET keterangan='$keterangan' WHERE id_siswa='$id' ") or die(mysql_error($con));
?>

<script type="text/javascript">
alert(" Suskse !! Data berhasil di PROSES !! ")

window.location.href="?page=v_penentuan";     
</script>
<?php 
}
?>
      
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          
        </div>

     