<?php
session_start();
if(!isset($_SESSION['login_user'])){
  echo "<script LANGUAGE='JavaScript'>
    window.alert('Anda Belum Login');
    window.location.href='login.php';
    </script>";
}

include 'koneksi.php';
   $jmla=mysqli_query($conn, "SELECT SUM(pagu) AS juma FROM pagu");
  $jumlaha = mysqli_fetch_assoc($jmla);
  $totPagu=$jumlaha['juma'];


   $jmlb=mysqli_query($conn, "SELECT SUM(realisasi) AS jumb FROM pagu");
  $jumlahb = mysqli_fetch_assoc($jmlb);
  $totReal=$jumlahb['jumb'];

$sisaPagu=$totPagu-$totReal

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">




</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="rekap.php" class="nav-link">Rekap</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="pagu.php" class="nav-link">Pagu</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="input-kegiatan.php" class="nav-link">Input</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="riwayat.php" class="nav-link">Riwayat</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="kopy.png" alt="SI MAPAN Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MONAVID</span>
    </a>

    <!-- Sidebar -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="rekap.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Rekap
                   </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pagu.php" class="nav-link">
              <i class="nav-icon fas fa-car"></i>
              <p>
                Pagu
                   </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="input-kegiatan.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Input Kegiatan
                   </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="riwayat.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Riwayat
                   </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-stop"></i>
              <p>
                Logout
                   </p>
            </a>
          </li>
       </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0 text-dark">Rekap</h3>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
  <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Pie Chart</h3>

              </div>
              <div class="card-body">
               <!--  <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas> -->




                <div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


 var sisaPagu = <?php Print($sisaPagu); ?>;
    var totalReal = <?php Print($totReal); ?>;

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Belum Realisasi', sisaPagu],
  ['Sudah Realisasi', totalReal]
]);


// function drawChart() {
//   var data = google.visualization.arrayToDataTable([
//   ['Task', 'Hours per Day'],
//   ['Pagu', 5],
//   ['Realisasi', 5]
// ]);


  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Perbandingan total Pagu Dengan Realisasi', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>






              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Realisasi Per Bidang
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">




                <div class="row">

                  <div class="col col-md-4 text-center">

                


<?php
  $res=mysqli_query($conn, "SELECT SUM(pagu) AS pg FROM pagu WHERE bidang = 'PIPP Perekonomian'");
  $rowi = mysqli_fetch_assoc($res);
  $totp=$rowi['pg'];


   $res1=mysqli_query($conn, "SELECT SUM(realisasi) AS pr FROM pagu WHERE bidang = 'PIPP Perekonomian'");
  $rowi1 = mysqli_fetch_assoc($res1);
  $totr=$rowi1['pr'];

$sisaPer=$totp-$totr

//   var_dump($totp);
//   var_dump($totr);
// die();
  ?>

                <div id="piechartpippperekonomian"></div>


<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


 var sisaPer = <?php Print($sisaPer); ?>;
    var totr = <?php Print($totr); ?>;

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Perbandingan'],
  ['Belum Realisasi', sisaPer],
  ['Sudah Realisasi', totr]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'PIPP Perekonomian', 'width':450, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechartpippperekonomian'));
  chart.draw(data, options);
}
</script>

                  </div>






 <div class="col col-md-4 text-center">

                


<?php
  $res=mysqli_query($conn, "SELECT SUM(pagu) AS pg FROM pagu WHERE bidang = 'PIPP Polhukam PMK'");
  $rowi = mysqli_fetch_assoc($res);
  $totp=$rowi['pg'];


   $res1=mysqli_query($conn, "SELECT SUM(realisasi) AS pr FROM pagu WHERE bidang = 'PIPP Polhukam PMK'");
  $rowi1 = mysqli_fetch_assoc($res1);
  $totr=$rowi1['pr'];

$sisaPol=$totp-$totr
//   var_dump($totp);
//   var_dump($totr);
// die();
  ?>

                <div id="piechartpipppolhukampmk"></div>


