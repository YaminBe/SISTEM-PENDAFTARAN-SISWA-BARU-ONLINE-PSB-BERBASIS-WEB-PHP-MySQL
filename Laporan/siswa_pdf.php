 <?php
 //Define relative patd from tdis script to mPDF
 $nama_file='cetak-deskripsi'; //Beri nama file PDF hasil.
define('_MPDF_PAtd','mpdf60/');
//define("_JPGRAPH_PAtd", '../mpdf60/graph_cache/src/');

//define("_JPGRAPH_PAtd", '../jpgraph/src/'); 
 
include(_MPDF_PAtd . "mpdf.php");
//include(_MPDF_PAtd . "graph.php");

//include(_MPDF_PAtd . "graph_cache/src/");

$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start(); 

$mpdf->useGraphs = true;

?>

 <?php
include '../koneksi.php';
$kdsis = @$_GET['kdsis'];
$sql = mysqli_query($con,"select * from tb_siswa where id_siswa = '$kdsis'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>

<table width="100%" style="font-family: arial;">
    <tr>
      <th>
        <img src="logo.png" height="70">
<h2>BIODATA</h2>
<h2>PANITIA PENERIMAAN SISWA BARU</h2>
<h3>MA KMM KAUMAN PADANG PANJANG</h3>
</th>
    </tr>
</table>

<hr style="border: 5px solid;">

  <table width="100%" style="font-family: arial;">
    <tr style="background-color: silver;">
    <td><b>BIODATA DIRI</b></td>
    <td style="color: red;"><center><?=$data['keterangan']?></center></td>
    </tr>
      <tr>
        <td>Nama Siswa</td>
        <td> <?=$data['nama_siswa']?></td>
      </tr>
      <tr>
        <td>TTL</td>
        <td><?=$data['tpt_lahir']?> , <?=$data['tgl_lahir']?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td> <?=$data['jk']?></td>
      </tr>
      <tr>
        <td>Anak Ke</td>
        <td> <?=$data['anakke']?> Dari <?=$data['jml_saudara']?> Saudara</td>
      </tr>
       <tr>
        <td>Anak Yatim/Yatim Piatu</td>
        <td> <?=$data['anak_yatim']?></td>
      </tr>
      <tr>
        <td>Hobi</td>
        <td> <?=$data['hobi']?></td>
      </tr>
      <tr>
        <td>Cita-cita</td>
        <td> <?=$data['cita']?></td>
      </tr>
      <tr style="background-color: silver;">
        <td><b>DATA TEMPAT TINGGAL</b></td>
       </tr>
      <tr>
        <td>Alamat</td>
        <td> <?=$data['alamat']?></td>
      </tr>
      <tr>
        <td>No. Rumah</td>
        <td> <?=$data['no_rumah']?></td>
      </tr>
      <tr>
        <td>RT</td>
        <td> <?=$data['rt']?></td>
      </tr>
      <tr>
        <td>RW</td>
        <td> <?=$data['rw']?></td>
      </tr>
      <tr>
        <td>Kelurahan</td>
        <td> <?=$data['kel']?></td>
      </tr>
      <tr>
        <td>Kecamatan</td>
        <td> <?=$data['kec']?></td>
      </tr>
      <tr>
        <td>Kabupaten</td>
        <td> <?=$data['kab']?></td>
      </tr>
      <tr>
        <td>Provinsi</td>
        <td> <?=$data['prov']?></td>
      </tr>
      <tr>
        <td>Kode Pos</td>
        <td> <?=$data['pos']?></td>
      </tr>
      <tr>
        <td>Warga Negara / Suku</td>
        <td> <?=$data['wns']?></td>
      </tr>
      <tr>
        <td>No. NISN</td>
        <td> <?=$data['no_nisn']?></td>
      </tr>
      <tr>
        <td>No. NPSN</td>
        <td> <?=$data['no_npsn']?></td>
      </tr>
      <tr>
        <td>No. KK</td>
        <td> <?=$data['no_kk']?></td>
      </tr>
      <?php
  include '../koneksi.php';
  $kdsis = @$_GET['kdsis'];
  $sql = mysqli_query($con,"select * from tb_pddk where id_siswa = '$kdsis'") or die(mysqli_error($con));
  $data1 = mysqli_fetch_array($sql);
  ?>
      <tr style="background-color: silver;">
        <td><b>KETERANGAN PENDIDIKAN</b></td>
       </tr>
       <tr>
        <td>Pendidikan Sebelumnya</td>
        <td> <?=$data1['pddk_sebelum']?></td>
      </tr>
       <tr>
        <td>Lulus Dari</td>
        <td> <?=$data1['lulus_dr']?></td>
      </tr>
      <tr>
        <td>Tanggal dan No STTB</td>
        <td> <?=$data1['tg_no_sttb']?></td>
      </tr>
        <tr>
        <td>Lama Belajar</td>
        <td> <?=$data1['lama']?></td>
      </tr>
        <tr>
        <td>No.UN SMP/MTs</td>
        <td> <?=$data1['no_un']?></td>
      </tr>
        <tr>
        <td>No. Seri Ijazah</td>
        <td> <?=$data1['no_seri']?></td>
      </tr>
        <tr>
        <td>No. Seri SKHU</td>
        <td> <?=$data1['no_seri']?></td>
      </tr>
      <tr style="background-color: orange;">
        <td><b>Rangking di SMP/MTs</b></td>
       </tr>
        <tr>
        <td>Semester 1</td>
        <td>Rangking : <?=$data1['r1']?></td>
      </tr>
        <tr>
        <td>Semester 2</td>
        <td>Rangking : <?=$data1['r2']?></td>
      </tr>
        <tr>
        <td>Semester 3</td>
        <td>Rangking : <?=$data1['r3']?></td>
      </tr>
        <tr>
        <td>Semester 4</td>
        <td>Rangking : <?=$data1['r4']?></td>
      </tr>
        <tr>
        <td>Semester 5</td>
        <td>Rangking : <?=$data1['r5']?></td>
      </tr>




      <?php
include '../koneksi.php';
$kdsis = @$_GET['kdsis'];
$sql = mysqli_query($con,"select * from tb_nilai where id_siswa = '$kdsis'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>
      <tr style="background-color: silver;">
        <td><b>DATA NILAI UJIAN NASIONAL SLTP</b></td>
       </tr>
       <tr>
        <td>Matematika</td>
        <td> <?=$data['nilai1']?></td>
      </tr>
       <tr>
        <td>Bahasa Indonesia</td>
        <td> <?=$data['nilai2']?></td>
      </tr>
       <tr>
        <td>Bahasa Inggris</td>
        <td> <?=$data['nilai3']?></td>
      </tr>
       <tr>
        <td>Ilmu Pengetahuan Alam</td>
        <td> <?=$data['nilai4']?></td>
      </tr>
       <tr>
        <td>Ilmu Pengetahuan Sosial</td>
        <td> <?=$data['nilai5']?></td>
      </tr>
  <?php
  include '../koneksi.php';
  $kdsis = @$_GET['kdsis'];
  $sql = mysqli_query($con,"select * from tb_ortu where id_siswa = '$kdsis'") or die(mysqli_error($con));
  $data = mysqli_fetch_array($sql);
  ?>
      <tr style="background-color: silver;">
        <td><b>DATA ORANG TUA (Ayah)</b></td>
       </tr>
       <tr>
        <td>Nama Ayah</td>
        <td> <?=$data['nama_ayah']?></td>
      </tr>
       <tr>
        <td>NIK Ayah</td>
        <td> <?=$data['nik_ayah']?></td>
      </tr>
       <tr>
        <td>Tempat Tanggal Lahir</td>
        <td> <?=$data['tmp_ayah']?> , <?=$data['tgl_ayah']?></td>
      </tr>
       <tr>
        <td>Agama</td>
        <td> <?=$data['agama_ayah']?></td>
      </tr>
       <tr>
        <td>Pendidikan Terakhir</td>
        <td> <?=$data['pddk_ayah']?></td>
      </tr>
       <tr>
        <td>Pekerjaan Ayah</td>
        <td> <?=$data['pddk_ayah']?></td>
      </tr>
       <tr>
        <td>Penghasilan Ayah</td>
        <td> <?=$data['penghasilan_ayah']?></td>
      </tr>
       <tr>
        <td>Alamat Ayah</td>
        <td> <?=$data['alamat_ayah']?></td>
      </tr>
      <tr>
        <td>Kode Pos</td>
        <td> <?=$data['pos_ayah']?></td>
      </tr>
      <tr>
        <td>HP Ayah</td>
        <td> <?=$data['hp_ayah']?></td>
      </tr>
      <tr style="background-color: silver;">
        <td><b>DATA ORANG TUA (Ibu)</b></td>
       </tr>
       <tr>
        <td>Nama Ibu</td>
        <td> <?=$data['nama_ibu']?></td>
      </tr>
       <tr>
        <td>NIK Ibu</td>
        <td> <?=$data['nik_ibu']?></td>
      </tr>
       <tr>
        <td>Tempat Tanggal Lahir</td>
        <td> <?=$data['tmp_ibu']?> , <?=$data['tgl_ibu']?></td>
      </tr>
       <tr>
        <td>Agama</td>
        <td> <?=$data['agama_ibu']?></td>
      </tr>
       <tr>
        <td>Pendidikan Terakhir</td>
        <td> <?=$data['pddk_ibu']?></td>
      </tr>
       <tr>
        <td>Pekerjaan Ibu</td>
        <td> <?=$data['pddk_ibu']?></td>
      </tr>
       <tr>
        <td>Penghasilan Ibu</td>
        <td> <?=$data['penghasilan_ibu']?></td>
      </tr>
       <tr>
        <td>Alamat Ibu</td>
        <td> <?=$data['alamat_ibu']?></td>
      </tr>
      <tr>
        <td>Kode Pos</td>
        <td> <?=$data['pos_ibu']?></td>
      </tr>
      <tr>
        <td>HP Ibu</td>
        <td> <?=$data['hp_ibu']?></td>
      </tr>
      <?php
  include '../koneksi.php';
  $kdsis = @$_GET['kdsis'];
  $sql = mysqli_query($con,"select * from tb_wali where id_siswa = '$kdsis'") or die(mysqli_error($con));
  $data = mysqli_fetch_array($sql);
  ?>
      <tr style="background-color: silver;">
        <td><b>DATA WALI</b></td>
       </tr>
       <tr>
        <td>Nama Wali</td>
        <td> <?=$data['nama_wali']?></td>
      </tr>
       <tr>
        <td>NIK Wali</td>
        <td> <?=$data['nik_wali']?></td>
      </tr>
       <tr>
        <td>Tempat Tanggal Lahir</td>

        <td> <?=$data['tmp_wali']?> , <?=$data['tgl_wali']?></td>
      </tr>
       <tr>
        <td>Agama</td>

        <td> <?=$data['agama_wali']?></td>
      </tr>
       <tr>
        <td>Pendidikan Terakhir</td>

        <td> <?=$data['pddk_wali']?></td>
      </tr>
       <tr>
        <td>Pekerjaan Wali</td>

        <td> <?=$data['kerja_wali']?></td>
      </tr>
       <tr>
        <td>Penghasilan Wali</td>

        <td> <?=$data['penghasilan_wali']?></td>
      </tr>     
      <tr>
        <td>Warga Negara / Suku</td>

        <td> <?=$data['wns_wali']?></td>
      </tr>
       <tr>
        <td>Alamat Wali</td>

        <td> <?=$data['alamat_wali']?></td>
      </tr>
       


  </table>  

<?php
$html = ob_get_contents(); //Proses untuk mengambil data
ob_end_clean();
//Here convert tde encode for UTF-8, if you prefer tde ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
// LOAD a stylesheet
$stylesheet = file_get_contents('mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);	// tde parameter 1 tells tdat tdis is css/style only and no body/html/text
$mpdf->WriteHTML($html,1);
$mpdf->Output($nama_file."-".date("Y/m/d H:i:s").".pdf" ,'I');
exit; 
?>