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


  $sql="DELETE FROM pagu WHERE id ='$id'";


  if ($conn->query($sql) === TRUE) {

    echo "<script LANGUAGE='JavaScript'>
    window.location.href='pagu.php';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