<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


 var sisaPol = <?php Print($sisaPol); ?>;
    var totr = <?php Print($totr); ?>;

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Perbandingan'],
  ['Belum Realisasi', sisaPol],
  ['Sudah Realisasi', totr]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'PIPP Polhukam PMK', 'width':450, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechartpipppolhukampmk'));
  chart.draw(data, options);
}
</script>

                  </div>











                  <!-- ./col -->
                  <div class="col col-md-4 text-center">


<?php
  $res=mysqli_query($conn, "SELECT SUM(pagu) AS pg FROM pagu WHERE bidang = 'P3A'");
  $rowi = mysqli_fetch_assoc($res);
  $totp3a=$rowi['pg'];


   $res1=mysqli_query($conn, "SELECT SUM(realisasi) AS pr FROM pagu WHERE bidang = 'P3A'");
  $rowi1 = mysqli_fetch_assoc($res1);
  $totrp3a=$rowi1['pr'];
$sisaPe=$totp3a-$totrp3a

  ?>

                <div id="piechartp3a"></div>


<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


 var sisaPe = <?php Print($sisaPe); ?>;
    var totrp3a = <?php Print($totrp3a); ?>;

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Perbandingan'],
  ['Belum Realisasi', sisaPe],
  ['Sudah Realisasi', totrp3a]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'P3A', 'width':450, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechartp3a'));
  chart.draw(data, options);
}
</script>

                  </div>




                  <!-- ./col -->
                  <div class="col col-md-4 text-center">
                    
<?php
  $res=mysqli_query($conn, "SELECT SUM(pagu) AS pg FROM pagu WHERE bidang = 'APD'");
  $rowi = mysqli_fetch_assoc($res);
  $totpapd=$rowi['pg'];


   $res1=mysqli_query($conn, "SELECT SUM(realisasi) AS pr FROM pagu WHERE bidang = 'APD'");
  $rowi1 = mysqli_fetch_assoc($res1);
  $totrapd=$rowi1['pr'];
$sisaAP=$totpapd-$totrapd

  ?>

                <div id="piechartapd"></div>


<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


 var sisaAP = <?php Print($sisaAP); ?>;
    var totrapd = <?php Print($totrapd); ?>;

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Perbandingan'],
  ['Belum Realisasi', sisaAP],
  ['Sudah Realisasi', totrapd]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'APD', 'width':450, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechartapd'));
  chart.draw(data, options);
}
</script>
                  </div>
                  <!-- ./col -->


                  <div class="col col-md-4 text-center">
                    
<?php
  $res=mysqli_query($conn, "SELECT SUM(pagu) AS pg FROM pagu WHERE bidang = 'AN'");
  $rowi = mysqli_fetch_assoc($res);
  $totp3a=$rowi['pg'];


   $res1=mysqli_query($conn, "SELECT SUM(realisasi) AS pr FROM pagu WHERE bidang = 'AN'");
  $rowi1 = mysqli_fetch_assoc($res1);
  $totrp3a=$rowi1['pr'];

$sisaAN=$totp3a-$totrp3a

  ?>

                <div id="piechartan"></div>


<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


 var sisaAN = <?php Print($sisaAN); ?>;
    var totran = <?php Print($totrp3a); ?>;

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Perbandingan'],
  ['Belum Realisasi', sisaAN],
  ['Sudah Realisasi', totran]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'AN', 'width':450, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechartan'));
  chart.draw(data, options);
}
</script>
                 



</div>




<div class="col col-md-4 text-center">
                    
<?php
  $res=mysqli_query($conn, "SELECT SUM(pagu) AS pg FROM pagu WHERE bidang = 'INVESTIGASI'");
  $rowi = mysqli_fetch_assoc($res);
  $totpapd=$rowi['pg'];


   $res1=mysqli_query($conn, "SELECT SUM(realisasi) AS pr FROM pagu WHERE bidang = 'INVESTIGASI'");
  $rowi1 = mysqli_fetch_assoc($res1);
  $totrapd=$rowi1['pr'];

$sisaIn=$totpapd-$totrapd

  ?>

                <div id="piechartinv"></div>


