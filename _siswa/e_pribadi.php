<!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Data Pribadi</b></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
<?php
include '../koneksi.php';
if (@$_SESSION['siswa']) {
$sesi = @$_SESSION['siswa'];
}

$sql_formulir = mysqli_query($con,"select * from tb_siswa where id_siswa = '$sesi'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql_formulir);
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
                <label> Anak Yatim / Yatim Piatu</label>
                <input type="text" name="anak_yatim" class="form-control" value="<?=$data['anak_yatim']?>">
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
        <!-- /.box-body -->
     
      </div>
      <!-- /.box -->