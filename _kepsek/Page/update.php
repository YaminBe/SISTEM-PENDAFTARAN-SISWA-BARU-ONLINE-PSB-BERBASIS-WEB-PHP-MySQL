 <div class="row">
        <div class="col-md-3">
            <?php
$id = @$_GET['id'];
$sql = mysqli_query($con,"select * from tb_siswa where id_siswa = '$id'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>

          <!-- Profile Image -->
          <div class="box box-info">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive" src="../foto/siswa/<?php echo $data['foto']; ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $data['nama_siswa']; ?></h3>

              <!-- <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Username</b> <a class="pull-right"><span class="label label-info"><?php echo $data['username']; ?></span> </a>
                </li>
                <li class="list-group-item">
                  <b>Password</b> <a class="pull-right"><span class="label label-info"><?php echo $data['password']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>To Day</b> <a class="pull-right"><?php echo date (" d F Y") ?></a>
                </li>
              </ul>

              <a href="#" class="btn bg-maroon btn-block"><b><?php echo $data['keterangan']; ?></b></a> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab"> <i class="fa fa-user"></i> Biodata Diri</a></li>
              <li><a href="#timeline" data-toggle="tab"> <i class="fa fa-users"></i> Data Orang Tua</a></li>
              <li><a href="#settings" data-toggle="tab"> <i class="fa fa-user-plus"></i> Data Wali Siswa</a></li>
              <li><a href="#settings1" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Data Nilai Siswa</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">

                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-12">
                    <?php
                    $id = @$_GET['id'];
                    $sql = mysqli_query($con,"select * from tb_siswa where id_siswa = '$id'") or die(mysqli_error($con));
                    $data = mysqli_fetch_array($sql);
                    ?>

                     <form action="?page=proses" method="post">
                <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                <label> Nama Lengkap</label>
                <input type="text" name="nama_siswa" class="form-control" value="<?=$data['nama_siswa']?>">
                <input type="hidden" name="kdsis" class="form-control" value="<?=$data['id_siswa']?>">
               </div>
               <div class="form-group">
                <label> Tempat Lahir</label>
                <input type="text" name="tpt_lahir" class="form-control" value="<?=$data['tpt_lahir']?>">
               </div>
              
                 <!-- Date -->
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="tgl_lahir" class="form-control pull-right" id="datepicker" value="<?=$data['tgl_lahir']?>">
                </div>
                <!-- /.input group -->
              </div>

                        <!-- radio -->
              <div class="form-group">
                <label>
                  <input type="radio" name="jk" class="flat-red" value="Laki-laki"<?php if ($data['jk'] == 'Laki-laki') {echo "checked";} ?> \> Laki-Laki
                </label> &nbsp;&nbsp;&nbsp;
                 <label>
                  <input type="radio" name="jk" class="flat-red" value="Perempuan"  <?php if ($data['jk'] == 'Perempuan') {echo "checked";} ?> \> Perempuan
                </label>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
          <label>Anak Ke </label>
          <input type="number" class="form-control" name="anakke" value="<?=$data['anakke']?>">
        </div>
        
        <div class="col-xs-6">
          <label>Dari [..] Saudara</label>
          <input type="number" class="form-control" name="jml_saudara" value="<?=$data['jml_saudara']?>">
        </div>                
        </div>

                <div class="form-group">
                <label> Hobi</label>
                <input type="text" name="hobi" class="form-control" value="<?=$data['hobi']?>">
               </div>
               <div class="form-group">
                <label> Cita -Cita</label>
                <input type="text" name="cita" class="form-control" value="<?=$data['cita']?>">
               </div>
                <div class="form-group">
                  <label> Asal Sekolah</label>
                  <input type="text" name="asal_sekolah" class="form-control" value="<?=$data['asal_sekolah']?>">
               </div>
                <div class="form-group">
                  <label> No. NISN</label>
                  <input type="text" name="no_nisn" class="form-control" value="<?=$data['no_nisn']?>">
               </div>

              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Alamat Rumah</label>
                <textarea class="form-control" name="alamat"><?=$data['alamat']?></textarea>                
              </div>
              <div class="form-group">
                <div class="col-xs-4">
                  <label>No. Rumah</label>
                  <input type="text" name="no_rumah" class="form-control" value="<?=$data['no_rumah']?>">
                </div>
                <div class="col-xs-4">
                  <label>RT</label>
                  <input type="text" name="rt" class="form-control" value="<?=$data['rt']?>">
                </div>
                <div class="col-xs-4">
                  <label>RW</label>
                  <input type="text" name="rw" class="form-control" value="<?=$data['rw']?>">
                </div>
                
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label>Kelurahan</label>
                  <input type="text" name="kel" class="form-control" value="<?=$data['kel']?>">
                </div>
                <div class="col-xs-6">
                  <label>Kecamatan</label>
                  <input type="text" name="kec" class="form-control" value="<?=$data['kec']?>">
                </div>                
              </div>
               <div class="form-group">
                <div class="col-xs-6">
                  <label>Kabupaten</label>
                  <input type="text" name="kab" class="form-control" value="<?=$data['kab']?>">
                </div>
                <div class="col-xs-6">
                  <label>Provinsi</label>
              <!--provinsi-->
              <select name="prov" class="form-control select2" style="width: 100%;">
              <option value="">Please Select</option>
              <?php
              include '../koneksi.php';
              $query = mysqli_query($con,"SELECT * FROM tb_provinsi ORDER BY provinsi");
              while ($row = mysqli_fetch_array($query)) {
              ?>
              <option value="<?php echo $row['provinsi']; ?>">
              <?php echo $row['provinsi']; ?>
              </option>
              <?php
              }
              ?>
              </select>

                </div>                
              </div>
              <div class="form-group">
                <label> Kode Pos</label>
                <input type="text" name="pos" class="form-control" value="<?=$data['pos']?>">
               </div>
              <div class="form-group">
                <label> Warga Negara/ Suku</label>
                <input type="text" name="wns" class="form-control" value="<?=$data['wns']?>">
               </div>
               <div class="form-group">
                  <label> No. NPSN</label>
                  <input type="text" name="no_npsn" class="form-control" value="<?=$data['no_npsn']?>">
               </div>
                       <div class="form-group">
                  <label> No. KK</label>
                  <input type="text" name="no_kk" class="form-control" value="<?=$data['no_kk']?>">
               </div>

              <div class="form-group">
                  <input type="submit" name="update_pribadi" class="btn btn-info btn-lg" value="Simpan Data">
               </div>


              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
            
           
          </form>



                    	
                  </div>
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
              	<!-- <h4><span class="label label-info">Data Ayah Kandung Siswa</span></h4> -->
<?php
$id = @$_GET['id'];
$sql = mysqli_query($con,"select * from tb_ortu where id_siswa = '$id'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>
              	 <form action="?page=proses" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title"><span class="label label-success">Data Ayah Kandung Siswa</span></h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama Ayah</label>
                    <input type="text" name="nama_ayah" class="form-control" value="<?=$data['nama_ayah']?>">    
                    <input type="hidden" name="kd_ortu" class="form-control" value="<?=$data['id_siswa']?>">                 
                  </div>
                    <div class="form-group">
                    <label>NIK Ayah</label>
                    <input type="text" name="nik_ayah" class="form-control" value="<?=$data['nik_ayah']?>">                    
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir Ayah</label>
                    <input type="text" name="tmp_ayah" class="form-control" value="<?=$data['tmp_ayah']?>">                    
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir Ayah</label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="tgl_ayah" class="form-control pull-right" value="<?=$data['tgl_ayah']?>">
                  </div>                   
                  </div>
                  <div class="form-group">
                    <label>Agama Ayah</label>
                    <select name="agama_ayah" class="form-control">
                      <option value="Islam"> Islam</option>
                    </select>                   
                  </div>
                  <div class="form-group">
                    <label>Pendidikan Terakhir Ayah</label>
                    <input type="text" name="pddk_ayah" class="form-control" value="<?=$data['pddk_ayah']?>">                    
                  </div>
                  <div class="form-group">
                    <label>Kerja Ayah</label>
                    <input type="text" name="kerja_ayah" class="form-control" value="<?=$data['kerja_ayah']?>">                    
                  </div>
                  <div class="form-group">
                    <label>Penghasilan Ayah</label>
                    <input type="text" name="penghasilan_ayah" class="form-control" value="<?=$data['penghasilan_ayah']?>">                    
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat_ayah" class="form-control"><?=$data['alamat_ayah']?></textarea>                   
                  </div>
                  <div class="form-group">
                    <label>Kode Pos</label>
                    <input type="text" name="pos_ayah" class="form-control" value="<?=$data['pos_ayah']?>">                    
                  </div>
                  <div class="form-group">
                    <label>No. HP Ayah</label>
                    <input type="text" name="hp_ayah" class="form-control" value="<?=$data['hp_ayah']?>">                    
                  </div>
            </div>
          </div>

            </div>

              <div class="col-md-6">
                 <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title"><span class="label label-success">Data Ibu Kandung Siswa</span></h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama Ibu</label>
                    <input type="text" name="nama_ibu" class="form-control" value="<?=$data['nama_ibu']?>">                    
                  </div>
                    <div class="form-group">
                    <label>NIK Ibu</label>
                    <input type="text" name="nik_ibu" class="form-control" value="<?=$data['nik_ibu']?>">                    
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir Ibu</label>
                    <input type="text" name="tmp_ibu" class="form-control" value="<?=$data['tmp_ibu']?>">                    
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir Ibu</label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="tgl_ibu" class="form-control pull-right" id="datepicker" value="<?=$data['tgl_ibu']?>">
                  </div>                   
                  </div>
                  <div class="form-group">
                    <label>Agama Ibu</label>
                    <select name="agama_ibu" class="form-control">
                      <option value="Islam"> Islam</option>
                    </select>                   
                  </div>
                  <div class="form-group">
                    <label>Pendidikan Terakhir Ibu</label>
                    <input type="text" name="pddk_ibu" class="form-control" value="<?=$data['pddk_ibu']?>">                    
                  </div>
                  <div class="form-group">
                    <label>Kerja Ibu</label>
                    <input type="text" name="kerja_ibu" class="form-control" value="<?=$data['kerja_ibu']?>">                    
                  </div>
                  <div class="form-group">
                    <label>Penghasilan Ibu</label>
                    <input type="text" name="penghasilan_ibu" class="form-control" value="<?=$data['penghasilan_ibu']?>">                    
                  </div>
                  <div class="form-group">
                    <label>Alamat Ibu</label>
                    <textarea name="alamat_ibu" class="form-control"><?=$data['alamat_ibu']?></textarea>                   
                  </div>
                  <div class="form-group">
                    <label>Kode Pos</label>
                    <input type="text" name="pos_ibu" class="form-control" value="<?=$data['pos_ibu']?>">                    
                  </div>
                  <div class="form-group">
                    <label>No. HP Ibu</label>
                    <input type="text" name="hp_ibu" class="form-control" value="<?=$data['hp_ibu']?>">                    
                  </div>
                   
                </div>
              </div>

              <input type="submit" name="update_ortu" class="btn btn-info btn-lg" value="Simpan Data">
             
              
              </div>
            </div>
          </form>



              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
         <?php
$id = @$_GET['id'];
$sql = mysqli_query($con,"select * from tb_wali where id_siswa = '$id'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>

<div class="box-body">
    <form action="?page=proses" method="post">
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group">
                    <label>Nama Wali</label>
                       <input type="text" name="nama_wali" class="form-control" value="<?=$data['nama_wali']?>">
                       <input type="hidden" name="kd_wali" class="form-control" value="<?=$data['id_siswa']?>">
                    </div>
                    <div class="form-group">
                    <label>NIK Wali</label>
                       <input type="text" name="nik_wali" class="form-control" value="<?=$data['nik_wali']?>">
                    </div>
                    <div class="form-group">
                    <label>Tempat Lahir Wali</label>
                       <input type="text" name="tmp_wali" class="form-control" value="<?=$data['tmp_wali']?>">
                    </div>
                    <div class="form-group">
                         <label>Tanggal Lahir Wali</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="date" name="tgl_wali" class="form-control pull-right" id="datepicker" value="<?=$data['tgl_wali']?>">
                        </div>
                    </div>
                    <div class="form-group">
                    <label>Agama</label>
                    <select name="agama_wali" class="form-control">
                        <option value="Islam">Islam</option>
                    </select>
                    </div>
                
                    <div class="form-group">
                        <input type="submit" name="update_wali" class="btn btn-info btn-lg" value="Simpan Data">
                    </div>


                </div>                  
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Pendidikan Wali</label>
                       <input type="text" name="pddk_wali" class="form-control" value="<?=$data['pddk_wali']?>">
                    </div>
                    <div class="form-group">
                    <label>Pekerjaan Wali</label>
                       <input type="text" name="kerja_wali" class="form-control" value="<?=$data['kerja_wali']?>">
                    </div>
                    <div class="form-group">
                    <label>Penghasilan Wali Perbulan</label>
                       <input type="text" name="penghasilan_wali" class="form-control" value="<?=$data['penghasilan_wali']?>">
                    </div>
                    <div class="form-group">
                    <label>Warga Negara / Suku</label>
                       <input type="text" name="wns_wali" class="form-control" value="<?=$data['wns_wali']?>">
                    </div>
                    <div class="form-group">
                    <label>Alamat</label>
                       <textarea type="text" name="alamat_wali" class="form-control"><?=$data['alamat_wali']?></textarea>
                    </div>
                
            </div>


          </form>
</div>
               

              </div>
              <div class="tab-pane" id="settings1">
<?php
$id = @$_GET['id'];
$sql = mysqli_query($con,"select * from tb_nilai where id_siswa = '$id'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>
          <form action="?page=proses" method="post">
            <table class="table table-striped table-hover">
                <input type="hidden" name="kd_nilai" value="<?=$data['id_siswa']?>" class="form-control">
                    <tr>
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th>Nilai</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Matematika</td>
                        <td><input type="number" name="nilai1" class="form-control" value="<?=$data['nilai1']?>"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bahasa Indonesia</td>
                        <td><input type="number" name="nilai2" class="form-control" value="<?=$data['nilai2']?>"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Bahasa Inggris</td>
                        <td><input type="number" name="nilai3" class="form-control" value="<?=$data['nilai3']?>"></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Ilmu Pengetahuan Alam (IPA)</td>
                        <td><input type="number" name="nilai4" class="form-control" value="<?=$data['nilai4']?>"></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Ilmu Pengetahuan Sosial (IPS)</td>
                        <td><input type="number" name="nilai5" class="form-control" value="<?=$data['nilai5']?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="update_nilai" class="btn btn-info btn-lg" value="Simpan Data">
                        </td>
                    </tr>
            </table>

          </form>

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