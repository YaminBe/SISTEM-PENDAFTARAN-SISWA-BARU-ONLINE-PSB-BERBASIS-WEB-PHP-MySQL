
<?php
$id = @$_GET['id'];
mysqli_query($con,"delete from tb_siswa where id_siswa = '$id'") or die(mysqli_error($con));
mysqli_query($con,"delete from tb_ortu where id_siswa = '$id'") or die(mysqli_error($con));
mysqli_query($con,"delete from tb_wali where id_siswa = '$id'") or die(mysqli_error($con));
mysqli_query($con,"delete from tb_nilai where id_siswa = '$id'") or die(mysqli_error($con));
?>
 <script type="text/javascript">
        alert(" Sukses !", "Data berhasil di hapus!", "success") ;  
        window.location.href="?page=v_siswa";   
 </script>