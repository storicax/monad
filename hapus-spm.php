<?php
session_start();
if(!isset($_SESSION['login_user'])){
  echo "<script LANGUAGE='JavaScript'>
    window.alert('Anda Belum Login');
    window.location.href='login.php';
    </script>";
}
include 'koneksi.php';

$id = $_GET['id'];

  $result1= mysqli_query($conn,"SELECT * FROM transaksi WHERE id = '$id' ");

  $row1=mysqli_fetch_assoc($result1);

  $no_akun=$row1['no_akun'];

  $result= mysqli_query($conn,"SELECT * FROM pagu WHERE no_akun = '$no_akun' ");

  $row=mysqli_fetch_assoc($result);

 
  $jumlah_biaya=$row1['jumlah_biaya'];

  $outstandingfix=$row['outstanding'];
  $pagufix=$row['pagu_outstanding'];
  
  $kembalianoutstanding=$outstandingfix-$jumlah_biaya;
  $kembaliansisaoutstanding=$pagufix+$jumlah_biaya;

  $update= mysqli_query($conn,"UPDATE pagu SET outstanding = '$kembalianoutstanding', pagu_outstanding='$kembaliansisaoutstanding' WHERE no_akun = '$no_akun' ");



  $sql="DELETE FROM transaksi WHERE id ='$id'";





  if ($conn->query($sql) === TRUE) {

    echo "<script LANGUAGE='JavaScript'>
    window.alert('Kegiatan telah dihapus');
    window.location.href='rubah-status.php';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

