<?php
include 'koneksi.php';

if (isset($_POST['daftar'])) {
		$id_siswa = @$_POST['id_siswa'];
		$username = @$_POST['username'];
		$password = @$_POST['password']; 
		$nama_siswa = @$_POST['nama_siswa'];		     
		$asal_sekolah = @$_POST['asal_sekolah'];
		$alamat = @$_POST['alamat'];
		$keterangan = @$_POST['keterangan'];

		$sumber = @$_FILES['foto']['tmp_name'];
		$target = 'foto/siswa/';
		$nama_gambar = @$_FILES['foto']['name'];

		$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

		if ($pindah) {

		mysqli_query($con,"INSERT INTO tb_siswa VALUES ('$id_siswa','$username','$password','$nama_siswa'
			,'','','','','','','','','$alamat','','','','','','','','','','','','','','$nama_gambar','$keterangan')") or die (mysqli_error($con));
		mysqli_query($con,"INSERT INTO tb_ortu VALUES ('$id_siswa','','','','','','','','','','','','','','','','','','','','','','')") or die (mysqli_error($con));
		mysqli_query($con,"INSERT INTO tb_wali VALUES ('$id_siswa','','','','','','','','','','')") or die (mysqli_error($con));
		mysqli_query($con,"INSERT INTO tb_nilai VALUES ('$id_siswa','','','','','','')") or die (mysqli_error($con));

		mysqli_query($con,"INSERT INTO tb_pddk VALUES ('$id_siswa','','','','','','','','','','','','')") or die (mysqli_error($con));

		mysqli_query($con,"INSERT INTO tb_ijazah VALUES ('$id_siswa','','')") or die (mysqli_error($con));

		?>

		<script type="text/javascript">
		alert(" Sukses ! Berhasil Mendaftar.. SILAHKAN LOGIN !!"); 
		window.location.href="?page=lihat";     
		</script>
		<?php

		} else{


		?>
		<script type="text/javascript">

		alert("gambar gagal disimpan  !!");
		window.location.href="?page=daftar"; 
		</script>         

		<?php
		}

 } 


?>