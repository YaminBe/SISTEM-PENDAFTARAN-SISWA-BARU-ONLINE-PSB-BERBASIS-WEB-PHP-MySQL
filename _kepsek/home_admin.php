 
      
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border" style="border-bottom: 5px double; ">
          <h3 class="box-title"><img src="../slide/logo.png" height="60px" style="border-top-left-radius: 7px;border-top-right-radius: 7px;border-bottom-left-radius: 7px;border-bottom-right-radius: 7px;"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>

        <div class="box-body">
             <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"> <b>JUMLAH CALON SISWA</b></span>
              <span class="info-box-number" style="color: red;"><?php echo "".$jml." ";?> Orang</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>PESERTA TIDAK LULUS</b></span>
              <span class="info-box-number" style="color: red;"><?php echo "".$t." ";?> Orang</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>JUMLAH PESERTA LULUS</b></span>
              <span class="info-box-number" style="color: red;"><?php echo "".$l." ";?> Orang</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>BELUM DI PROSES</b></span>
              <span class="info-box-number" style="color: green;">[<?php echo "".$b."";?>] Orang</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="well" style="background-image: url(../slide/bg_home.jpg);width: 100%;">
       <div class="row">
        <div class="col-md-7">
            <div class="row">
              <?php 
              $sql = mysqli_query($con,"SELECT * FROM tb_siswa ORDER BY id_siswa DESC LIMIT 3");
              while ($data= mysqli_fetch_array($sql)) { ?>

                     <div class="col-md-9">
                <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><?php echo $data['nama_siswa'] ?></strong> Baru Saja Mendaftar !!
                </div>                              
              </div>  
              <?php } ?>

         

            </div>
                   
          </div>  
           <div class="col-md-5">
            
             <table class="table">
     <thead>
         <tr>
             <th width="200">Kota / Provinsi</th>
              <th>Presentase Pendaftar</th>
         </tr>
     </thead>
     <tbody>

    <?php 
    $sql = mysqli_query($con,"SELECT * FROM tb_siswa GROUP BY prov");
    while ($data = mysqli_fetch_array($sql)) { ?>
         <tr>
             <td><?php echo $data['prov']?></td>
              <td>
            <?php
            $jml =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_siswa WHERE prov='$data[prov]' "));
            ?>
            <?php

//             echo "<div class='progress'>
//   <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='' aria-valuemin='0' aria-valuemax='100' style='width: $jml%''>
//     <span class='sr-only'>$jml% Complete (success)</span>
//   </div>
// </div>";

            if ($jml=='0') {
                echo "<div class='progress'>
  <div class='progress-bar progress-bar-danger' role='progressbar' aria-valuenow='$jml' aria-valuemin='0' aria-valuemax='100' style='min-width: 2em;width: $jml%;'>
    $jml%
  </div>
   &nbsp;&nbsp; / <b>$jml </b>Orang
</div> ";
            }else{
            echo "<div class='progress'>
            <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow='$jml' aria-valuemin='0' aria-valuemax='100' style='min-width: 2em;width: $jml%;'>
            $jml%
            </div>
            &nbsp;&nbsp; / $jml Orang
            </div> ";
            }



            // echo "<b><span style='color:red;font-size:23px;'>$jml</span> </b> Orang";

            ?>
              </td>
         </tr>
         <?php } ?>
     </tbody>
 </table>
                   
          </div>       
       </div>
      </div>
    </div>
  </div>
  