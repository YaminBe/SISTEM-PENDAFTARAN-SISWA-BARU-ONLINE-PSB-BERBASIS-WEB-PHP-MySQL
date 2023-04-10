
<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Formulir Pendaftaran.xls");?>
<table width="100%" align="center">
    <center>
        <h3>LAPORAN DATA PENDAFTARAN SISWA BARU YANG TIDAK LULUS<br>
            MA KMM KAUMAN PADANG PANJANG
        </h3>
    </center>

  <tr>
    <td height="89" colspan="19"><table width="100%" border="2" style="border-collapse: collapse;">
      <tr>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3">No</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3">Nama Siswa </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3">TTL</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3">Gender</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3">Anak Ke </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3">Jml Saudara </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3">Hobi</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3">Cita -cita</span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3">Alamat </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3">No.Rumah </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3"> RT </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3"> RW </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3"> Kelurahan </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3"> Kecamatan </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3"> Kabupaten </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3"> Provinsi </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3"> Kode Pos </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3"> WNS </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3"> Asal Sekolah </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3"> No.NISN </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3"> No.NPSN </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3"> No.KK </span></td>
        <td height="37" bordercolor="#F0F0F0" bgcolor="silver"><span class="style3"> Keterangan </span></td>
     
        </tr>
        <?php 
        include '../../../koneksi.php';
        $sql=mysqli_query($con,"SELECT * FROM tb_siswa WHERE keterangan ='TIDAK LULUS' ") or die(mysqli_error($con));
        $no=1;
        while ($data= mysqli_fetch_array($sql)) {      

         ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nama_siswa']; ?></td>
        <td><?php echo $data['tpt_lahir']; ?>, <?php echo $data['tgl_lahir']; ?></td>        
        <td><?php echo $data['jk']; ?></td>
        <td><?php echo $data['anakke']; ?></td>
        <td><?php echo $data['jml_saudara']; ?></td>
        <td><?php echo $data['hobi']; ?></td>
        <td><?php echo $data['cita']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['no_rumah']; ?></td>
        <td><?php echo $data['rt']; ?></td>
        <td><?php echo $data['rw']; ?></td>
        <td><?php echo $data['kel']; ?></td>
        <td><?php echo $data['kec']; ?></td>
        <td><?php echo $data['kab']; ?></td>
        <td><?php echo $data['prov']; ?></td>
        <td><?php echo $data['pos']; ?></td>
        <td><?php echo $data['wns']; ?></td>
        <td><?php echo $data['asal_sekolah']; ?></td>
        <td><?php echo $data['no_nisn']; ?></td>
        <td><?php echo $data['no_npsn']; ?></td>
        <td><?php echo $data['no_kk']; ?></td>
        <td><?php echo $data['keterangan']; ?></td>
        </tr>
        <?php  } ?>
    </table></td>
  </tr>
</table>

