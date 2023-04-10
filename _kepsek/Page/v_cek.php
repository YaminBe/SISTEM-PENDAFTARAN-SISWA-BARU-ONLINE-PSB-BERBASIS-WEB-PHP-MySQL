
	<style>
	body{
		font-family: arial;

	}
	.header{
		padding-bottom:20px;
		text-align: center;

	}
	.header img{
		height: 70px;
		display: block;
		margin-left: auto;
		margin-right: auto;

	}.header hr{
		border:5px double ;

	}
	</style>
	<!--  -->


<?php
$id = @$_GET['id'];
$sql = mysqli_query($con,"select * from tb_siswa where id_siswa = '$id'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>
	<table class="table">
		        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-danger">
            <div class="box-body box-profile">
              <a  target="_blank" href="Page/Laporan/print_siswa.php?kdsis=<?php echo $data['id_siswa']?>" class="btn bg-maroon btn-block"> <i class="fa fa-print"></i> Live Print </a>
              <a target="_blank" href="../Laporan/siswa_pdf.php?kdsis=<?php echo $data['id_siswa']?>" class="btn bg-orange btn-block"> <i class="fa fa-download"></i> Download PDF </a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
        </div>
		<center><img src="../foto/siswa/<?=$data['foto']?>" height="120" style="border:5px double ;"></center>
		<br>
		<tr style="background-color: red;color: white; ">
			<th>BIODATA DIRI</th>
			<th></th>
			<th></th>
		</tr>
			<tr>
				<th>Nama Siswa</th>
				<th>:</th>
				<th> <?=$data['nama_siswa']?></th>
			</tr>
			<tr>
				<th>TTL</th>
				<th>:</th>
				<th><?=$data['tpt_lahir']?> , <?=$data['tgl_lahir']?></th>
			</tr>
			<tr>
				<th>Jenis Kelamin</th>
				<th>:</th>
				<th> <?=$data['jk']?></th>
			</tr>
			<tr>
				<th>Anak Ke</th>
				<th>:</th>
				<th> <?=$data['anakke']?> Dari <?=$data['jml_saudara']?> Saudara</th>
			</tr>
			<tr>
				<th>Hobi</th>
				<th>:</th>
				<th> <?=$data['hobi']?></th>
			</tr>
			<tr>
				<th>Cita-cita</th>
				<th>:</th>
				<th> <?=$data['cita']?></th>
			</tr>
			<tr style="background-color: red;color: white; ">
				<th>DATA TEMPAT TINGGAL</th>
				<th></th>
				<th></th>
		   </tr>
			<tr>
				<th>Alamat</th>
				<th>:</th>
				<th> <?=$data['alamat']?></th>
			</tr>
			<tr>
				<th>No. Rumah</th>
				<th>:</th>
				<th> <?=$data['no_rumah']?></th>
			</tr>
			<tr>
				<th>RT</th>
				<th>:</th>
				<th> <?=$data['rt']?></th>
			</tr>
			<tr>
				<th>RW</th>
				<th>:</th>
				<th> <?=$data['rw']?></th>
			</tr>
			<tr>
				<th>Kelurahan</th>
				<th>:</th>
				<th> <?=$data['kel']?></th>
			</tr>
			<tr>
				<th>Kecamatan</th>
				<th>:</th>
				<th> <?=$data['kec']?></th>
			</tr>
			<tr>
				<th>Kabupaten</th>
				<th>:</th>
				<th> <?=$data['kab']?></th>
			</tr>
			<tr>
				<th>Provinsi</th>
				<th>:</th>
				<th> <?=$data['prov']?></th>
			</tr>
			<tr>
				<th>Kode Pos</th>
				<th>:</th>
				<th> <?=$data['pos']?></th>
			</tr>
			<tr>
				<th>Warga Negara / Suku</th>
				<th>:</th>
				<th> <?=$data['wns']?></th>
			</tr>
			<tr>
				<th>No. NISN</th>
				<th>:</th>
				<th> <?=$data['no_nisn']?></th>
			</tr>
			<tr>
				<th>No. NPSN</th>
				<th>:</th>
				<th> <?=$data['no_npsn']?></th>
			</tr>
			<tr>
				<th>No. KK</th>
				<th>:</th>
				<th> <?=$data['no_kk']?></th>
			</tr>
<?php
$id = @$_GET['id'];
$sql = mysqli_query($con,"select * from tb_nilai where id_siswa = '$id'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>
			<tr style="background-color: red;color: white; ">
				<th>DATA NILAI UJIAN NASIONAL SLTP</th>
				<th></th>
				<th></th>
		   </tr>
		   <tr>
				<th>Matematika</th>
				<th>:</th>
				<th> <?=$data['nilai1']?></th>
			</tr>
			 <tr>
				<th>Bahasa Indonesia</th>
				<th>:</th>
				<th> <?=$data['nilai2']?></th>
			</tr>
			 <tr>
				<th>Bahasa Inggris</th>
				<th>:</th>
				<th> <?=$data['nilai3']?></th>
			</tr>
			 <tr>
				<th>Ilmu Pengetahuan Alam</th>
				<th>:</th>
				<th> <?=$data['nilai4']?></th>
			</tr>
			 <tr>
				<th>Ilmu Pengetahuan Sosial</th>
				<th>:</th>
				<th> <?=$data['nilai5']?></th>
			</tr>
				 <tr>
				<th>Jumlah Nilai</th>
				<th>:</th>
				<th> <?=$data['jumlah']?></th>
			</tr>
<?php
$id = @$_GET['id'];
$sql = mysqli_query($con,"select * from tb_ortu where id_siswa = '$id'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>
			<tr style="background-color: red;color: white; ">
				<th>DATA ORANG TUA (Ayah)</th>
				<th></th>
				<th></th>
		   </tr>
		   <tr>
				<th>Nama Ayah</th>
				<th>:</th>
				<th> <?=$data['nama_ayah']?></th>
			</tr>
			 <tr>
				<th>NIK Ayah</th>
				<th>:</th>
				<th> <?=$data['nik_ayah']?></th>
			</tr>
			 <tr>
				<th>Tempat Tanggal Lahir</th>
				<th>:</th>
				<th> <?=$data['tmp_ayah']?> , <?=$data['tgl_ayah']?></th>
			</tr>
			 <tr>
				<th>Agama</th>
				<th>:</th>
				<th> <?=$data['agama_ayah']?></th>
			</tr>
			 <tr>
				<th>Pendidikan Terakhir</th>
				<th>:</th>
				<th> <?=$data['pddk_ayah']?></th>
			</tr>
			 <tr>
				<th>Pekerjaan Ayah</th>
				<th>:</th>
				<th> <?=$data['pddk_ayah']?></th>
			</tr>
			 <tr>
				<th>Penghasilan Ayah</th>
				<th>:</th>
				<th> <?=$data['penghasilan_ayah']?></th>
			</tr>
			 <tr>
				<th>Alamat Ayah</th>
				<th>:</th>
				<th> <?=$data['alamat_ayah']?></th>
			</tr>
			<tr>
				<th>Kode Pos</th>
				<th>:</th>
				<th> <?=$data['pos_ayah']?></th>
			</tr>
			<tr>
				<th>HP Ayah</th>
				<th>:</th>
				<th> <?=$data['hp_ayah']?></th>
			</tr>
			<tr style="background-color: red;color: white; ">
				<th>DATA ORANG TUA (Ibu)</th>
				<th></th>
				<th></th>
		   </tr>
		   <tr>
				<th>Nama Ibu</th>
				<th>:</th>
				<th> <?=$data['nama_ibu']?></th>
			</tr>
			 <tr>
				<th>NIK Ibu</th>
				<th>:</th>
				<th> <?=$data['nik_ibu']?></th>
			</tr>
			 <tr>
				<th>Tempat Tanggal Lahir</th>
				<th>:</th>
				<th> <?=$data['tmp_ibu']?> , <?=$data['tgl_ibu']?></th>
			</tr>
			 <tr>
				<th>Agama</th>
				<th>:</th>
				<th> <?=$data['agama_ibu']?></th>
			</tr>
			 <tr>
				<th>Pendidikan Terakhir</th>
				<th>:</th>
				<th> <?=$data['pddk_ibu']?></th>
			</tr>
			 <tr>
				<th>Pekerjaan Ibu</th>
				<th>:</th>
				<th> <?=$data['pddk_ibu']?></th>
			</tr>
			 <tr>
				<th>Penghasilan Ibu</th>
				<th>:</th>
				<th> <?=$data['penghasilan_ibu']?></th>
			</tr>
			 <tr>
				<th>Alamat Ibu</th>
				<th>:</th>
				<th> <?=$data['alamat_ibu']?></th>
			</tr>
			<tr>
				<th>Kode Pos</th>
				<th>:</th>
				<th> <?=$data['pos_ibu']?></th>
			</tr>
			<tr>
				<th>HP Ibu</th>
				<th>:</th>
				<th> <?=$data['hp_ibu']?></th>
			</tr>
<?php
$id = @$_GET['id'];
$sql = mysqli_query($con,"select * from tb_wali where id_siswa = '$id'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>
			<tr style="background-color: red;color: white; ">
				<th>DATA WALI</th>
				<th></th>
				<th></th>
		   </tr>
		   <tr>
				<th>Nama Wali</th>
				<th>:</th>
				<th> <?=$data['nama_wali']?></th>
			</tr>
			 <tr>
				<th>NIK Wali</th>
				<th>:</th>
				<th> <?=$data['nik_wali']?></th>
			</tr>
			 <tr>
				<th>Tempat Tanggal Lahir</th>
				<th>:</th>
				<th> <?=$data['tmp_wali']?> , <?=$data['tgl_wali']?></th>
			</tr>
			 <tr>
				<th>Agama</th>
				<th>:</th>
				<th> <?=$data['agama_wali']?></th>
			</tr>
			 <tr>
				<th>Pendidikan Terakhir</th>
				<th>:</th>
				<th> <?=$data['pddk_wali']?></th>
			</tr>
			 <tr>
				<th>Pekerjaan Wali</th>
				<th>:</th>
				<th> <?=$data['pddk_wali']?></th>
			</tr>
			 <tr>
				<th>Penghasilan Wali</th>
				<th>:</th>
				<th> <?=$data['penghasilan_wali']?></th>
			</tr>			
			<tr>
				<th>Warga Negara / Suku</th>
				<th>:</th>
				<th> <?=$data['wns_wali']?></th>
			</tr>
			 <tr>
				<th>Alamat Wali</th>
				<th>:</th>
				<th> <?=$data['alamat_wali']?></th>
			</tr>

	</table>
	

