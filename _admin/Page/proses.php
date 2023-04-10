<?php
include '../koneksi.php';

if (isset($_POST['update_pribadi'])) {
       $kdsis = $_POST['kdsis'];
       $nama_siswa = trim(mysqli_real_escape_string($con, $_POST['nama_siswa']));
       $tpt_lahir = trim(mysqli_real_escape_string($con, $_POST['tpt_lahir']));
       $tgl_lahir = trim(mysqli_real_escape_string($con, $_POST['tgl_lahir']));
       $jk = trim(mysqli_real_escape_string($con, $_POST['jk']));
       $anakke = trim(mysqli_real_escape_string($con, $_POST['anakke']));
       $jml_saudara = trim(mysqli_real_escape_string($con, $_POST['jml_saudara']));
       $hobi = trim(mysqli_real_escape_string($con, $_POST['hobi']));
       $cita = trim(mysqli_real_escape_string($con, $_POST['cita']));
       $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
       $no_rumah = trim(mysqli_real_escape_string($con, $_POST['no_rumah']));
       $rt = trim(mysqli_real_escape_string($con, $_POST['rt']));
       $rw = trim(mysqli_real_escape_string($con, $_POST['rw']));
       $kel = trim(mysqli_real_escape_string($con, $_POST['kel']));
       $kec = trim(mysqli_real_escape_string($con, $_POST['kec']));
       $kab = trim(mysqli_real_escape_string($con, $_POST['kab']));
       $prov = trim(mysqli_real_escape_string($con, $_POST['prov']));
       $pos = trim(mysqli_real_escape_string($con, $_POST['pos']));
       $wns = trim(mysqli_real_escape_string($con, $_POST['wns']));
       $asal_sekolah = trim(mysqli_real_escape_string($con, $_POST['asal_sekolah']));
       $no_nisn = trim(mysqli_real_escape_string($con, $_POST['no_nisn']));
       $no_npsn = trim(mysqli_real_escape_string($con, $_POST['no_npsn']));
       $no_kk = trim(mysqli_real_escape_string($con, $_POST['no_kk']));

       mysqli_query($con, "UPDATE  tb_siswa SET nama_siswa='$nama_siswa',tpt_lahir='$tpt_lahir',tgl_lahir='$tgl_lahir',jk='$jk',anakke='$anakke',jml_saudara='$jml_saudara',hobi='$hobi',cita='$cita',alamat='$alamat',no_rumah='$no_rumah',
              rt='$rt',rw='$rw',kel='$kel',kec='$kec',kab='$kab',prov='$prov',pos='$pos',wns='$wns',asal_sekolah='$asal_sekolah',no_nisn='$no_nisn',no_npsn='$no_npsn',no_kk='$no_kk' WHERE id_siswa='$kdsis' ") or die(mysqli_error($con)) ;
       echo "<div class='row'>
  <div class='col-md-6 col-md-offset-3'>
  <div class='alert alert-info alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <center><h2><i class='icon fa fa-check'></i> Sukses!</h2>
                <h3>Data Diri Berhasil Terupdate !!</h3> <br>
                <a href='?page=v_siswa' class='btn bg-maroon margin btn-lg'><i class='fa fa-check'> OK</i></a></center>
              </div>
              </div>
              </div> ";
}elseif (isset($_POST['update_ortu'])) {
       $kd_ortu = $_POST['kd_ortu'];
       $nama_ayah = trim(mysqli_real_escape_string($con, $_POST['nama_ayah']));
       $nik_ayah = trim(mysqli_real_escape_string($con, $_POST['nik_ayah']));
       $tmp_ayah = trim(mysqli_real_escape_string($con, $_POST['tmp_ayah']));
       $tgl_ayah = trim(mysqli_real_escape_string($con, $_POST['tgl_ayah']));
       $agama_ayah = trim(mysqli_real_escape_string($con, $_POST['agama_ayah']));
       $pddk_ayah = trim(mysqli_real_escape_string($con, $_POST['pddk_ayah']));
       $kerja_ayah = trim(mysqli_real_escape_string($con, $_POST['kerja_ayah']));
       $penghasilan_ayah = trim(mysqli_real_escape_string($con, $_POST['penghasilan_ayah']));
       $alamat_ayah = trim(mysqli_real_escape_string($con, $_POST['alamat_ayah']));
       $pos_ayah = trim(mysqli_real_escape_string($con, $_POST['pos_ayah']));
       $hp_ayah = trim(mysqli_real_escape_string($con, $_POST['hp_ayah']));
       // Data Ibu
       $nama_ibu = trim(mysqli_real_escape_string($con, $_POST['nama_ibu']));
       $nik_ibu = trim(mysqli_real_escape_string($con, $_POST['nik_ibu']));
       $tmp_ibu = trim(mysqli_real_escape_string($con, $_POST['tmp_ibu']));
       $tgl_ibu = trim(mysqli_real_escape_string($con, $_POST['tgl_ibu']));
       $agama_ibu = trim(mysqli_real_escape_string($con, $_POST['agama_ibu']));
       $pddk_ibu = trim(mysqli_real_escape_string($con, $_POST['pddk_ibu']));
       $kerja_ibu = trim(mysqli_real_escape_string($con, $_POST['kerja_ibu']));
       $penghasilan_ibu = trim(mysqli_real_escape_string($con, $_POST['penghasilan_ibu']));
       $alamat_ibu = trim(mysqli_real_escape_string($con, $_POST['alamat_ibu']));
       $pos_ibu = trim(mysqli_real_escape_string($con, $_POST['pos_ibu']));
       $hp_ibu = trim(mysqli_real_escape_string($con, $_POST['hp_ibu']));

       mysqli_query($con, "UPDATE  tb_ortu SET nama_ayah='$nama_ayah',nik_ayah='$nik_ayah',tmp_ayah='$tmp_ayah',tgl_ayah='$tgl_ayah',agama_ayah='$agama_ayah',pddk_ayah='$pddk_ayah',kerja_ayah='$kerja_ayah',penghasilan_ayah='$penghasilan_ayah',alamat_ayah='$alamat_ayah',pos_ayah='$pos_ayah',hp_ayah='$hp_ayah',nama_ibu='$nama_ibu',nik_ibu='$nik_ibu',tmp_ibu='$tmp_ibu',tgl_ibu='$tgl_ibu',agama_ibu='$agama_ibu',pddk_ibu='$pddk_ibu',kerja_ibu='$kerja_ibu',penghasilan_ibu='$penghasilan_ibu',alamat_ibu='$alamat_ibu',pos_ibu='$pos_ibu',hp_ibu='$hp_ibu' WHERE id_siswa='$kd_ortu' ") or die(mysqli_error($con)) ;
       echo "<div class='row'>
  <div class='col-md-6 col-md-offset-3'>
  <div class='alert alert-info alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <center><h2><i class='icon fa fa-check'></i> Sukses!</h2>
                <h3>Data Orang Tua Berhasil Terupdate !!</h3> <br>
                <a href='?page=v_siswa' class='btn bg-maroon margin btn-lg'><i class='fa fa-check'> OK</i></a></center>
              </div>
              </div>
              </div> ";



}elseif (isset($_POST['update_wali'])) {
       $kd_wali = $_POST['kd_wali'];
       $nama_wali = trim(mysqli_real_escape_string($con, $_POST['nama_wali']));
       $nik_wali = trim(mysqli_real_escape_string($con, $_POST['nik_wali']));
       $tmp_wali = trim(mysqli_real_escape_string($con, $_POST['tmp_wali']));
       $tgl_wali = trim(mysqli_real_escape_string($con, $_POST['tgl_wali']));
       $agama_wali = trim(mysqli_real_escape_string($con, $_POST['agama_wali']));
       $pddk_wali = trim(mysqli_real_escape_string($con, $_POST['pddk_wali']));
       $kerja_wali = trim(mysqli_real_escape_string($con, $_POST['kerja_wali']));
       $penghasilan_wali = trim(mysqli_real_escape_string($con, $_POST['penghasilan_wali']));
       $wns_wali = trim(mysqli_real_escape_string($con, $_POST['wns_wali']));
       $alamat_wali = trim(mysqli_real_escape_string($con, $_POST['alamat_wali']));

       mysqli_query($con, "UPDATE  tb_wali SET nama_wali='$nama_wali',nik_wali='$nik_wali',tmp_wali='$tmp_wali',tgl_wali='$tgl_wali',agama_wali='$agama_wali',pddk_wali='$pddk_wali',kerja_wali='$kerja_wali',penghasilan_wali='$penghasilan_wali',wns_wali='$wns_wali',alamat_wali='$alamat_wali' WHERE id_siswa='$kd_wali' ") or die(mysqli_error($con)) ;
       echo "<div class='row'>
  <div class='col-md-6 col-md-offset-3'>
  <div class='alert alert-info alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <center><h2><i class='icon fa fa-check'></i> Sukses!</h2>
                <h3>Data Orang Wali Berhasil Terupdate !!</h3> <br>
                <a href='?page=v_siswa' class='btn bg-maroon margin btn-lg'><i class='fa fa-check'> OK</i></a></center>
              </div>
              </div>
              </div> ";
       
}elseif (isset($_POST['update_nilai'])) {
       $kd_nilai = $_POST['kd_nilai'];
       $nilai1 = trim(mysqli_real_escape_string($con, $_POST['nilai1']));
       $nilai2 = trim(mysqli_real_escape_string($con, $_POST['nilai2']));
       $nilai3 = trim(mysqli_real_escape_string($con, $_POST['nilai3']));
       $nilai4 = trim(mysqli_real_escape_string($con, $_POST['nilai4']));
       $nilai5 = trim(mysqli_real_escape_string($con, $_POST['nilai5']));

       $hasil=($nilai1+$nilai2+$nilai3+$nilai4+$nilai5)/5;

       mysqli_query($con, "UPDATE  tb_nilai SET nilai1='$nilai1',nilai2='$nilai2',nilai3='$nilai3',nilai4='$nilai4',nilai5='$nilai5', jumlah='$hasil' WHERE id_siswa='$kd_nilai' ") or die(mysqli_error($con)) ;
       echo "<div class='row'>
  <div class='col-md-6 col-md-offset-3'>
  <div class='alert alert-info alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <center><h2><i class='icon fa fa-check'></i> Sukses!</h2>
                <h3>Data Nilai Berhasil Terupdate !!</h3> <br>
                <a href='?page=v_siswa' class='btn bg-maroon margin btn-lg'><i class='fa fa-check'> OK</i></a></center>
              </div>
              </div>
              </div> ";
       
}elseif (isset($_POST['update_pddk'])) {
       $kd_pddk = $_POST['kd_pddk'];
       $pddk_sebelum = trim(mysqli_real_escape_string($con, $_POST['pddk_sebelum']));
       $lulus_dr = trim(mysqli_real_escape_string($con, $_POST['lulus_dr']));
       $tg_no_sttb = trim(mysqli_real_escape_string($con, $_POST['tg_no_sttb']));
       $lama = trim(mysqli_real_escape_string($con, $_POST['lama']));
       $no_un = trim(mysqli_real_escape_string($con, $_POST['no_un']));
       $no_seri = trim(mysqli_real_escape_string($con, $_POST['no_seri']));
       $no_skhu = trim(mysqli_real_escape_string($con, $_POST['no_skhu']));
       $r1 = trim(mysqli_real_escape_string($con, $_POST['r1']));
       $r2 = trim(mysqli_real_escape_string($con, $_POST['r2']));
       $r3 = trim(mysqli_real_escape_string($con, $_POST['r3']));
       $r4 = trim(mysqli_real_escape_string($con, $_POST['r4']));
       $r5 = trim(mysqli_real_escape_string($con, $_POST['r5']));

       mysqli_query($con, "UPDATE  tb_pddk SET pddk_sebelum='$pddk_sebelum',lulus_dr='$lulus_dr',tg_no_sttb='$tg_no_sttb',lama='$lama',no_un='$no_un',no_seri='$no_seri',no_skhu='$no_skhu',r1='$r1',r2='$r2',r3='$r3',r4='$r4',r5='$r5' WHERE id_siswa='$kd_pddk' ") or die(mysqli_error($con)) ;
       echo "<script>
  alert('Data Pendidikan Telah Berhasil DiUbah !!');
  window.location='?page=v_siswa';
</script>";
       
}elseif (isset($_POST['update_ijazah'])) {
       $kd_ijazah = $_POST['kd_ijazah'];
        $ket = $_POST['ket'];

          $gambar = @$_FILES['foto']['name'];
          if (!empty($gambar)) {
          move_uploaded_file($_FILES['foto']['tmp_name'],"../foto/ijazah/$gambar");
          $ganti = mysqli_query($con,"UPDATE tb_ijazah SET foto='$gambar' WHERE id_siswa='$kd_ijazah' ");
          }
          mysqli_query($con,"UPDATE tb_ijazah SET deskripsi='$ket' WHERE id_siswa='$kd_ijazah' ") or die (mysqli_error($con));

          echo "<div class='row'>
          <div class='col-md-6 col-md-offset-3'>
          <div class='alert alert-info alert-dismissible'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          <center><h2><i class='icon fa fa-check'></i> Sukses!</h2>
          <h3>File Ijazah Berhasil Terupdate !!</h3> <br>
          <a href='?page=v_siswa' class='btn bg-maroon margin btn-lg'><i class='fa fa-check'> OK</i></a></center>
          </div>
          </div>
          </div> ";

       
}


?>
