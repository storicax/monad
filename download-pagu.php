<?php
ob_start();
ob_clean();
session_start();
if(!isset($_SESSION['login_user'])){
  echo "<script LANGUAGE='JavaScript'>
    window.alert('Anda Belum Login');
    window.location.href='login.php';
    </script>";
}
include 'koneksi.php';

?>



<center><h3>PAGU<h3></center>
	<br>
<table border="2">
  
    <tr>
      <th >No</th>
      <th >No Akun</th>
      <th >Nama Akun</th>
      <th >Bidang</th>
      <th >Pagu</th>
        <th >Sisa Pagu</th>
          <th >Realisasi</th>
          <th >Outstanding</th>
          <th >Pagu Outstanding </th>
      

    </tr>

  <?php
  $result = mysqli_query($conn, 'SELECT * FROM pagu ');
  
 
$no=1;
	while($row = mysqli_fetch_assoc($result)) { 
?>
  
    <tr>
      <th ><?=$no?></th>
      <td><?=$row['no_akun']?></td>
      <td><?=$row['nama_akun']?></td>
       <td><?=$row['bidang']?></td>
      <td><?=$row['pagu']?></td>
      <td><?=$row['sisa_pagu']?></td>
      <td><?=$row['realisasi']?></td>
      <td><?=$row['outstanding']?></td>
      <td><?=$row['pagu_outstanding']?></td>
       

    </tr>

  

  <?php
  $no++;
}

header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=laporan_pagu.xls");



 ?>