<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


 var sisaIn = <?php Print($sisaIn); ?>;
    var totrinv = <?php Print($totrapd); ?>;

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Perbandingan'],
  ['Belum Realisasi', sisaIn],
  ['Sudah Realisasi', totrinv]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'INVESTIGASI', 'width':450, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechartinv'));
  chart.draw(data, options);
}
</script>
                
                </div>








<div class="col col-md-4 text-center">
                    
<?php
  $res=mysqli_query($conn, "SELECT SUM(pagu) AS pg FROM pagu WHERE bidang = 'Bagian Tata Usaha'");
  $rowi = mysqli_fetch_assoc($res);
  $totpapd=$rowi['pg'];


   $res1=mysqli_query($conn, "SELECT SUM(realisasi) AS pr FROM pagu WHERE bidang = 'Bagian Tata Usaha'");
  $rowi1 = mysqli_fetch_assoc($res1);
  $totrapd=$rowi1['pr'];

$sisaTU=$totpapd-$totrapd

  ?>

                <div id="piechartt"></div>


<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


 var sisaTU = <?php Print($sisaTU); ?>;
    var totrt = <?php Print($totrapd); ?>;

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Perbandingan'],
  ['Belum Realisasi', sisaTU],
  ['Sudah Realisasi', totrt]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Bagian Tata Usaha', 'width':450, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechartt'));
  chart.draw(data, options);
}
</script>
                
                </div>





<!--  -->
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Rekap Pagu Anggaran</h3><br/>

                <a href="download-rekap.php">
                <button type="button" class="btn btn-success">download</button><a/>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Bidang</th>
                    <th>Pagu</th>
                    <th>Realisasi</th>
                    <th>Sisa Pagu</th>
                    <th>Outstanding</th>
                    <th>Pagu Setelah Outstanding</th>
                  </tr>
                  </thead>

                  <tr>
                    

                                      <tbody>
                                        <td>1</td>
                    <?php
                    

                     $jml=mysqli_query($conn, "SELECT SUM(pagu) AS jum FROM pagu WHERE bidang = 'Bagian Tata Usaha'");
  $jumlah = mysqli_fetch_assoc($jml);
  $jm=$jumlah['jum'];

  $jml1=mysqli_query($conn, "SELECT SUM(sisa_pagu) AS jum FROM pagu WHERE bidang = 'Bagian Tata Usaha'");
  $jumlah1 = mysqli_fetch_assoc($jml1);
  $jm1=$jumlah1['jum'];

   $jml2=mysqli_query($conn, "SELECT SUM(realisasi) AS jum FROM pagu WHERE bidang = 'Bagian Tata Usaha'");
  $jumlah2 = mysqli_fetch_assoc($jml2);
  $jm2=$jumlah2['jum'];

  $jml3=mysqli_query($conn, "SELECT SUM(outstanding) AS jum FROM pagu WHERE bidang = 'Bagian Tata Usaha'");
  $jumlah3 = mysqli_fetch_assoc($jml3);
  $jm3=$jumlah3['jum'];

    $jml4=mysqli_query($conn, "SELECT SUM(pagu_outstanding) AS jum FROM pagu WHERE bidang = 'Bagian Tata Usaha'");
  $jumlah4 = mysqli_fetch_assoc($jml4);
  $jm4=$jumlah4['jum'];
                
                

                ?>
                    <td><a href="detail-bidang.php?bidang=Bagian Tata Usaha">Bagian Tata Usaha</a></td>

                     <td><?="Rp. ". number_format($jm, 0, ".", ".")?></td>

                     <td><?="Rp. ". number_format($jm2, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm1, 0, ".", ".")?></td>
                    
                    <td><?="Rp. ". number_format($jm3, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm4, 0, ".", ".")?></td>
                  </tr>


