 <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-danger">
            <div class="box-body box-profile">
              <a  target="_blank" href="Laporan/print_siswa.php?kdsis=<?php echo $data['id_siswa']?>" class="btn bg-maroon btn-block"> <i class="fa fa-print"></i> Live Print </a>
             <!--  <a href="" class="btn bg-olive btn-block"> <i class="fa fa-print"></i> Export Excell </a> -->
              <a target="_blank" href="../Laporan/siswa_pdf.php?kdsis=<?php echo $data['id_siswa']?>" class="btn bg-orange btn-block"> <i class="fa fa-download"></i> Download PDF </a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active" style="background-color:#00BFFF;"><a href="#activity" data-toggle="tab"> <i class="fa fa-user"></i> Biodata Diri</a></li>
              <li style="background-color:#00BFFF;"><a href="#timeline" data-toggle="tab"> <i class="fa fa-users"></i> Data Orang Tua</a></li>
              <li style="background-color:#00BFFF;"><a href="#settings" data-toggle="tab"> <i class="fa fa-user-plus"></i> Data Wali Siswa</a></li>
              <li style="background-color:#00BFFF;"><a href="#settings1" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Data Nilai Siswa</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">

                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                    	<table class="table">
                    			<tr>
                    				<th>Nama</th>
                    				<th>:</th>
                    				<th><?=$data['nama_siswa']?></th>
                    			</tr>
                    			<tr>
                    				<th>Tempat Tangga lahir</th>
                    				<th>:</th>
                    				<th><?=$data['tpt_lahir']?> , <?=$data['tgl_lahir']?></th>
                    			</tr>
                    			<tr>
                    				<th>Jenis Kelamin</th>
                    				<th>:</th>
                    				<th><?=$data['jk']?></th>
                    			</tr>
                    			<tr>
                    				<th>Anak Ke</th>
                    				<th>:</th>
                    				<th> <span class="label label-info"><?=$data['anakke']?></span> Dari <span class="label label-info"><?=$data['jml_saudara']?></span> Saudara</th>
                    			</tr>
                    			<tr>
                    				<th>Hobi</th>
                    				<th>:</th>
                    				<th><?=$data['hobi']?></th>
                    			</tr>
                    			<tr>
                    				<th>Cita-cita</th>
                    				<th>:</th>
                    				<th><?=$data['cita']?></th>
                    			</tr>
                    			<tr>
                    				<th>Alamat</th>
                    				<th>:</th>
                    				<th><?=$data['alamat']?></th>
                    			</tr>
                    			<tr>
                    				<th>No. Rumah</th>
                    				<th>:</th>
                    				<th><?=$data['no_rumah']?></th>
                    			</tr>
                    			<tr>
                    				<th>RT</th>
                    				<th>:</th>
                    				<th><?=$data['rt']?></th>
                    			</tr>
                    			<tr>
                    				<th>RW</th>
                    				<th>:</th>
                    				<th><?=$data['rw']?></th>
                    			</tr>
                    			<tr>
                    				<th>Kelurahan</th>
                    				<th>:</th>
                    				<th><?=$data['kel']?></th>
                    			</tr>
                    			<tr>
                    				<th>Kecamatan</th>
                    				<th>:</th>
                    				<th><?=$data['kec']?></th>
                    			</tr>
                    			<tr>
                    				<th>Kabupaten</th>
                    				<th>:</th>
                    				<th><?=$data['kab']?></th>
                    			</tr>
                    			<tr>
                    				<th>Provinsi</th>
                    				<th>:</th>
                    				<th><?=$data['prov']?></th>
                    			</tr>
                    			<tr>
                    				<th>Kode Pos</th>
                    				<th>:</th>
                    				<th><?=$data['pos']?></th>
                    			</tr>
                    			<tr>
                    				<th>Warga Negara / Suku</th>
                    				<th>:</th>
                    				<th><?=$data['wns']?></th>
                    			</tr>
                    			<tr>
                    				<th>Asal Sekolah</th>
                    				<th>:</th>
                    				<th><?=$data['asal_sekolah']?></th>
                    			</tr>
                    			<tr>
                    				<th>No.Nisn</th>
                    				<th>:</th>
                    				<th><?=$data['no_nisn']?></th>
                    			</tr>
                    			<tr>
                    				<th>No.NPSN</th>
                    				<th>:</th>
                    				<th><?=$data['no_npsn']?></th>
                    			</tr>

                    	</table>
                  </div>
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
              	<h4><span class="label label-info">Data Ayah Kandung Siswa</span></h4>
