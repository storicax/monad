 <?php
 session_start();
if(!isset($_SESSION['login_user'])){
  echo "<script LANGUAGE='JavaScript'>
    window.alert('Anda Belum Login');
    window.location.href='login.php';
    </script>";
}
 include 'koneksi.php';

 $id=$_GET['id'];

  $result1= mysqli_query($conn,"SELECT * FROM transaksi WHERE id = '$id' ");

  $row1=mysqli_fetch_assoc($result1);

  $no_akun=$row1['no_akun'];

  $result= mysqli_query($conn,"SELECT * FROM pagu WHERE no_akun = '$no_akun' ");

  $row=mysqli_fetch_assoc($result);


  $jumlah_biaya=$row1['jumlah_biaya'];
  $outstanding=$row['outstanding'];
  $sisa_pagu=$row['sisa_pagu'];
  $realisasi=$row['realisasi'];

  $hasiloutstanding=$outstanding-$jumlah_biaya;
  $hasilsisapagu=$sisa_pagu-$jumlah_biaya;
  $hasilrealisasi=$realisasi+$jumlah_biaya;


  $update= mysqli_query($conn,"UPDATE pagu SET sisa_pagu = '$hasilsisapagu', realisasi='$hasilrealisasi', outstanding= '$hasiloutstanding' WHERE no_akun = '$no_akun' ");

   mysqli_query($conn,"UPDATE transaksi SET status = '1' WHERE id = '$id' ");

  echo "<script LANGUAGE='JavaScript'>
    window.alert('Berhasil SPM ');
    window.location.href='pagu.php';
    </script>";
?>

<!-- // $i='1';

// if ($conn->query($update) === TRUE) {

//  mysqli_query($conn,"UPDATE transaksi SET status = 'bbbbb' WHERE id = '$id");

//   echo "<script LANGUAGE='JavaScript'>
//     window.alert('Berhasil SPM ');
//     window.location.href='rubah-status.php';
//     </script>";
// } else {
//     echo "Error: " . $update . "<br>" . $conn->error;
// }
 -->