<!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Data Orang Tua</b></h3>

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

$sql_formulir = mysqli_query($con,"select * from tb_ortu where id_siswa = '$sesi'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql_formulir);
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
    </div>

