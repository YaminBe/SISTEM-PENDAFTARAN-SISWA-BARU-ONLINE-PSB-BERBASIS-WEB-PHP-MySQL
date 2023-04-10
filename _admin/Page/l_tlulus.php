<div class="box">
<div class="box-header">
<h3 class="box-title"> <i class="fa fa-print"></i> LAPORAN DATA PENDAFTAR <B>"TIDAK LULUS"</B></h3>
</div>
<!-- /.box-header -->
<div class="box-body">

	 <div class="col-lg-12">
<div class="block margin-bottom-sm">
</div>
<div style="margin-bottom: 19px;">
	<!-- <a href class="btn btn-info"><i class="fa fa-print"></i> Print</a>--> 
 <a href="Page/Laporan/lap_lulus.php" class="btn btn-success"><i class="fa fa-print"></i> Export Ke Excell</a>
<!-- <a href class="btn btn-danger"><i class="fa fa-save"></i> Download PDF</a> -->
 
 </div> 
<div class="table-responsive"> 
<table class="table table-striped table-hover">
<thead>
<tr>
<th>No</th>
<th> No.NISN </th>
<th>Nama Siswa </th>
<th>TTL</th>
<th>Gender</th>
<th>Alamat </th>
<th> Asal Sekolah </th>
<th> Keterangan </th>
</tr>
</thead>
<tbody>
 <?php 
// include '../../../koneksi.php';
$sql=mysqli_query($con,"SELECT * FROM tb_siswa WHERE keterangan ='TIDAK LULUS' ") or die(mysqli_error($con));
$no=1;
while ($data= mysqli_fetch_array($sql)) {

 ?>
<tr>
<th><?php echo $no++; ?></th>
<th><?php echo $data['no_nisn']; ?></th>
<th><?php echo $data['nama_siswa']; ?></th>
<th><?php echo $data['tpt_lahir']; ?>, <?php echo $data['tgl_lahir']; ?></th>
<th><?php echo $data['jk']; ?></th>
<th><?php echo $data['alamat']; ?></th>
<th><?php echo $data['asal_sekolah']; ?></th>

<th><?php echo $data['keterangan']; ?></th>
</tr>
<?php

} ?>
 
</tbody>
</table>
</div>



 
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
