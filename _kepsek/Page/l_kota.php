 <div class="box">
<div class="box-header">
<h3 class="box-title"> <i class="fa fa-print"></i> LAPORAN PERKOTA / PROVINSI</h3>
</div>
<!-- /.box-header -->
<div class="box-body">

	 <div class="col-lg-12">
<div class="block margin-bottom-sm">





    <form class="form-inline" method="GET" target="_blank" action="../Laporan/lap-perkota.php">
  <div class="form-group">
    <label>Cetak Berdasrkan Kota / Provinsi  </label> <br>
    <select class="form-control" name="prov" style="width: 400px;">
        <option value="">Pilih Kota/ Provinsi</option>
        <?php 
        $kota = mysqli_query($con,"SELECT * FROM tb_siswa GROUP BY prov");
        while ($data = mysqli_fetch_array($kota)) { ?>
        <option value="<?php echo $data['prov']; ?>"><?php echo $data['prov']; ?></option>
    <?php } ?>
    </select>
      <input type="submit" class="btn btn-danger" value="Cetak Data">

  </div>


</form>


</div>
<hr>
<div style="margin-bottom: 19px;">
 <table width="100%" cellpadding="4">
     <thead>
         <tr>
             <th width="200"></th>
              <th></th>
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
            &nbsp;&nbsp; / <b>$jml </b>Orang
            </div> ";
            }



            // echo "<b><span style='color:red;font-size:23px;'>$jml</span> </b> Orang";

            ?>
              </td>
         </tr>
         <?php } ?>
     </tbody>
 </table>






<!-- 

<script src="../plugins/highcharts.js"></script>
<script src="../plugins/exporting.js"></script>
<script src="../plugins/export-data.js"></script>

<?php
$aceh =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_siswa WHERE prov='Aceh' "));
$bali =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_siswa WHERE prov='Bali' "));
 ?>
<div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>



        <script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'World\'s largest cities per 2017'
    },
    subtitle: {
        text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '16px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Population (millions)'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Jumlah Pendaftar: <b>{point.y:.1f} Orang</b>'
    },
    series: [{
        name: 'Population',
        data: [
            ['Aceh', <?php echo $aceh; ?>],
            ['Bali', <?php echo $bali; ?>],
            ['Bengkulu', 14.9],
            ['Gorontalo', 13.7],
            ['Jakarta', 13.1],
            ['Jambi', 12.7],
            ['Jawa Barat', 12.4],
            ['Jawa Tengah', 12.2],
            ['Jawa Timur', 12.0],
            ['Sumatera Barat', 11.7],
            ['Jambi', 11.5],
            ['Lampung', 11.2],
            ['Maluku', 11.1],
            ['Jakarta', 10.6],
            ['Dongguan', 10.6],
            ['Lagos', 10.6],
            ['Bengaluru', 10.3],
            ['Seoul', 9.8],
            ['Foshan', 9.3],
            ['Tokyo', 9.3]
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: 'black',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '15px',
                fontFamily: 'arial'
            }
        }
    }]
});
        </script> -->





</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
</div>