<?php
                    

                     $jml=mysqli_query($conn, "SELECT SUM(pagu) AS jum FROM pagu WHERE bidang = 'PIPP Perekonomian'");
  $jumlah = mysqli_fetch_assoc($jml);
  $jm=$jumlah['jum'];

  $jml1=mysqli_query($conn, "SELECT SUM(sisa_pagu) AS jum FROM pagu WHERE bidang = 'PIPP Perekonomian'");
  $jumlah1 = mysqli_fetch_assoc($jml1);
  $jm1=$jumlah1['jum'];

   $jml2=mysqli_query($conn, "SELECT SUM(realisasi) AS jum FROM pagu WHERE bidang = 'PIPP Perekonomian'");
  $jumlah2 = mysqli_fetch_assoc($jml2);
  $jm2=$jumlah2['jum'];

  $jml3=mysqli_query($conn, "SELECT SUM(outstanding) AS jum FROM pagu WHERE bidang = 'PIPP Perekonomian'");
  $jumlah3 = mysqli_fetch_assoc($jml3);
  $jm3=$jumlah3['jum'];
                
      $jml4=mysqli_query($conn, "SELECT SUM(pagu_outstanding) AS jum FROM pagu WHERE bidang = 'PIPP Perekonomian'");
  $jumlah4 = mysqli_fetch_assoc($jml4);
  $jm4=$jumlah4['jum'];
                
                

                ?>


                <td>2</td>
                    <td><a href="detail-bidang.php?bidang=PIPP Perekonomian">Bidang PIPP Perekonomian</a></td>

                     <td><?="Rp. ". number_format($jm, 0, ".", ".")?></td>

                     <td><?="Rp. ". number_format($jm2, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm1, 0, ".", ".")?></td>
                    
                    <td><?="Rp. ". number_format($jm3, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm4, 0, ".", ".")?></td>
                  </tr>

<?php
                    

                     $jml=mysqli_query($conn, "SELECT SUM(pagu) AS jum FROM pagu WHERE bidang = 'PIPP Polhukam PMK'");
  $jumlah = mysqli_fetch_assoc($jml);
  $jm=$jumlah['jum'];

  $jml1=mysqli_query($conn, "SELECT SUM(sisa_pagu) AS jum FROM pagu WHERE bidang = 'PIPP Polhukam PMK'");
  $jumlah1 = mysqli_fetch_assoc($jml1);
  $jm1=$jumlah1['jum'];

   $jml2=mysqli_query($conn, "SELECT SUM(realisasi) AS jum FROM pagu WHERE bidang = 'PIPP Polhukam PMK'");
  $jumlah2 = mysqli_fetch_assoc($jml2);
  $jm2=$jumlah2['jum'];

  $jml3=mysqli_query($conn, "SELECT SUM(outstanding) AS jum FROM pagu WHERE bidang = 'PIPP Polhukam PMK'");
  $jumlah3 = mysqli_fetch_assoc($jml3);
  $jm3=$jumlah3['jum'];
                
  $jml4=mysqli_query($conn, "SELECT SUM(pagu_outstanding) AS jum FROM pagu WHERE bidang = 'PIPP Polhukam PMK'");
  $jumlah4 = mysqli_fetch_assoc($jml4);
  $jm4=$jumlah4['jum'];              

                ?>


                <td>3</td>
                    <td><a href="detail-bidang.php?bidang=PIPP Polhukam PMK">Bidang PIPP Polhukam PMK</a></td>

                     <td><?="Rp. ". number_format($jm, 0, ".", ".")?></td>

                     <td><?="Rp. ". number_format($jm2, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm1, 0, ".", ".")?></td>
                    
                    <td><?="Rp. ". number_format($jm3, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm4, 0, ".", ".")?></td>
                  </tr>







