
<?php
$jml =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_siswa"));
$lulus =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_siswa WHERE keterangan='LULUS' "));
$tdlulus =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_siswa WHERE keterangan='TIDAK LULUS' "));
$cadangan =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_siswa WHERE keterangan='CADANGAN' "));
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['JUMLAH CALON SISWA', <?php echo "".$jml." ";?>],
          ['DITERIMA', <?php echo "".$lulus." ";?>],
          ['TIDAK DITERIMA',<?php echo "".$tdlulus." ";?> ],
          ['CADANGAN',<?php echo "".$cadangan." ";?>]
        ]);

        var options = {
          title: 'Grafik Jumlah, Berdasarkan Kelulusan',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>

<div class="box">
<div class="box-header">
<h3 class="box-title"> <i class="fa fa-pie-chart"></i> GRAFIK KELULUSAN CALON SISWA</h3>
</div>
<!-- /.box-header -->
<div class="box-body">

<div class="col-lg-12">
<div class="canvas-wrapper">
<div class="box-body" id="piechart_3d" style="height: 500px;"></div>
</div>
</div>
</div>
</div>
  </body>
</html>
