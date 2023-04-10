<div class="box">
            <div class="box-header">
              <h3 class="box-title"> <i class="fa fa-print"></i> LAPORAN DATA PENDAFTAR</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            	 <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                    <div class="pull-right">
                    
                               <form action="" method="post" accept-charset="utf-8" class="form-inline">
                  <div class="form-group">
                  <input type="text" name="pencarian" class="form-control" placeholder="Cari data ...">                                        
                  </div>
                  <div class="form-group">
                  <button type="submit" class="btn btn-danger"><span class="fa fa-search"></span> </button>                                       
                  </div>
                 </form>                    
                    </div> 
                  </div>
                  <div style="margin-bottom: 19px;">
                  	<!-- <a href="" class="btn btn-info"><i class="fa fa-print"></i> Print</a>  --> 
                     <a href="Page/Laporan/all_excel.php" class="btn btn-success"><i class="fa fa-print"></i> Export Ke Excell</a>  
                      <!-- <a href="" class="btn btn-danger"><i class="fa fa-save"></i> Download PDF</a> -->
                 
                   </div>           
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama Siswa</th>
                          <th>Tempat Tgl Lahir</th>
                          <th>Gender</th>
                          <th>Asal Sekolah</th>
                          <th>Foto</th>
                          <th>Keterangan</th>
                          <th class="text-center"><i class="fa fa-print"></i> </th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          $batas = 10;
                          $hal = @$_GET['hal'];
                          if (empty($hal)) {
                            $posisi=0;
                            $hal=1;
                          }else{
                            $posisi=($hal-1) * $batas;
                          }
                          $no=1;
                          if ($_SERVER['REQUEST_METHOD']=="POST") {
                            $pencarian= trim(mysqli_real_escape_string($con,$_POST['pencarian']));
                            if ($pencarian !='') {
                              $sql= "SELECT * FROM tb_siswa WHERE nama_siswa LIKE '%$pencarian%' ";
                              $query = $sql;
                              $queryJml= $sql;
                            }else{
                              $query ="SELECT * FROM tb_siswa LIMIT $posisi, $batas";
                              $queryJml ="SELECT * FROM tb_siswa";
                              $no= $posisi + 1;

                            }
                          }else{
                              $query ="SELECT * FROM tb_siswa LIMIT $posisi, $batas";
                              $queryJml ="SELECT * FROM tb_siswa";
                              $no= $posisi + 1;

                          }

                          
                          $sql_obat = mysqli_query($con,$query) or die(mysqli_error($con)) ;
                          if (mysqli_num_rows($sql_obat)> 0) {
                              while($data = mysqli_fetch_array($sql_obat)){ ?>
                                 <tr>
                          <th scope="row"><?=$no++?>.</th>
                          <td><?=$data['nama_siswa'];?></td>
                          <td><?=$data['tpt_lahir'];?>, <?=$data['tgl_lahir'];?></td>
                          <td><?=$data['jk'];?></td>
                          <td><?=$data['asal_sekolah'];?></td>
                          <td> <img src="../foto/siswa/<?php echo $data['foto']; ?>" class="img-circle" alt="User Image" width="40" height="40"></td>
                          <td><?=$data['keterangan'];?></td>
                          <td class="text-center">
                         <a target="_blank" href="Page/Laporan/print_siswa.php?kdsis=<?php echo $data['id_siswa']?>" class="btn btn-info"><i class="fa fa-print"></i> Print</a>
                         <a target="_blank" href="Page/Laporan/excel_siswa.php?kdsis=<?php echo $data['id_siswa']?>" class="btn btn-success"><i class="fa fa-print"></i> Excell</a>
                         <a target="_blank" href="../Laporan/siswa_pdf.php?kdsis=<?php echo $data['id_siswa']?>" class="btn btn-danger"><i class="fa fa-print"></i> PDF</a>                      
                          </td>
                        </tr>
                              <?php

                              }
                          } else {
                              echo"DAta tidak ditemukan!!";
                          }
                          ?>
                     
                      </tbody>
                    </table>
                  </div>


                  <?php
                  if (@$_POST['pencarian'] == '') {?>
                    <div style="float:left; margin-top: 17px;">


                  <?php 
                      $jml = mysqli_num_rows(mysqli_query($con,$queryJml));
                      echo " Jumlah Data : <span style='font-size: 20px; color: white;' class='badge dashbg-3'>$jml</span> ";
                      ?>  
                                        
                    </div>
                    <div style="float:right; margin-top: 17px;">
                      <ul class="pagination">
                        <?php 
                        $jml_hal = ceil($jml / $batas);
                        for ($i=1; $i <= $jml_hal; $i++) { 
                          if($i != $hal){
                                                 
                           echo "<li class=\"page-item \"><a class=\"page-link\" href=\"?hal=$i\">$i</a></li>";
                                
                        }else{
                          echo "<li class=\"page-item active\"><a class=\"page-link\">$i</a></li>";
                         
                        }
                      }
                        ?>
                      </ul>                      
                    </div>
                    <?php 
                  }else{
                    echo "<div style=\"float:left;margin-top:15px; \">";
                    $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                    echo "Data Hasil Pencarian : <span style='font-size: 20px; color: white;' class='badge dashbg-3'>$jml</span>";
                    echo "</div>";
                  }
                  ?>
                  <br> <br> <br>

                  </div>
                  <div>
  
             </div>
                  </div>
                              

             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