<?php
if (@$_SESSION['siswa']) {
$sesi = @$_SESSION['siswa'];
}

$sql_formulir = mysqli_query($con,"select * from tb_ortu where id_siswa = '$sesi'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql_formulir);
?>
              	<table class="table">
                    			<tr>
                    				<th>Nama Ayah</th>
                    				<th>:</th>
                    				<th><?=$data['nama_ayah']?></th>
                    			</tr>
                    				<tr>
                    				<th>NIK</th>
                    				<th>:</th>
                    				<th><?=$data['nik_ayah']?></th>
                    			</tr>
                    			<tr>
                    				<th>Tempat Tanggal Lahir Ayah</th>
                    				<th>:</th>
                    				<th><?=$data['tmp_ayah']?> , <?=$data['tgl_ayah']?></th>
                    			</tr>
                    			<tr>
                    				<th>Agama</th>
                    				<th>:</th>
                    				<th><?=$data['agama_ayah']?></th>
                    			</tr>
                    			<tr>
                    				<th>Pendidikan Terakhir</th>
                    				<th>:</th>
                    				<th><?=$data['pddk_ayah']?></th>
                    			</tr>
                    			<tr>
                    				<th>Pekerjaan Ayah</th>
                    				<th>:</th>
                    				<th><?=$data['kerja_ayah']?></th>
                    			</tr>
                    			<tr>
                    				<th>Penhasilan Ayah</th>
                    				<th>:</th>
                    				<th><?=$data['penghasilan_ayah']?> <span class="label label-info">Perbulan</span> </th>
                    			</tr>
                    			<tr>
                    				<th>Alamat Ayah</th>
                    				<th>:</th>
                    				<th><?=$data['alamat_ayah']?></th>
                    			</tr>
                    			<tr>
                    				<th>Kode Pos</th>
                    				<th>:</th>
                    				<th><?=$data['pos_ayah']?></th>
                    			</tr>
                    			<tr>
                    				<th>HP Ayah</th>
                    				<th>:</th>
                    				<th><?=$data['hp_ayah']?></th>
                    			</tr>
                                <tr>
                                    <th><h4><span class="label label-info">Data Ibu Kandung Siswa</span></h4></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                    			<tr>
                    				<th>Nama Ibu</th>
                    				<th>:</th>
                    				<th><?=$data['nama_ibu']?></th>
                    			</tr>
                    				<tr>
                    				<th>NIK</th>
                    				<th>:</th>
                    				<th><?=$data['nik_ibu']?></th>
                    			</tr>
                    			<tr>
                    				<th>Tempat Tanggal Lahir Ibu</th>
                    				<th>:</th>
                    				<th><?=$data['tmp_ibu']?> , <?=$data['tgl_ibu']?></th>
                    			</tr>
                    			<tr>
                    				<th>Agama</th>
                    				<th>:</th>
                    				<th><?=$data['agama_ibu']?></th>
                    			</tr>
                    			<tr>
                    				<th>Pendidikan Terakhir</th>
                    				<th>:</th>
                    				<th><?=$data['pddk_ibu']?></th>
                    			</tr>
                    			<tr>
                    				<th>Pekerjaan Ibu</th>
                    				<th>:</th>
                    				<th><?=$data['kerja_ibu']?></th>
                    			</tr>
                    			<tr>
                    				<th>Penhasilan Ibu</th>
                    				<th>:</th>
                    				<th><?=$data['penghasilan_ibu']?> <span class="label label-info">Perbulan</span> </th>
                    			</tr>
                    			<tr>
                    				<th>Alamat Ibu</th>
                    				<th>:</th>
                    				<th><?=$data['alamat_ibu']?></th>
                    			</tr>
                    			<tr>
                    				<th>Kode Pos</th>
                    				<th>:</th>
                    				<th><?=$data['pos_ibu']?></th>
                    			</tr>
                    			<tr>
                    				<th>HP Ibu</th>
                    				<th>:</th>
                    				<th><?=$data['hp_ibu']?></th>
                    			</tr>
                    	</table>


              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
            <?php
            if (@$_SESSION['siswa']) {
            $sesi = @$_SESSION['siswa'];
            }

            $sql_formulir = mysqli_query($con,"select * from tb_wali where id_siswa = '$sesi'") or die(mysqli_error($con));
            $data = mysqli_fetch_array($sql_formulir);
            ?>
                <table class="table">
                                <tr>
                                    <th>Nama Wali</th>
                                    <th>:</th>
                                    <th><?=$data['nama_wali']?></th>
                                </tr>
                                    <tr>
                                    <th>NIK</th>
                                    <th>:</th>
                                    <th><?=$data['nik_wali']?></th>
                                </tr>
                                <tr>
                                    <th>Tempat Tanggal Lahir Ayah</th>
                                    <th>:</th>
                                    <th><?=$data['tmp_wali']?> , <?=$data['tgl_wali']?></th>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                    <th>:</th>
                                    <th><?=$data['agama_wali']?></th>
                                </tr>
                                <tr>
                                    <th>Pendidikan Terakhir</th>
                                    <th>:</th>
                                    <th><?=$data['pddk_wali']?></th>
                                </tr>
                                <tr>
                                    <th>Pekerjaan Ayah</th>
                                    <th>:</th>
                                    <th><?=$data['kerja_wali']?></th>
                                </tr>
                                <tr>
                                    <th>Penhasilan Ayah</th>
                                    <th>:</th>
                                    <th><?=$data['penghasilan_wali']?> <span class="label label-info">Perbulan</span> </th>
                                </tr>
                                <tr>
                                    <th>Warga Negara / Suku</th>
                                    <th>:</th>
                                    <th><?=$data['wns_wali']?></th>
                                </tr>
                                <tr>
                                    <th>Alamat Wali</th>
                                    <th>:</th>
                                    <th><?=$data['alamat_wali']?></th>
                                </tr>
                        </table>

              </div>
              <div class="tab-pane" id="settings1">
                            <?php
            include '../koneksi.php';
            if (@$_SESSION['siswa']) {
            $sesi = @$_SESSION['siswa'];
            }

            $sql_formulir = mysqli_query($con,"select * from tb_nilai where id_siswa = '$sesi'") or die(mysqli_error($con));
            $data = mysqli_fetch_array($sql_formulir);
            ?>
          <form action="?page=proses" method="post">
            <p><b>Data Nilai</b> </p>
            <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th>Nilai</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Matematika</td>
                        <td><?=$data['nilai1']?></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bahasa Indonesia</td>
                        <td><?=$data['nilai2']?></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Bahasa Inggris</td>
                        <td><?=$data['nilai3']?></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Ilmu Pengetahuan Alam (IPA)</td>
                        <td><?=$data['nilai4']?></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Ilmu Pengetahuan Sosial (IPS)</td>
                        <td><?=$data['nilai5']?></td>
                    </tr>
                      <tr style="background-color:silver;">
                        <td><b>Jumlah</b></td>
                        <td></td>
                        <td><span class="label label-info"><?=$data['jumlah']?></span> </td>
                    </tr>
            </table>

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->