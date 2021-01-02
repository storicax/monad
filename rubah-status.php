<?php
session_start();
if(!isset($_SESSION['login_user'])){
  echo "<script LANGUAGE='JavaScript'>
    window.alert('Anda Belum Login');
    window.location.href='login.php';
    </script>";
}
include 'koneksi.php';
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
            <h3 class="m-0 text-dark">Rubah Menjadi SPM</h3>
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
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Rubah Status</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>



                <table id="example" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Bidang</th>
                    <th>Biaya</th>
                    <th>No Akun</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Status</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                 

                  <tbody>
                     <?php
                $a=1;
                $query=mysqli_query($conn, "SELECT * FROM transaksi WHERE status = 0");
                  while($row = mysqli_fetch_assoc($query)){

                ?>
                  <tr>
                    <td><?=$a?></td>
                    <td><?=$row['nama_kegiatan']?>
                    </td>
                    <td><?=$row['bidang']?></td>
                    <td><?=number_format($row['jumlah_biaya'])?></td>
                    <td><?=$row['no_akun']?></td>
                    <td><?=$row['tanggal_mulai']?></td>
                    <td><?=$row['tanggal_selesai']?></td>
                    <td>
                      <?php
                      if($row['status']=='1'){
                        ?>
                         <button class="btn btn-success">sudah SPM</button>
                         <?php
                      }else{
                         ?>
                         <button class="btn btn-warning">belum SPM</button>
                         <?php
                      }
                      ?>
                      </td>

                    <td>

                       <?php
                      if($row['status']=='0'){
                        ?>
                        <a href="edit-spm.php?id=<?=$row['id']?>"> <button type="button" class="btn btn-block btn-outline-warning btn-sm">Edit</button></a>
                         <?php
                      }
                      ?>
                      
                      <?php
                      if($row['status']=='0'){
                        ?>
                        <a href="hapus-spm.php?id=<?=$row['id']?>"  onclick="return confirm('Apakah Anda Yakin Akan Menghapusnya?');"> <button type="button" class="btn btn-block btn-outline-danger btn-sm">Hapus</button></a>
                         <?php
                      }
                      ?>


                      <?php
                      if($row['status']=='1'){

                      }else{
                        ?>
                         <a href="spmkan.php?id=<?=$row['id']?>"> <button type="button" class="btn btn-block btn-outline-primary btn-sm" onclick="return confirm('Apakah Anda Akan Meng SPM kan Kegiatan Ini?');">SPM</button></a>
                         <?php
                      }
                      ?>
                    
                    </td>
                    
                  </tr>
                 <?php
                       $a++;
      }
      ?>
                  </tbody>
                  

                </table>
                     <script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>


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
</body>
</html>
