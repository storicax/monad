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
$bidang=$_GET['bidang'];
include 'koneksi.php';

?>


<center><h3>PAGU <?=$bidang?><h3></center>
  <br>
<table border="2">
  <thead style="color: #3281a8">
                
                  <tr>
                    <th>No.</th>
                    <th>No Akun</th>
                    <th>Nama Akun</th>
                    <th>Bidang</th>
                    <th>Pagu</th> 
                    <th>Sisa Pagu</th>
                    <th>Realisasi</th>
                    <th>Outstanding</th>
                    <th>Pagu Outstanding</th>
                    
                  </tr>
                  </thead>

               
                  <tbody>
                     <?php
                $a=1;
                $query=mysqli_query($conn, "SELECT * FROM pagu WHERE bidang = '$bidang' ");
                  while($row = mysqli_fetch_assoc($query)){

                ?>
                  <tr>
                    <th><?=$a?></th>
                    <td><?=$row['no_akun']?></td>
                    <td><?=$row['nama_akun']?>
                    </td>
                    <td><?=$row['bidang']?></td>
                    <td><?=number_format($row['pagu'])?></td>
                    <td><?=number_format($row['sisa_pagu'])?></td>
                    <td><?=number_format($row['realisasi'])?></td>
                    <td><?=number_format($row['outstanding'])?></td>
                    <td><?=number_format($row['pagu_outstanding'])?></td>
         
                  </tr>
                  
                                <?php
                       $a++;
      }
      ?>
                  </tbody>
                  
                </table>
                <?php

header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=laporan_$bidang.xls");



 ?>


