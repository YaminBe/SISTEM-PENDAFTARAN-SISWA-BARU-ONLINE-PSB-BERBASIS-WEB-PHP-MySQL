<div class="box">
<div class="box-header">
<h3 class="box-title"> <i class="fa fa-print"></i> LAPORAN DATA PENDAFTAR "LULUS"</h3>
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
<th>Nama Siswa </th>
<th>TTL</th>
<th>Gender</th>
<th>Anak Ke </th>
<th>Jml Saudara </th>
<th>Hobi</th>
<th>Cita -cita</th>
<th>Alamat </th>
<!-- <th>No.Rumah </th>
<th> RT </th>
<th> RW </th>
<th> Kelurahan </th>
<th> Kecamatan </th>
<th> Kabupaten </th>
<th> Provinsi </th>
<th> Kode Pos </th>
<th> WNS </th> -->
<th> Asal Sekolah </th>
<th> No.NISN </th>
<th> No.NPSN </th>
<th> No.KK </th>
<th> Keterangan </th>
</tr>
</thead>
<tbody>
 <?php 
// include '../../../koneksi.php';
$sql=mysqli_query($con,"SELECT * FROM tb_siswa WHERE keterangan ='LULUS' ") or die(mysqli_error($con));
$no=1;
while ($data= mysqli_fetch_array($sql)) {

 ?>
<tr>
<th><?php echo $no++; ?></th>
<th><?php echo $data['nama_siswa']; ?></th>
<th><?php echo $data['tpt_lahir']; ?>, <?php echo $data['tgl_lahir']; ?></th>
<th><?php echo $data['jk']; ?></th>
<th><?php echo $data['anakke']; ?></th>
<th><?php echo $data['jml_saudara']; ?></th>
<th><?php echo $data['hobi']; ?></th>
<th><?php echo $data['cita']; ?></th>
<th><?php echo $data['alamat']; ?></th>
<!-- <th><?php echo $data['no_rumah']; ?></th>
<th><?php echo $data['rt']; ?></th>
<th><?php echo $data['rw']; ?></th>
<th><?php echo $data['kel']; ?></th>
<th><?php echo $data['kec']; ?></th>
<th><?php echo $data['kab']; ?></th>
<th><?php echo $data['prov']; ?></th>
<th><?php echo $data['pos']; ?></th>
<th><?php echo $data['wns']; ?></th> -->
<th><?php echo $data['asal_sekolah']; ?></th>
<th><?php echo $data['no_nisn']; ?></th>
<th><?php echo $data['no_npsn']; ?></th>
<th><?php echo $data['no_kk']; ?></th>
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
