
<?php
$lk =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_siswa WHERE jk='Laki-laki' "));
$pr =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_siswa WHERE jk='Perempuan' "));
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Language', 'Speakers (in millions)'],
          ['Laki-laki', <?php echo "".$lk." ";?>],
          ['Perempuan', <?php echo "".$pr." ";?>]
        ]);

      var options = {
        legend: 'none',
        pieSliceText: 'label',
        title: 'Grafik Berdasarkan Jenis Kelamin',
        pieStartAngle: 100,
      };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
      <div class="box">
          <div class="box-header">
            <span class="fa fa-line-chart" style="font-size: 23px;"></span>
            <b>Grafik Berdasarkan Gender</b>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
          </div>

              <div class="box-body">
            <div class="canvas-wrapper">
   <div id="piechart" style="width: 900px; height: 500px;"></div>
          </div>
          </div>
       
    </div>
  </div>
</div>
  </body>
</html>