<?php
                    

                     $jml=mysqli_query($conn, "SELECT SUM(pagu) AS jum FROM pagu WHERE bidang = 'INVESTIGASI'");
  $jumlah = mysqli_fetch_assoc($jml);
  $jm=$jumlah['jum'];

  $jml1=mysqli_query($conn, "SELECT SUM(sisa_pagu) AS jum FROM pagu WHERE bidang = 'INVESTIGASI'");
  $jumlah1 = mysqli_fetch_assoc($jml1);
  $jm1=$jumlah1['jum'];

   $jml2=mysqli_query($conn, "SELECT SUM(realisasi) AS jum FROM pagu WHERE bidang = 'INVESTIGASI'");
  $jumlah2 = mysqli_fetch_assoc($jml2);
  $jm2=$jumlah2['jum'];

  $jml3=mysqli_query($conn, "SELECT SUM(outstanding) AS jum FROM pagu WHERE bidang = 'INVESTIGASI'");
  $jumlah3 = mysqli_fetch_assoc($jml3);
  $jm3=$jumlah3['jum'];
                
   $jml4=mysqli_query($conn, "SELECT SUM(pagu_outstanding) AS jum FROM pagu WHERE bidang = 'INVESTIGASI'");
  $jumlah4 = mysqli_fetch_assoc($jml4);
  $jm4=$jumlah4['jum']; 

                ?>


                <td>4</td>
                    <td><a href="detail-bidang.php?bidang=INVESTIGASI">Bidang Investigasi</a></td>

                     <td><?="Rp. ". number_format($jm, 0, ".", ".")?></td>

                     <td><?="Rp. ". number_format($jm2, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm1, 0, ".", ".")?></td>
                    
                    <td><?="Rp. ". number_format($jm3, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm4, 0, ".", ".")?></td>
                  </tr>





<?php
                    

                     $jml=mysqli_query($conn, "SELECT SUM(pagu) AS jum FROM pagu WHERE bidang = 'P3A'");
  $jumlah = mysqli_fetch_assoc($jml);
  $jm=$jumlah['jum'];

  $jml1=mysqli_query($conn, "SELECT SUM(sisa_pagu) AS jum FROM pagu WHERE bidang = 'P3A'");
  $jumlah1 = mysqli_fetch_assoc($jml1);
  $jm1=$jumlah1['jum'];

   $jml2=mysqli_query($conn, "SELECT SUM(realisasi) AS jum FROM pagu WHERE bidang = 'P3A'");
  $jumlah2 = mysqli_fetch_assoc($jml2);
  $jm2=$jumlah2['jum'];

  $jml3=mysqli_query($conn, "SELECT SUM(outstanding) AS jum FROM pagu WHERE bidang = 'P3A'");
  $jumlah3 = mysqli_fetch_assoc($jml3);
  $jm3=$jumlah3['jum'];
                
  $jml4=mysqli_query($conn, "SELECT SUM(pagu_outstanding) AS jum FROM pagu WHERE bidang = 'P3A'");
  $jumlah4 = mysqli_fetch_assoc($jml4);
  $jm4=$jumlah4['jum'];               

                ?>


                <td>5</td>
                    <td><a href="detail-bidang.php?bidang=P3A">Bidang P3A</a></td>

                     <td><?="Rp. ". number_format($jm, 0, ".", ".")?></td>

                     <td><?="Rp. ". number_format($jm2, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm1, 0, ".", ".")?></td>
                    
                    <td><?="Rp. ". number_format($jm3, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm4, 0, ".", ".")?></td>
                  </tr>











<?php
                    

                     $jml=mysqli_query($conn, "SELECT SUM(pagu) AS jum FROM pagu WHERE bidang = 'APD'");
  $jumlah = mysqli_fetch_assoc($jml);
  $jm=$jumlah['jum'];

  $jml1=mysqli_query($conn, "SELECT SUM(sisa_pagu) AS jum FROM pagu WHERE bidang = 'APD'");
  $jumlah1 = mysqli_fetch_assoc($jml1);
  $jm1=$jumlah1['jum'];

   $jml2=mysqli_query($conn, "SELECT SUM(realisasi) AS jum FROM pagu WHERE bidang = 'APD'");
  $jumlah2 = mysqli_fetch_assoc($jml2);
  $jm2=$jumlah2['jum'];

  $jml3=mysqli_query($conn, "SELECT SUM(outstanding) AS jum FROM pagu WHERE bidang = 'APD'");
  $jumlah3 = mysqli_fetch_assoc($jml3);
  $jm3=$jumlah3['jum'];
                
   $jml4=mysqli_query($conn, "SELECT SUM(pagu_outstanding) AS jum FROM pagu WHERE bidang = 'APD'");
  $jumlah4 = mysqli_fetch_assoc($jml4);
  $jm4=$jumlah4['jum'];                

                ?>


                <td>6</td>
                    <td><a href="detail-bidang.php?bidang=APD">Bidang APD</a></td>

                   <td><?="Rp. ". number_format($jm, 0, ".", ".")?></td>

                   <td><?="Rp. ". number_format($jm2, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm1, 0, ".", ".")?></td>
                    
                    <td><?="Rp. ". number_format($jm3, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm4, 0, ".", ".")?></td>
                  </tr>









