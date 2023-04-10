<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>

      <?php 
        include '../koneksi.php';
        $sql=mysqli_query($con,"SELECT * FROM tb_siswa WHERE prov='$_GET[prov]' ") or die(mysqli_error($con));
  
       $data= mysqli_fetch_array($sql)  

         ?>

<table width="100%" align="center">
    <center>
        <img src="logo.png" width="100">
        <h3>LAPORAN DATA PENDAFTARAN SISWA BARU PERKOTA/ PROVINSI <br>
            MA KMM KAUMAN PADANG PANJANG
        </h3>
    </center>


</table>
<hr>
<h3>Kota / Provinsi : <?php echo $_GET['prov']; ?> <br>
Dicetak Tanggal : <?php echo date('Y-m-d'); ?></h3>

    <table width="100%" border="2" cellpadding="2" style="border-collapse: collapse;font-family: arial;font-size: 13px;">
      <tr style="height: 40px;background-color: silver;">
        <td>No</td>
        <td>Nama Siswa </td>
        <td>TTL</td>
        <td>Gender</td>
        <td>Alamat </td>
        <td> Kabupaten </td>
        <td> Provinsi </td>   
         <td> Keterangan </td>     
        </tr>
        <?php 
        include '../koneksi.php';
        $sql=mysqli_query($con,"SELECT * FROM tb_siswa WHERE prov='$_GET[prov]' ") or die(mysqli_error($con));
        $no=1;
        while ($data= mysqli_fetch_array($sql)) {      

         ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nama_siswa']; ?></td>
        <td><?php echo $data['tpt_lahir']; ?>, <?php echo $data['tgl_lahir']; ?></td>        
        <td><?php echo $data['jk']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['kab']; ?></td>
        <td><?php echo $data['prov']; ?></td>
        <td><?php echo $data['keterangan']; ?></td>
        </tr>
        <?php  } ?>
    </table>

