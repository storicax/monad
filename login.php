<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> | login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<br/><br/>
<h1><center>Aplikasi Monitoring Anggaran COVID-19</center></h1>
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
  </div>
  <!-- User name -->
  <div class="lockscreen-name"><h1></h1>Perwakilan BPKP Provinsi DKI Jakarta</div><br/><br/>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="kopy.png" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form action="" method="post" class="lockscreen-credentials">
      <div class="input-group">
        <input name="pin" type="password" class="form-control" placeholder="password">

        <div class="input-group-append">
          <button name="submit" type="submit" class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->
</div>
<!-- /.center -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
if(isset($_POST['submit'])){
  $pin0=bpkp1dki;

  $pin=$_POST['pin'];

  if($pin==$pin0){
    $_SESSION['login_user']=$pin;
    echo "<script LANGUAGE='JavaScript'>
    window.alert('Berhasil Masuk');
    window.location.href='index.php';
    </script>";
  }else{
     echo "<script LANGUAGE='JavaScript'>
    window.alert('PIN SALAH');
    </script>";
  }
}
?>