<?php
                    

                     $jml=mysqli_query($conn, "SELECT SUM(pagu) AS jum FROM pagu WHERE bidang = 'AN'");
  $jumlah = mysqli_fetch_assoc($jml);
  $jm=$jumlah['jum'];

  $jml1=mysqli_query($conn, "SELECT SUM(sisa_pagu) AS jum FROM pagu WHERE bidang = 'AN'");
  $jumlah1 = mysqli_fetch_assoc($jml1);
  $jm1=$jumlah1['jum'];

   $jml2=mysqli_query($conn, "SELECT SUM(realisasi) AS jum FROM pagu WHERE bidang = 'AN'");
  $jumlah2 = mysqli_fetch_assoc($jml2);
  $jm2=$jumlah2['jum'];

  $jml3=mysqli_query($conn, "SELECT SUM(outstanding) AS jum FROM pagu WHERE bidang = 'AN'");
  $jumlah3 = mysqli_fetch_assoc($jml3);
  $jm3=$jumlah3['jum'];
                
   $jml4=mysqli_query($conn, "SELECT SUM(pagu_outstanding) AS jum FROM pagu WHERE bidang = 'AN'");
  $jumlah4 = mysqli_fetch_assoc($jml4);
  $jm4=$jumlah4['jum'];               

                ?>


                <td>7</td>
                    <td><a href="detail-bidang.php?bidang=AN">Bidang AN</a></td>

                    <td><?="Rp. ". number_format($jm, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm2, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm1, 0, ".", ".")?></td>
                    
                    <td><?="Rp. ". number_format($jm3, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm4, 0, ".", ".")?></td>
                  </tr>

<?php
                    

                     $jml=mysqli_query($conn, "SELECT SUM(pagu) AS jum FROM pagu");
  $jumlah = mysqli_fetch_assoc($jml);
  $jm=$jumlah['jum'];

  $jml1=mysqli_query($conn, "SELECT SUM(sisa_pagu) AS jum FROM pagu");
  $jumlah1 = mysqli_fetch_assoc($jml1);
  $jm1=$jumlah1['jum'];

   $jml2=mysqli_query($conn, "SELECT SUM(realisasi) AS jum FROM pagu");
  $jumlah2 = mysqli_fetch_assoc($jml2);
  $jm2=$jumlah2['jum'];

  $jml3=mysqli_query($conn, "SELECT SUM(outstanding) AS jum FROM pagu");
  $jumlah3 = mysqli_fetch_assoc($jml3);
  $jm3=$jumlah3['jum'];
                
  $jml4=mysqli_query($conn, "SELECT SUM(pagu_outstanding) AS jum FROM pagu");
  $jumlah4 = mysqli_fetch_assoc($jml4);
  $jm4=$jumlah4['jum'];               

                ?>


                <td></td>
                    <td>Jumlah</td>

                    <td><?="Rp. ". number_format($jm, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm2, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm1, 0, ".", ".")?></td>
               
                    <td><?="Rp. ". number_format($jm3, 0, ".", ".")?></td>

                    <td><?="Rp. ". number_format($jm4, 0, ".", ".")?></td>
                </tr>








                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->




        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 Sub Bagian Keuangan</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas, { 
      type: 'line',
      data: areaChartData, 
      options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
    var lineChartData = jQuery.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, { 
      type: 'line',
      data: lineChartData, 
      options: lineChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome', 
          'IE',
          'FireFox', 
          'Safari', 
          'Opera', 
          'Navigator', 
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = jQuery.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    var stackedBarChart = new Chart(stackedBarChartCanvas, {
      type: 'bar', 
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
