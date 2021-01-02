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


<center><h3>laporan Rekap<h3></center>
  <br>
<table border="2">
                                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Bidang</th>
                    <th>Pagu</th>
                    <th>Realisasi</th>
                    <th>Sisa Pagu</th>
                    <th>Outstanding</th>
                    <th>Sisa Pagu Setelah Outstanding</th>
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

                <?php

header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=laporan_rekap.xls");



 ?>


